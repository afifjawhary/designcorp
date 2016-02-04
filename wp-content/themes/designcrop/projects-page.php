<?php
/**
 * Template Name: Page of Projects
 *
 *
 */

get_header(); ?>

    <div id="container">
        <div id="content">
            <div class="all_projects_container">
                <div class="inner_text_title">Projects</div>
                <div class="projects_tabs_container">
                    <ul>
                        <li class="current_project_tab" id="houses_tab"><span>Houses</span><div class="project_mob" id="mob_Houses"></div></li>
                        <li id="residential_tab"><span>Residential</span><div class="project_mob" id="mob_Residential"></div></li>
                        <li id="public_tab"><span>Public & Commercials</span><div class="project_mob" id="mob_Public__Commercials"></div></li>
                    </ul>
                </div>
                <div class="clear"></div>

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
                $new_arr[$fields["type"]][$fields["category"]][$wp_query->post->ID] = $fields;
                // echo "<pre>";print_r( $fields ); 
                // get_template_part( 'entry-projects' ); 
            endwhile;
        else :
            echo '<h2>Not Found</h2>';
        endif;

        // echo "<pre>";print_r( $new_arr ); exit;
        foreach ($new_arr as $type => $project_info) {
            ?>
            <div  class="project_tab_content" id="<?php echo str_replace(" " , "_", str_replace("&" , "", $type));?>">
            <?php
        foreach ($project_info as $category => $project_info2) {
            echo "<div class='tab_category'>" . $category . "</div>";
            foreach ($project_info2 as $postid => $value) {
                ?>
                <a href="<?php echo get_permalink($postid);?>"><img src="<?php echo $value['image'];?>" /></a>&nbsp;&nbsp;
                <?php
            }
        }
        ?>
            </div>
            <?php
        }

        $wp_query = $temp;
        ?>
            </div>
            <div class="clear"></div>
        </div><!-- #content -->
    </div><!-- #container -->
<?php get_footer(); ?>