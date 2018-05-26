<?php
function weblizar_scripts() {
	$wl_theme_options = get_option('enigma_options_pro');

	$class = $wl_theme_options['style_sheet'];		
	wp_enqueue_style('bootstrap', WL_TEMPLATE_DIR_URI. '/css/bootstrap.css');	
	if($wl_theme_options['custom_color_enbled'] =='on') { 
	require_once(WL_TEMPLATE_DIR_CORE.'/scripts/weblizar-custom-color-css.php');
	}
	else {
	
	wp_enqueue_style('color-css', WL_TEMPLATE_DIR_URI . '/css/'.$class);
	}

	wp_enqueue_style('enigma-theme', WL_TEMPLATE_DIR_URI . '/css/enigma-theme.css');
	wp_enqueue_style('layout-responsive', WL_TEMPLATE_DIR_URI . '/css/switcher/layout-responsive.css');
	wp_enqueue_style('media-responsive', WL_TEMPLATE_DIR_URI . '/css/media-responsive.css');
	wp_enqueue_style('animations', WL_TEMPLATE_DIR_URI . '/css/animations.css');
	wp_enqueue_style('theme-animtae', WL_TEMPLATE_DIR_URI . '/css/theme-animtae.css');
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	

	wp_enqueue_style('OpenSansRegular','//fonts.googleapis.com/css?family=Open+Sans');
	wp_enqueue_style('OpenSansBold','//fonts.googleapis.com/css?family=Open+Sans:700');
	wp_enqueue_style('OpenSansSemiBold','//fonts.googleapis.com/css?family=Open+Sans:600');
	wp_enqueue_style('RobotoRegular','//fonts.googleapis.com/css?family=Roboto');
	wp_enqueue_style('RobotoBold','//fonts.googleapis.com/css?family=Roboto:700');
	wp_enqueue_style('RalewaySemiBold','//fonts.googleapis.com/css?family=Raleway:600');
	wp_enqueue_style('Courgette','//fonts.googleapis.com/css?family=Courgette');
	
	// Js
	wp_enqueue_script('menu', WL_TEMPLATE_DIR_URI .'/js/menu.js', array('jquery'));
	wp_enqueue_script('bootstrap-min-js', WL_TEMPLATE_DIR_URI .'/js/bootstrap.min.js');
	wp_enqueue_script('enigma-theme-script', WL_TEMPLATE_DIR_URI .'/js/enigma_theme_script.js');
	/*Carofredsul Slides*/
	wp_enqueue_script('jquery.carouFredSel', WL_TEMPLATE_DIR_URI .'/js/carouFredSel-6.2.1/jquery.carouFredSel-6.2.1.js');	
	//wp_enqueue_script('carouFredSel-element', WL_TEMPLATE_DIR_URI .'/js/carouFredSel-6.2.1/caroufredsel-element.js');
	
	$wl_theme_options=get_option('enigma_options_pro');
	
	//$wl_theme_options['light_box_style'] = 'photobox_a';		
	if( $wl_theme_options['light_box_style'] == 'photobox_a')
	{
		/*PhotoBox JS and css */
		wp_enqueue_style('photobox', WL_TEMPLATE_DIR_URI . '/photobox/photobox.css');
		wp_enqueue_script('photobox-js', WL_TEMPLATE_DIR_URI .'/photobox/jquery.photobox.js');
		wp_enqueue_script('photobox-custom', WL_TEMPLATE_DIR_URI .'/photobox/photobox-custom.js', '', '', true);
		
	} else {
		/*PhotoBox JS and css */
		wp_enqueue_style('swipebox-css', WL_TEMPLATE_DIR_URI . '/swipebox/swipebox.css');
		wp_enqueue_script('swipebox-js', WL_TEMPLATE_DIR_URI .'/swipebox/jquery.swipebox.js');
		wp_enqueue_script('swipebox-custom', WL_TEMPLATE_DIR_URI .'/swipebox/swipebox-custom.js');
		
	}	
	if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 	
}
add_action('wp_enqueue_scripts', 'weblizar_scripts');

/********* footer js *********/
add_action('wp_footer', 'weblizar_footer_js');
function weblizar_footer_js() {
	wp_enqueue_script('envira', WL_TEMPLATE_DIR_URI .'/js/envira.js');
	wp_enqueue_script('enigma-footer-script', WL_TEMPLATE_DIR_URI .'/js/enigma-footer-script.js');
	wp_enqueue_script('waypoints.min', WL_TEMPLATE_DIR_URI .'/js/waypoints.min.js');
	wp_enqueue_script('scroll', WL_TEMPLATE_DIR_URI .'/js/scroll.js');
}
?>