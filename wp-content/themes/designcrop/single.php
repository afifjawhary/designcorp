<?php get_header(); ?>
<article class="page-article">
<section id="content" role="main">
	<header class="header page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); 

 endwhile; endif; ?>

</section>
</article>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
