<?php get_header(); ?>
<article class="page-article">
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	
 ?>

<div class="page-container">
	<div class="individual_slider_container">
		<?php  $value = get_field( "slider" );echo do_shortcode($value); ?>
	</div>
	<div class="project_details">
		<div class="project_main_title">About project</div>
		<div class="project_title"><?php echo get_the_title();?></div>
		<div class="project_description"><?php the_field("description");?></div>
	</div>
	<div class="clear"></div>
</div>
<?php endwhile; endif; ?>
</section>
</article>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
