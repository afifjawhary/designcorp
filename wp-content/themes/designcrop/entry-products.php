<article class="page-article special-offers">
<section id="content" role="main">
	<footer class="footer">
	<div class="page-container">
		<div class="offers-paragraph">
			<ul>
				<li><img class="alignnone size-full wp-image-6" src="<?php the_field("offer_image");?>" alt="about-image" width="238" height="395" /></li>
				<li>
			<div class="paragraph-title"><?php the_field("title");?></div>
			<span class="normally-container">Normally: <span class="strike-through">$<?php the_field("normally");?></span></span><span class="now-container">Now: <b>$<?php the_field("now");?></b></span></li>
			</ul>
		</div>
		<div class="offers-details">
			<ul>
				<li><span class="pink-title">Details:</span>
			           <?php the_field("details");?>
			       </li>
				<li><span class="pink-title">Highlights:</span>
			           <?php the_field("highlights");?>
			        </li>
			</ul>
		</div>
		<div class="offers-description">
			<span class="pink-title">Description:</span>
			<?php the_field("description");?>
		</div>
		<div class="clear"></div>
	</div>
</footer>
</section>
</article>
