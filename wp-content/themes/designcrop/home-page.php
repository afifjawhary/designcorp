<?php
/**
 * Template Name: Home Page
 *
 *
 */

get_header(); ?>
<div class="outer-home-container">
<?php echo do_shortcode("[rev_slider main-slider]");?>
<div class="inner-text-container">
<div class="home_latest_news">Latest News</div>
<div class="blog_container">
<?php 

    query_posts('cat=3');
	while (have_posts()) : the_post();
	$post_info = get_post($wp_query->post->ID);
    // echo "<pre>";print_r($post_info);
    $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id($wp_query->post->ID) );
    ?>
    <div class="post_details">
	    <div class="news_title"><?php echo $post_info->post_title;?></div>
	    <div class="news_date"><?php echo date("d, F, Y",strtotime($post_info->post_date));?></div>
	    <div class="clear"></div>
	    <?php
	    if( isset($feat_image_url) && strlen($feat_image_url) > 0 ){
	    	?>
	    	<div class="featured_image"><img src="<?php echo $feat_image_url;?>" /></div>
	    	<?php
	    }
	    ?>
	    <div class="news_text"><?php echo $post_info->post_content;?></div>
	    <a href="<?php echo get_permalink($wp_query->post->ID);?>" class="news_readmore">Read More</a>
	</div>
    <?php
	endwhile;
    ?>
    
</div>
</div>
</div>

<?php get_footer(); ?>