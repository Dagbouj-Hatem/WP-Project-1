<?php
/**
 * Weblizar Admin Menu
 */
add_action('admin_menu', 'weblizar_admin_menu_pannel');  
function weblizar_admin_menu_pannel() {
	$page = add_theme_page( 'theme', 'Theme Options', 'edit_theme_options', 'weblizar', 'weblizar_option_panal_function' ); 
 	add_action('admin_print_styles-'.$page, 'weblizar_admin_enqueue_script');
 } 
 /**
 * Weblizar Admin Menu CSS
 */
function weblizar_admin_enqueue_script() {		
	wp_enqueue_script('weblizar-tab-js', get_template_directory_uri().'/theme-options/js/option-js.js',array('media-upload', 'jquery-ui-sortable'));	
	wp_enqueue_style('thickbox');	
	wp_enqueue_style('weblizar-option-style', get_template_directory_uri().'/theme-options/css/option-style.css');
	wp_enqueue_style('weblizar-boot', get_template_directory_uri(). '/theme-options/css/bootstrap.min.css');
	wp_enqueue_style('weblizar-bootstrap-responsive', get_template_directory_uri().'/theme-options/css/bootstrap-responsive.css');
	wp_enqueue_style('optionpanal-dragdrop',get_template_directory_uri().'/theme-options/css/weblizar-dragdrop.css');
	/****custom color ****/
	wp_enqueue_style( 'farbtastic' );
	wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'weblizar-custom-color', get_template_directory_uri().'/theme-options/js/weblizar-custom-color-picker.js', array( 'wp-color-picker','farbtastic' ), false, true );
	
}
/**
 * Weblizar Theme Option Form
 */
function weblizar_option_panal_function() { ?>
	<div class="wrap" id="weblizar_wrap">	
		<div id="content_wrap">
			<div class="weblizar-header" >
				<h2><span><?php _e('Enigma ','weblizar'); ?></span></h2>			
				<div class="weblizar-submenu-links" id="weblizar-submenu-links">
					<ul><li class=""><div class="dashicons dashicons-admin-home"></div> <a href="http://www.weblizar.com/" target="_blank" title="Theme Homepage">Theme Homepage</a></li>
						<li class=""> <div class="dashicons dashicons-format-aside"> </div> <a href="http://weblizar.com/documentation/themes/enigma-premium-documentation/" target="_blank" title="Documentation">Documentation</a></li>
						<li class=""> <div class="dashicons dashicons-format-chat" > </div> <a href="http://weblizar.com/forum/" target="_blank" title="Support Forum">Support Forum</a></li>
						<li class=""> <div class="dashicons dashicons-welcome-write-blog"></div> <a href="<?php echo get_template_directory_uri() . '/readme.txt'?>" target="_blank" title="Theme Changelog">View Changelog</a></li>      
					</ul>
				</div>			
			</div>		
			<div id="content">
				<div id="options_tabs" class="ui-tabs ">
					<ul class="options_tabs ui-tabs-nav" role="tablist" id="nav">					
						<li class="active" >
							<a href="#" id="general"><span class="icon home-page"></span><?php _e('Home Option','weblizar');?></a>
							<ul>								
								<li><a class="ui-tabs-anchor" href="#" id="general"><?php _e('General Option','weblizar');?> </a></li>
								<li><a href="#"  id="home-slider"><?php _e('Slider Option','weblizar');?></a></li>
								<li><a href="#"  id="home-service"><?php _e('Service Option','weblizar');?></a></li>
								<li><a href="#"  id="home-portfolio"><?php _e('Portfolio Option','weblizar');?></a></li>
								<li><a href="#"  id="home-blog"><?php _e('Blog Option','weblizar');?></a></li>
								<li><a href="#"  id="home-testi"><?php _e('Testimonial Option','weblizar');?></a></li>
								<li><a href="#"  id="home-client"><?php _e('Client Option','weblizar');?></a></li>
								<li><a href="#"  id="home-call-out"><?php _e('Call Out Area','weblizar');?></a></li>							
							</ul>
						</li>
						<li><a href="#" id="skin-layout"><span class="icon skin-layout"></span><?php _e('Skin Layout','weblizar');?></a></li>
						<li><a href="#" id="contact-details"><span class="icon contact-details"></span><?php _e('Contact Details','weblizar');?></a></li>
						<li><a href="#" id="social"><span class="icon social"></span><?php _e('Social Media Links','weblizar');?></a></li>
						<li><a href="#" id="footer"><span class="icon footer"></span><?php _e('Footer Option','weblizar');?></a></li>					
						<li><a href="#"  id="cptname"><span class="icon cpt"></span><?php _e('Custom URL ','weblizar');?></a></li>
						<li><a href="#"  id="layoutmanger"><span class="icon layoutmanger"></span><?php _e('HomePage Customizr','weblizar');?></a></li>
						<li><a href="#"  id="csmode"><span class="icon coming_soon"></span><?php _e('Maintenance Mode ','weblizar');?></a></li>
					</ul>
					<!--------Option Data saving ------->
					<?php require_once('option-data.php'); ?>	
					<!--------Option Settings form ------->
					<?php require_once('option-settings.php'); ?>	
				</div>		
			</div>
			<div class="weblizar-header" style="margin-top:0px;">			
				<div class="weblizar-submenu-links" style="margin-top:10px;">
				<form method="POST">
					<input type="submit" onclick="return confirm( 'Click OK to reset theme data. Theme settings will be lost!' );" value="Restore All Defaults" name="restore_all_defaults" id="restore_all_defaults" class="button">
				<form>
				</div><!-- weblizar-submenu-links -->
			</div>
			<div class="clear"></div>
		</div>
	</div>
<?php
	
}
	// Restore all defaults
	if(isset($_POST['restore_all_defaults'])) {
		$weblizar_theme_options = weblizar_default_settings();	
		update_option('enigma_options_pro', $weblizar_theme_options);
	}
	
	//maintenance enable function 'template redirect' 
        function maintenance_template_redirect()
        {
			$wl_theme_options = get_option('enigma_options_pro');
			if($wl_theme_options['coming_soon']=='on')
			{			
				if(!is_feed())
				{
					//if user not login page is redirect on coming soon template page
					if ( !is_user_logged_in()  )
					{
						
						$file = WL_TEMPLATE_DIR . '/theme-options/maintenance.php';
						include($file);
						exit();
					}
				}
				//if user is log-in then we check role.
				if (is_user_logged_in() )
				{
					//get logined in user role
					global $current_user;
					get_currentuserinfo();
					$LoggedInUserID = $current_user->ID;
					$UserData = get_userdata( $LoggedInUserID );
					//if user role not 'administrator' redirect him to message page
					if($UserData->roles[0] != "administrator")
					{
						if(!is_feed())
						{
							$file = WEBLIZAR_TEMPLATE_DIR . '/theme-options/maintenance.php';
							exit();
						}
					}
				}
			}
        }

        //add action to call function maintenance_template_redirect 
        add_action( 'template_redirect', 'maintenance_template_redirect' );
?>
