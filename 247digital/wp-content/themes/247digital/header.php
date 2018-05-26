<!DOCTYPE html>
 <!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>"/>
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<?php $wl_theme_options=get_option('enigma_options_pro'); ?>
	<?php if($wl_theme_options['upload_image_favicon']!=''){ ?>
	<link rel="shortcut icon" href="<?php  echo $wl_theme_options['upload_image_favicon']; ?>" /> 
	<?php } ?>	
	<?php wp_head(); ?>
</head>
<?php 
	if(get_background_image()) { ?>	
	<body <?php body_class($wl_theme_options['layout_selector']); ?>>
	<?php } else { ?>
	<body <?php body_class($wl_theme_options['layout_selector']); ?> style='background-image: url("<?php echo WL_TEMPLATE_DIR_URI; ?>/images/bg-patterns/<?php echo $wl_theme_options['back_image']; ?>.png");'>
	<?php } ?>
<div id="wrapper"  >
	<!-- Header Section -->
	<div class="header_section" >
		<div class="container" >
			<!-- Logo & Contact Info -->
			<div class="row ">
				<div class="col-md-3 col-sm-12 wl_rtl">					
					<div claSS="logo">		
                        <a href="<?php bloginfo('url');?>">					
					        <img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/img/logo_1.png"  width="150" height="100">
						</a>
						<p><?php bloginfo( 'description' ); ?></p>
					</div>
				</div>		
	           <div class="col-md-4 col-sm-12 wl_rtl">					
					<div class="Header_Banner">						
					
					</div>
				</div>					
				<div class="col-md-5 col-sm-12">					
					<ul class="head-contact-info">
					<?php if($wl_theme_options['contact_email']!='') { ?>
						<li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $wl_theme_options['contact_email']; ?>"><?php echo $wl_theme_options['contact_email']; ?></a></li>
					<?php } if($wl_theme_options['contact_phone_no']!='') { ?>
						<li><i class="fa fa-phone"></i><a href="tel:<?php echo $wl_theme_options['contact_phone_no']; ?>"><?php echo $wl_theme_options['contact_phone_no']; ?></a></li>
						<?php } ?>
					</ul>					
					<?php if($wl_theme_options['header_section_social_media_enbled']=="on") { ?>
					<ul class="social">
					<?php if($wl_theme_options['facebook_link']!='') { ?>
					<li class="facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"><a  href="<?php echo $wl_theme_options['facebook_link']; ?>"><i class="fa fa-facebook"></i></a></li>
					<?php } if($wl_theme_options['twitter_link']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="bottom" title="Twiiter"><a href="<?php echo $wl_theme_options['twitter_link']; ?>"><i class="fa fa-twitter"></i></a></li>
					<?php } if($wl_theme_options['dribble_link']!='') { ?>
					<li class="dribbble" data-toggle="tooltip" data-placement="bottom" title="Dribble"><a href="<?php echo $wl_theme_options['dribble_link']; ?>"><i class="fa fa-dribbble"></i></a></li>
					<?php } if($wl_theme_options['linkedin_link']!='') { ?>
					<li class="linkedin" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><a href="<?php echo $wl_theme_options['linkedin_link']; ?>"><i class="fa fa-linkedin"></i></a></li>
					<?php } if($wl_theme_options['youtube_link']!='') { ?>
					<li class="youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"><a href="<?php echo $wl_theme_options['youtube_link']; ?>"><i class="fa fa-youtube"></i></a></li>
	                <?php } if($wl_theme_options['google_plus']!='') { ?>
					<li class="youtube" data-toggle="tooltip" data-placement="bottom" title="Googleplus"><a href="<?php echo $wl_theme_options['google_plus']; ?>"><i class="fa fa-google"></i></a></li>
	                <?php } if($wl_theme_options['flicker_link']!='') { ?>
					<li class="flicker" data-toggle="tooltip" data-placement="bottom" title="Flicker"><a href="<?php echo $wl_theme_options['flicker_link']; ?>"><i class="fa fa-flickr"></i></a></li>
	                <?php } ?>
					</ul>
					<?php } ?>
				</div>				
			</div>
			<!-- /Logo & Contact Info -->
		</div>	
	</div>	
	<!-- /Header Section -->
	<!-- Navigation  menus -->
	<div class="navigation_menu "  data-spy="affix" data-offset-top="95" id="<?php if($wl_theme_options['header_position']=='fixed') { echo "enigma_nav_top"; } ?>">
		<span id="header_shadow"></span>
		<div class="container navbar-container" >
			<nav class="navbar navbar-default " role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					  <span class="sr-only"><?php _e('Toggle navigation','weblizar'); ?></span>					 
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
				</div>
				<div id="menu" class="collapse navbar-collapse ">	
				<?php wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_class' => 'nav navbar-nav',
						'fallback_cb' => 'weblizar_fallback_page_menu',
						'walker' => new weblizar_nav_walker(),
						)
						);	?>				
				</div>		
			</nav>
		</div>
	</div>
	<!-- /Navigation  menus -->