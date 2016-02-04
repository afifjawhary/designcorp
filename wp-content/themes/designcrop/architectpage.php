<?php
/**
 * Template Name: Page of Architectural Process
 *
 *
 */

get_header(); ?>

    <div id="container">
        <div id="content">
            <img class="alignnone size-full wp-image-16" src="<?php echo site_url();?>/wp-content/uploads/2015/09/inner_pgw.jpg" alt="inner_pgw" width="100%" height="398" />
            <div class="inner-text-container">
            <div class="inner2">
            <div class="inner_text_title">Architectural process</div>
            <div class="tabs_container">
            <ul>
                <li><a id="free_initial_consultation" class="current_tab" href="#"><?php the_field("tab1");?></a></li>
                <li><a id="design_brief" href="#"><?php the_field("tab2");?></a></li>
                <li><a id="schematic_design" href="#"><?php the_field("tab3");?></a></li>
                <li><a id="development_application" href="#"><?php the_field("tab4");?></a></li>
                <li><a id="tender_construction_documentations" href="#"><?php the_field("tab5");?></a></li>
            </ul>
            </div>
            <div class="clear"></div>
            <div class="tabs_content_container">
            <div id="free_initial_consultation_content" class="tabs_content"><?php the_field("tab1_content");?></div>
            <div id="design_brief_content" class="tabs_content"><?php the_field("tab2_content");?></div>
            <div id="schematic_design_content" class="tabs_content"><?php the_field("tab3_content");?></div>
            <div id="development_application_content" class="tabs_content"><?php the_field("tab4_content");?></div>
            <div id="tender_construction_documentations_content" class="tabs_content"><?php the_field("tab5_content");?></div>
            </div>
            <div class="mobile_architect_menu">
            <ul>
                <li><a id="free_initial_consultation2" class="" href="#"><?php the_field("tab1");?></a>
            <div id="free_initial_consultation_content2" class="tabs_content"></div></li>
                <li><a id="design_brief2" href="#"><?php the_field("tab2");?></a>
            <div id="design_brief_content2" class="tabs_content"></div></li>
                <li><a id="schematic_design2" href="#"><?php the_field("tab3");?></a>
            <div id="schematic_design_content2" class="tabs_content"></div></li>
                <li><a id="development_application2" href="#"><?php the_field("tab4");?></a>
            <div id="development_application_content2" class="tabs_content"></div></li>
                <li><a id="tender_construction_documentations2" href="#"><?php the_field("tab5");?></a>
            <div id="tender_construction_documentations_content2" class="tabs_content"></div></li>
            </ul>
            </div>
            </div>
            </div>
            <div class="clear"></div>
        </div><!-- #content -->
    </div><!-- #container -->
<?php get_footer(); ?>