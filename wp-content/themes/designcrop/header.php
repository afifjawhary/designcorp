<!DOCTYPE html>
<html xmlns="http<?php echo (is_ssl())? 's' : ''; ?>://www.w3.org/1999/xhtml"<?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link rel="shortcut icon" href="<?php echo site_url();?>/wp-content/uploads/2015/09/favicon.ico" type="image/x-icon" />
		<title><?php wp_title(' | ', true, 'right'); ?></title>
		<link href='https://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		
		<?php wp_head(); ?>
		<script type="text/javascript">
			jQuery(function(){

				jQuery("#free_initial_consultation").on("click",function(e){
					e.preventDefault();
					jQuery(".tabs_content").hide();
					jQuery(".tabs_container li a").removeClass("current_tab");
					jQuery(this).addClass("current_tab");
					jQuery("#free_initial_consultation_content").show();
				});jQuery("#design_brief").on("click",function(e){
					e.preventDefault();
					jQuery(".tabs_content").hide();
					jQuery(".tabs_container li a").removeClass("current_tab");
					jQuery(this).addClass("current_tab");
					jQuery("#design_brief_content").show();
				});jQuery("#schematic_design").on("click",function(e){
					e.preventDefault();
					jQuery(".tabs_content").hide();
					jQuery(".tabs_container li a").removeClass("current_tab");
					jQuery(this).addClass("current_tab");
					jQuery("#schematic_design_content").show();
				});jQuery("#development_application").on("click",function(e){
					e.preventDefault();
					jQuery(".tabs_content").hide();
					jQuery(".tabs_container li a").removeClass("current_tab");
					jQuery(this).addClass("current_tab");
					jQuery("#development_application_content").show();
				});jQuery("#tender_construction_documentations").on("click",function(e){
					e.preventDefault();
					jQuery(".tabs_content").hide();
					jQuery(".tabs_container li a").removeClass("current_tab");
					jQuery(this).addClass("current_tab");
					jQuery("#tender_construction_documentations_content").show();
				});

				jQuery("#sabbagh").on("click",function(e){
					e.preventDefault();
					jQuery(".employee_details").hide();
					jQuery(".sabbagh").css("display","inline-block");
					jQuery("#team_content ul li a .selected_emp").removeClass("is_selected");
					jQuery(this).find(".selected_emp").addClass("is_selected");
				});jQuery("#mason").on("click",function(e){
					e.preventDefault();
					jQuery(".employee_details").hide();
					jQuery(".mason").css("display","inline-block");
					jQuery("#team_content ul li a .selected_emp").removeClass("is_selected");
					jQuery(this).find(".selected_emp").addClass("is_selected");
				});jQuery("#cindy").on("click",function(e){
					e.preventDefault();
					jQuery(".employee_details").hide();
					jQuery(".cindy").css("display","inline-block");
					jQuery("#team_content ul li a .selected_emp").removeClass("is_selected");
					jQuery(this).find(".selected_emp").addClass("is_selected");
				});jQuery("#gomez").on("click",function(e){
					e.preventDefault();
					jQuery(".employee_details").hide();
					jQuery(".gomez").css("display","inline-block");
					jQuery("#team_content ul li a .selected_emp").removeClass("is_selected");
					jQuery(this).find(".selected_emp").addClass("is_selected");
				});jQuery("#pisarkie").on("click",function(e){
					e.preventDefault();
					jQuery(".employee_details").hide();
					jQuery(".pisarkie").css("display","inline-block");
					jQuery("#team_content ul li a .selected_emp").removeClass("is_selected");
					jQuery(this).find(".selected_emp").addClass("is_selected");
				});jQuery("#ingleton").on("click",function(e){
					e.preventDefault();
					jQuery(".employee_details").hide();
					jQuery(".ingleton").css("display","inline-block");
					jQuery("#team_content ul li a .selected_emp").removeClass("is_selected");
					jQuery(this).find(".selected_emp").addClass("is_selected");
				});jQuery("#murphy").on("click",function(e){
					e.preventDefault();
					jQuery(".employee_details").hide();
					jQuery(".murphy").css("display","inline-block");
					jQuery("#team_content ul li a .selected_emp").removeClass("is_selected");
					jQuery(this).find(".selected_emp").addClass("is_selected");
				});jQuery("#saad").on("click",function(e){
					e.preventDefault();
					jQuery(".employee_details").hide();
					jQuery(".saad").css("display","inline-block");
					jQuery("#team_content ul li a .selected_emp").removeClass("is_selected");
					jQuery(this).find(".selected_emp").addClass("is_selected");
				});

				jQuery("#team_content ul li a").hover(function(){
					if( jQuery(this).children("img:nth-child(2)").css("display") == "none" )
						jQuery(this).children("img:nth-child(2)").show();
					else
						jQuery(this).children("img:nth-child(2)").hide();
				});

				jQuery("#commercial_design").on("click",function(e){
					e.preventDefault();
					jQuery(".tabs_content").hide();
					jQuery(".tabs_container li a").removeClass("current_tab");
					jQuery(this).addClass("current_tab");
					jQuery("#commercial_design_content").show();
				});jQuery("#retail_design").on("click",function(e){
					e.preventDefault();
					jQuery(".tabs_content").hide();
					jQuery(".tabs_container li a").removeClass("current_tab");
					jQuery(this).addClass("current_tab");
					jQuery("#retail_design_content").show();
				});jQuery("#project_management").on("click",function(e){
					e.preventDefault();
					jQuery(".tabs_content").hide();
					jQuery(".tabs_container li a").removeClass("current_tab");
					jQuery(this).addClass("current_tab");
					jQuery("#project_management_content").show();
				});jQuery("#sustainable_architecture").on("click",function(e){
					e.preventDefault();
					jQuery(".tabs_content").hide();
					jQuery(".tabs_container li a").removeClass("current_tab");
					jQuery(this).addClass("current_tab");
					jQuery("#sustainable_architecture_content").show();
				});jQuery("#residential_design").on("click",function(e){
					e.preventDefault();
					jQuery(".tabs_content").hide();
					jQuery(".tabs_container li a").removeClass("current_tab");
					jQuery(this).addClass("current_tab");
					jQuery("#residential_design_content").show();
				});

				jQuery("#company").on("click",function(e){
					e.preventDefault();
					jQuery(".tabs_content").hide();
					jQuery(".tabs_container li a").removeClass("current_tab");
					jQuery(this).addClass("current_tab");
					jQuery("#company_content").show();
				});jQuery("#team").on("click",function(e){
					e.preventDefault();
					jQuery(".tabs_content").hide();
					jQuery(".tabs_container li a").removeClass("current_tab");
					jQuery(this).addClass("current_tab");
					jQuery("#team_content").show();
				});jQuery("#media").on("click",function(e){
					e.preventDefault();
					jQuery(".tabs_content").hide();
					jQuery(".tabs_container li a").removeClass("current_tab");
					jQuery(this).addClass("current_tab");
					jQuery("#media_content").show();
				});jQuery("#company2").on("click",function(e){
					e.preventDefault();
					jQuery(".tabs_content").hide();
					jQuery(".mobile_architect_menu li a").removeClass("current_tab");
					jQuery(this).addClass("current_tab");
					jQuery("#company_content2").show();
				});jQuery("#team2").on("click",function(e){
					e.preventDefault();
					jQuery(".tabs_content").hide();
					jQuery(".mobile_architect_menu li a").removeClass("current_tab");
					jQuery(this).addClass("current_tab");
					jQuery("#team_content2").show();
				});jQuery("#media2").on("click",function(e){
					e.preventDefault();
					jQuery(".tabs_content").hide();
					jQuery(".mobile_architect_menu li a").removeClass("current_tab");
					jQuery(this).addClass("current_tab");
					jQuery("#media_content2").show();
				});

				jQuery("#houses_tab").on("click",function(){
					jQuery(".project_tab_content").hide();
					jQuery(".projects_tabs_container li").removeClass("current_project_tab");
					jQuery(this).addClass("current_project_tab");
					jQuery("#Houses").show();
				});jQuery("#residential_tab").on("click",function(){
					jQuery(".project_tab_content").hide();
					jQuery(".projects_tabs_container li").removeClass("current_project_tab");
					jQuery(this).addClass("current_project_tab");
					jQuery("#Residential").show();
				});jQuery("#public_tab").on("click",function(){
					jQuery(".project_tab_content").hide();
					jQuery(".projects_tabs_container li").removeClass("current_project_tab");
					jQuery(this).addClass("current_project_tab");
					jQuery("#Public__Commercials").show();
				});

				jQuery('.mobile-nav-holder .mobile-selector').on("click",function(){
					jQuery('.mobile-nav-holder ul').slideToggle(150);
				});

				jQuery("#free_initial_consultation_content2").html(jQuery("#free_initial_consultation_content").html());
				jQuery("#design_brief_content2").html(jQuery("#design_brief_content").html());
				jQuery("#schematic_design_content2").html(jQuery("#schematic_design_content").html());
				jQuery("#development_application_content2").html(jQuery("#development_application_content").html());
				jQuery("#tender_construction_documentations_content2").html(jQuery("#tender_construction_documentations_content").html());

				jQuery("#commercial_design_content2").html(jQuery("#commercial_design_content").html());
				jQuery("#retail_design_content2").html(jQuery("#retail_design_content").html());
				jQuery("#project_management_content2").html(jQuery("#project_management_content").html());
				jQuery("#sustainable_architecture_content2").html(jQuery("#sustainable_architecture_content").html());
				jQuery("#residential_design_content2").html(jQuery("#residential_design_content").html());

				jQuery("#company_content2").html(jQuery("#company_content").html());
				jQuery("#team_content2").html(jQuery("#team_content").html());
				jQuery("#media_content2").html(jQuery("#media_content").html());

				
				jQuery(".mobile_emp_cont").each(function(){
					var arr = jQuery(this).attr("id").split('_');
					var emp_name = arr[1] == "pisarkiewicz" ? "pisarkie" : arr[1];

					jQuery(this).html(jQuery(".employee_details." + emp_name).html());
				});

				if( jQuery(window).width() <= 800 ){
					jQuery(".projects_tabs_container ul li .project_mob").each(function(){
						var arr = jQuery(this).attr("id").split('_');
						var project_name = arr.length > 2 ? arr[1] + "__" + arr[3] : arr[1] ;

						jQuery(this).html(jQuery("#" + project_name).html());
						jQuery(this).parent("li").removeClass("current_project_tab");
					});

					jQuery(".projects_tabs_container ul li span").on("click",function(e){
						e.preventDefault();
						jQuery(".projects_tabs_container ul li .project_mob").hide();
						jQuery(this).parent("li").find(".project_mob").slideToggle();
					});
				}

				jQuery(".mobile_architect_menu ul li ul li a").on("click",function(e){
					e.preventDefault();
					jQuery(".mobile_architect_menu ul li ul li .mobile_emp_cont").hide();
					jQuery(this).parent("li").find(".mobile_emp_cont").slideToggle('slow');
				});

				jQuery("#free_initial_consultation2").on("click",function(e){
					if( !jQuery(this).hasClass("clicked")){
						e.preventDefault();
						jQuery(".tabs_content").slideUp();
						jQuery(".mobile_architect_menu li a").removeClass("current_tab");
						jQuery(this).addClass("current_tab");
						jQuery("#free_initial_consultation_content2").slideDown();
						jQuery(".mobile_architect_menu li a").removeClass("clicked");
						jQuery(this).addClass("clicked");
					}
				});jQuery("#design_brief2").on("click",function(e){
					if( !jQuery(this).hasClass("clicked")){
						e.preventDefault();
						jQuery(".tabs_content").slideUp();
						jQuery(".mobile_architect_menu li a").removeClass("current_tab");
						jQuery(this).addClass("current_tab");
						jQuery("#design_brief_content2").slideDown();
						jQuery(".mobile_architect_menu li a").removeClass("clicked");
						jQuery(this).addClass("clicked");
					}
				});jQuery("#schematic_design2").on("click",function(e){
					if( !jQuery(this).hasClass("clicked")){
						e.preventDefault();
						jQuery(".tabs_content").slideUp();
						jQuery(".mobile_architect_menu li a").removeClass("current_tab");
						jQuery(this).addClass("current_tab");
						jQuery("#schematic_design_content2").slideDown();
						jQuery(".mobile_architect_menu li a").removeClass("clicked");
						jQuery(this).addClass("clicked");
					}
				});jQuery("#development_application2").on("click",function(e){
					if( !jQuery(this).hasClass("clicked")){
						e.preventDefault();
						jQuery(".tabs_content").slideUp();
						jQuery(".mobile_architect_menu li a").removeClass("current_tab");
						jQuery(this).addClass("current_tab");
						jQuery("#development_application_content2").slideDown();
						jQuery(".mobile_architect_menu li a").removeClass("clicked");
						jQuery(this).addClass("clicked");
					}
				});jQuery("#tender_construction_documentations2").on("click",function(e){
					if( !jQuery(this).hasClass("clicked")){
						e.preventDefault();
						jQuery(".tabs_content").slideUp();
						jQuery(".mobile_architect_menu li a").removeClass("current_tab");
						jQuery(this).addClass("current_tab");
						jQuery("#tender_construction_documentations_content2").slideDown();
						jQuery(".mobile_architect_menu li a").removeClass("clicked");
						jQuery(this).addClass("clicked");
					}
				});

				jQuery("#commercial_design2").on("click",function(e){
					if( !jQuery(this).hasClass("clicked")){
						e.preventDefault();
						jQuery(".tabs_content").slideUp();
						jQuery(".mobile_architect_menu li a").removeClass("current_tab");
						jQuery(this).addClass("current_tab");
						jQuery("#commercial_design_content2").slideDown();
						jQuery(".mobile_architect_menu li a").removeClass("clicked");
						jQuery(this).addClass("clicked");
					}
				});jQuery("#retail_design2").on("click",function(e){
					if( !jQuery(this).hasClass("clicked")){
						e.preventDefault();
						jQuery(".tabs_content").slideUp();
						jQuery(".mobile_architect_menu li a").removeClass("current_tab");
						jQuery(this).addClass("current_tab");
						jQuery("#retail_design_content2").slideDown();
						jQuery(".mobile_architect_menu li a").removeClass("clicked");
						jQuery(this).addClass("clicked");
					}
				});jQuery("#project_management2").on("click",function(e){
					if( !jQuery(this).hasClass("clicked")){
						e.preventDefault();
						jQuery(".tabs_content").slideUp();
						jQuery(".mobile_architect_menu li a").removeClass("current_tab");
						jQuery(this).addClass("current_tab");
						jQuery("#project_management_content2").slideDown();
						jQuery(".mobile_architect_menu li a").removeClass("clicked");
						jQuery(this).addClass("clicked");
					}
				});jQuery("#sustainable_architecture2").on("click",function(e){
					if( !jQuery(this).hasClass("clicked")){
						e.preventDefault();
						jQuery(".tabs_content").slideUp();
						jQuery(".mobile_architect_menu li a").removeClass("current_tab");
						jQuery(this).addClass("current_tab");
						jQuery("#sustainable_architecture_content2").slideDown();
						jQuery(".mobile_architect_menu li a").removeClass("clicked");
						jQuery(this).addClass("clicked");
					}
				});jQuery("#residential_design2").on("click",function(e){
					if( !jQuery(this).hasClass("clicked")){
						e.preventDefault();
						jQuery(".tabs_content").slideUp();
						jQuery(".mobile_architect_menu li a").removeClass("current_tab");
						jQuery(this).addClass("current_tab");
						jQuery("#residential_design_content2").slideDown();
						jQuery(".mobile_architect_menu li a").removeClass("clicked");
						jQuery(this).addClass("clicked");
					}
				});

				jQuery(".home_latest_news").on("click",function(){
					jQuery(".blog_container").slideToggle();

					if( jQuery(".outer-home-container .inner-text-container").css("background-color") == "rgba(255, 255, 255, 0.8)") {
						jQuery(".outer-home-container .inner-text-container").css("background-color","transparent");
						jQuery(".outer-home-container .inner-text-container").height(70);
					}
					else{
						jQuery(".outer-home-container .inner-text-container").css("background-color","rgba(255, 255, 255, 0.8)");
						jQuery(".outer-home-container .inner-text-container").height(jQuery(".rev_slider").height());
					}
				});

			});
		</script>
	</head>
	<body <?php body_class(); ?>>
		<div id="wrapper" class="hfeed">
		<div class="top-header-container">
			<div id="header-social">
				<ul>
					<li>
						<a href="mail:info@designcorp.com" target="_blank" title="mail" ><img src="<?php echo site_url();?>/wp-content/uploads/2015/09/mail.png" /></a>
					</li>
					<li>
						<a href="http://www.facebook.com/designcorp" target="_blank" title="Facebook"><img src="<?php echo site_url();?>/wp-content/uploads/2015/09/facebook.png" /></a>
					</li>
					<li>
						<a href="http://www.instagram.com/designcorp" target="_blank" title="Instagram"><img src="<?php echo site_url();?>/wp-content/uploads/2015/09/instagram.png" /></a>
					</li>
				</ul>
			</div>
		</div>
		<header id="header" role="banner">
			<div class="clear"></div>
			<div class="logo" >
				<a href="<?php echo site_url();?>">
					<img src="<?php echo site_url();?>/wp-content/uploads/2015/09/logo.png" alt="logo" />
				</a>
			</div>
			<nav id="menu" role="navigation">
				<div class="desktop-menu"><?php wp_nav_menu(array('theme_location' => 'main-menu')); ?></div>
				<div class="mobile-nav-holder main-menu">
					<div class="mobile-selector"><span>Go to...</span><div class="selector-down">+</div></div>
					<?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
				</div>
			</nav>
			<div class="clear" ></div>
		</header>
		<div id="container">