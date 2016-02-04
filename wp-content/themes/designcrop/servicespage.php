<?php
/**
 * Template Name: Page of Services
 *
 *
 */

get_header(); ?>

    <div id="container">
        <div id="content">
		<img class="alignnone wp-image-140 size-full" src="<?php echo site_url();?>/wp-content/uploads/2015/09/services_banner.jpg" alt="" width="1917" height="398" />
		<div class="inner-text-container">
		<div class="inner2">
		<div class="inner_text_title">Services</div>
		<div class="tabs_container">
		<ul>
			<li><a href="#" id="commercial_design" class="current_tab"><?php the_field("tab1");?></a></li>
			<li><a href="#" id="retail_design"><?php the_field("tab2");?></a></li>
			<li><a href="#" id="project_management"><?php the_field("tab3");?></a></li>
			<li><a href="#" id="sustainable_architecture"><?php the_field("tab4");?></a></li>
			<li><a href="#" id="residential_design"><?php the_field("tab5");?></a></li>
		</ul>
		</div>
		<div class="clear"></div>
		<div class="tabs_content_container">
		<div id="commercial_design_content" class="tabs_content"><?php the_field("tab1_content");?></div>
		<div id="retail_design_content" class="tabs_content"><?php the_field("tab2_content");?></div>
		<div id="project_management_content" class="tabs_content"><?php the_field("tab3_content");?></div>
		<div id="sustainable_architecture_content" class="tabs_content"><?php the_field("tab4_content");?></div>
		<div id="residential_design_content" class="tabs_content"><?php the_field("tab5_content");?></div>
		</div>
		<div class="mobile_architect_menu">
		<ul>
			<li><a href="#" id="commercial_design2"><?php the_field("tab1");?></a>
		<div id="commercial_design_content2" class="tabs_content"></div></li>
			<li><a href="#" id="retail_design2"><?php the_field("tab2");?></a>
		<div id="retail_design_content2" class="tabs_content"></div></li>
			<li><a href="#" id="project_management2"><?php the_field("tab3");?></a>
		<div id="project_management_content2" class="tabs_content"></div></li>
			<li><a href="#" id="sustainable_architecture2"><?php the_field("tab4");?></a>
		<div id="sustainable_architecture_content2" class="tabs_content"></div></li>
			<li><a href="#" id="residential_design2"><?php the_field("tab5");?></a>
		<div id="residential_design_content2" class="tabs_content"></div></li>
		</ul>
		</div>
		</div>
		</div>
		<div class="clear"></div>
        </div><!-- #content -->
    </div><!-- #container -->
<?php get_footer(); ?>