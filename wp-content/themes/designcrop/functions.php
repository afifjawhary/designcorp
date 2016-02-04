<?php
add_action( 'after_setup_theme', 'Lasertech_setup' );

function Lasertech_setup()
{
	load_theme_textdomain( 'Lasertech', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
	register_nav_menus(
	array( 'main-menu' => __( 'Main Menu', 'Lasertech' ) )
	);
}

add_action( 'wp_enqueue_scripts', 'Lasertech_load_scripts' );

function Lasertech_load_scripts()
{
	wp_enqueue_script( 'jquery' );
}

add_action( 'comment_form_before', 'Lasertech_enqueue_comment_reply_script' );

function Lasertech_enqueue_comment_reply_script()
{
	if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}

add_filter( 'the_title', 'Lasertech_title' );

function Lasertech_title( $title ) {
	if ( $title == '' ) {
	return '&rarr;';
	} else {
	return $title;
	}
}

add_filter( 'wp_title', 'Lasertech_filter_wp_title' );

function Lasertech_filter_wp_title( $title )
{
	return $title . esc_attr( get_bloginfo( 'name' ) );
}

add_action( 'widgets_init', 'Lasertech_widgets_init' );

function Lasertech_widgets_init()
{
	register_sidebar( array (
	'name' => __( 'Sidebar Widget Area', 'Lasertech' ),
	'id' => 'primary-widget-area',
	'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	'after_widget' => "</li>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
}

function Lasertech_custom_pings( $comment )
{
	$GLOBALS['comment'] = $comment;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
	<?php 
}

add_filter( 'get_comments_number', 'Lasertech_comments_number' );

function Lasertech_comments_number( $count )
{
	if ( !is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}

/****** Added by Afif Jawhary on 26-11-2014 ******/
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'Projects',
    array(
      'labels' => array(
        'name' => 'All Projects',
        'singular_name' => 'Project' ,
        'menu_name'           => 'Projects',
        'singular_name'       => 'Project',
        'all_items'           => 'All Projects',
        'add_new_item'        => 'Add New Project',
        'search_items'        => 'Search Projects',
        'not_found'           => 'No projects found',
        'not_found_in_trash'  => 'No projects found in Trash',
        'edit_item'           => 'Edit Project',
        'new_item'            => 'New Project',
        'view_item'           => 'View Project'
      ),
      'supports'      => array( 'title' ),
  	  'menu_position' => 5,
      'public'        => true,
    )
  );
}

add_action( 'init', 'create_post_type2' );
function create_post_type2() {
  register_post_type( 'Employees',
    array(
      'labels' => array(
        'name' => 'All Employees',
        'singular_name' => 'Employee' ,
        'menu_name'           => 'Employees',
        'singular_name'       => 'Employee',
        'all_items'           => 'All Employees',
        'add_new_item'        => 'Add New Employee',
        'search_items'        => 'Search Employees',
        'not_found'           => 'No employee found',
        'not_found_in_trash'  => 'No employee found in Trash',
        'edit_item'           => 'Edit Employee',
        'new_item'            => 'New Employee',
        'view_item'           => 'View Employee'
      ),
      'supports'      => array(),
  	  'menu_position' => 5,
      'public'        => true,
    )
  );
}

function get_all_projects($atts){
	$number_of_posts = isset($atts["nb_posts"]) ? $atts["nb_posts"] : 100;
  	query_posts( array( 'post_type' => 'projects', 'showposts' => $number_of_posts ) );
	
    if ( have_posts() ) : while ( have_posts() ) : the_post();
		get_template_part( 'entry-projects' ); 
	endwhile; endif;
	wp_reset_query(); 
}
add_shortcode( 'projects', 'get_all_projects' );

remove_filter ('the_content',  'wpautop');
remove_filter ('comment_text', 'wpautop');


