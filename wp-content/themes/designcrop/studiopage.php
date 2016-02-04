<?php
/**
 * Template Name: Page of Studio
 *
 *
 */

get_header(); ?>

    <div id="container">
        <div id="content">
		<img class="alignnone wp-image-142 size-full" src="<?php echo site_url();?>/wp-content/uploads/2015/09/studio_banner.jpg" alt="" width="1920" height="398" />
		<div class="inner-text-container">
		<div class="inner2">
		<div class="inner_text_title">Studio</div>
		<div class="tabs_container">
		<ul>
			<li><a id="company" class="current_tab" href="#"><?php the_field("tab1");?></a></li>
			<li><a id="team" href="#"><?php the_field("tab2");?></a></li>
			<li><a id="media" href="#"><?php the_field("tab3");?></a></li>
			<?php
			$tab1 = get_field("tab1");
			$tab2 = get_field("tab2");
			$tab3 = get_field("tab3");
			$tab3_content = get_field("tab3_content",false, false);
			?>
		</ul>
		</div>
		<div class="clear"></div>
		<div class="tabs_content_container">
		<div id="company_content" class="tabs_content"><?php the_field("tab1_content");?></div>
		<div id="team_content" class="tabs_content">
			<ul>
			 <?php 
		        $type = 'employees';
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
		                $emp_name_arr = explode(" ", strtolower(get_the_title()));
		                $emp_name = $emp_name_arr[count($emp_name_arr)-1] == "el-sabbagh" ? "sabbagh" : $emp_name_arr[count($emp_name_arr)-1];
		                $emp_name = $emp_name == "pisarkiewicz" ? "pisarkie" : $emp_name;
	                	$thumbnail = $fields["thumbnail"];
	                	?>
	                	<li><a href="#" id="<?php echo $emp_name;?>"><img class="alignnone wp-image-195 size-full" src="<?php echo $thumbnail;?>" alt="" width="168" height="116" /><img class="plus_blue" src="<?php echo site_url();?>/wp-content/uploads/2015/09/plus_blue.jpg" alt="domain" /><div class="selected_emp"></div></a><div class="media_text"><?php echo get_the_title();?></div><div class="mobile_emp_cont" id="mob_<?php echo $emp_name;?>"></div></li>
	                	<?php
		            endwhile;
		        else :
		            echo '<h2>Not Found</h2>';
		        endif;

		        ?>
		    </ul>
		    <?php
		    if ( $wp_query->have_posts() ) :
		            while ( $wp_query->have_posts() ) : $wp_query->the_post();
		                $fields = get_fields();
		                $emp_name_arr = explode(" ", strtolower(get_the_title()));
		                $emp_name = $emp_name_arr[count($emp_name_arr)-1] == "el-sabbagh" ? "sabbagh" : $emp_name_arr[count($emp_name_arr)-1];
		                $emp_name = $emp_name == "pisarkiewicz" ? "pisarkie" : $emp_name;
	                	$image = $fields["image"];
	                	// echo "<pre>".$emp_name;print_r($fields);
	                	?>
	                	<div class="clear"></div>
						<div class="employee_details <?php echo $emp_name;?>">
						<div class="emp_left"><img class="alignnone size-full wp-image-175" src="<?php echo $image;?>" alt="employee1" width="743" height="342" /></div>
						<div class="emp_right">
						<div class="emp_name"><?php echo get_the_title();?></div>
						<div class="emp_pos"><?php echo $fields["position"];?></div>
						<div class="emp_detail"><?php echo $fields["details"];?></div>
						</div>
						</div>
	                	<?php
		            endwhile;
		        else :
		            echo '<h2>Not Found</h2>';
		        endif;
		        ?>
		</div>
		<div id="media_content" class="tabs_content"><?php echo html_entity_decode($tab3_content);?></div>
		</div>
		<div class="mobile_architect_menu">
		<ul>
			<li><a id="company2" href="#"><?php echo $tab1;?></a>
		<div id="company_content2" class="tabs_content"></div></li>
			<li><a id="team2" href="#"><?php echo $tab2;?></a>
		<div id="team_content2" class="tabs_content"></div></li>
			<li><a id="media2" href="#"><?php echo $tab3;?></a>
		<div id="media_content2" class="tabs_content"></div></li>
		</ul>
		</div>
		</div>
		</div>
		<div class="clear"></div>
        </div><!-- #content -->
    </div><!-- #container -->
<?php get_footer(); ?>