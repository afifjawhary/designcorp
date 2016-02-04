<?php
/**
 * Template Name: Page of Projects
 *
 *
 */

get_header(); ?>
<header class="header page-header">
<h1 class="entry-title">

</h1>
</header>
    <div id="container">
        <div id="content">
        	<div class="all_projects_container">
        <?php 
        $type = 'projects';
        $args = array (
         'post_type' => $type,
         'post_status' => 'publish',
         'paged' => $paged,
         'posts_per_page' => 100,
         'ignore_sticky_posts'=> 1,
         'orderby'=> 'id',
    	 'order' => 'asc',
        );
        $temp = $wp_query; // assign ordinal query to temp variable for later use  
        $wp_query = null;
        $wp_query = new WP_Query($args); 
        if ( $wp_query->have_posts() ) :
            while ( $wp_query->have_posts() ) : $wp_query->the_post();
		        $fields = get_fields();
		        $new_arr[$fields["category"]][$wp_query->post->ID] = $fields;
				// echo "<pre>";print_r( $fields ); 
                // get_template_part( 'entry-projects' ); 
            endwhile;
        else :
            echo '<h2>Not Found</h2>';
        endif;

        // echo "<pre>";print_r( $new_arr ); exit;
        foreach ($new_arr as $category => $project_info) {
        	echo "<br>" . $category . "<br>";
        	foreach ($project_info as $postid => $value) {
        		?>
        		<a href="<?php echo get_permalink($postid);?>"><img src="<?php echo $value['image'];?>" /></a>&nbsp;&nbsp;
        		<?php
        	}
        }
        $wp_query = $temp;
        ?>
        	</div>
        </div><!-- #content -->
    </div><!-- #container -->
<?php get_footer(); ?>