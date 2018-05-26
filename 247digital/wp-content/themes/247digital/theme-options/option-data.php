<?php $wl_theme_options = get_option('enigma_options_pro');
	//Maintenance Mode Ready
	if(isset($_POST['weblizar_settings_save_csmode']))
	{	
		if($_POST['weblizar_settings_save_csmode'] == 1) 
		{
				foreach($_POST as  $key => $value)
				{
					$wl_theme_options[$key]=sanitize_text_field($_POST[$key]);	
				}				
				
				if($_POST['coming_soon']){
				echo $wl_theme_options['coming_soon']=sanitize_text_field($_POST['coming_soon']); } 
				else
				{ echo $wl_theme_options['coming_soon']="off"; } 
					
				update_option('enigma_options_pro', stripslashes_deep($wl_theme_options));
		}	
		if($_POST['weblizar_settings_save_csmode'] == 2) 
		{
			reset_coming_soon_setting();
		}
	}
	
	
	/*
	* LOGO Fevicon settings save
	*/
	if(isset($_POST['weblizar_settings_save_general']))
	{	
		if($_POST['weblizar_settings_save_general'] == 1) 
		{
				foreach($_POST as  $key => $value)
				{
					$wl_theme_options[$key]=sanitize_text_field($_POST[$key]);	
				}				
				
				if($_POST['text_title']){
				echo $wl_theme_options['text_title']=sanitize_text_field($_POST['text_title']); } 
				else
				{ echo $wl_theme_options['text_title']="off"; }
				
				if($_POST['front_page']){
				echo $wl_theme_options['front_page']=sanitize_text_field($_POST['front_page']); } 
				else
				{ echo $wl_theme_options['front_page']="off"; }	
					
				update_option('enigma_options_pro', stripslashes_deep($wl_theme_options));
		}	
		if($_POST['weblizar_settings_save_general'] == 2) 
		{
			reset_general_setting();
		}
	}
	/*
	* slider settings
	*/
	if(isset($_POST['weblizar_settings_save_home-slider']))
	{	
		if($_POST['weblizar_settings_save_home-slider'] == 1) 
		{
				foreach($_POST as  $key => $value)
				{
					$wl_theme_options[$key]=sanitize_text_field($_POST[$key]);	
				}				
				update_option('enigma_options_pro', stripslashes_deep($wl_theme_options));
		}	
		if($_POST['weblizar_settings_save_home-slider'] == 2) 
		{
			reset_slider_setting();
		}
	}
	/*
	* Home Service setting 
	*/
	if(isset($_POST['weblizar_settings_save_home-service']))
	{	
		if($_POST['weblizar_settings_save_home-service'] == 1) 
		{	
			foreach($_POST as $key => $value)
			{
				$wl_theme_options[$key] = $key=="extra_home_text" ? $_POST[$key] : sanitize_text_field($_POST[$key]);
			}
			update_option('enigma_options_pro', stripslashes_deep($wl_theme_options));
			
		}	
		if($_POST['weblizar_settings_save_home-service'] == 2) 
		{	
			reset_service_setting();
		}
	}
	
	/*
	* Home portfolio setting 
	*/
	if(isset($_POST['weblizar_settings_save_home-portfolio']))
	{	
		if($_POST['weblizar_settings_save_home-portfolio'] == 1) 
		{	
			foreach($_POST as  $key => $value)
			{
				$wl_theme_options[$key]=sanitize_text_field($_POST[$key]);	
			}
			update_option('enigma_options_pro', stripslashes_deep($wl_theme_options));
			
		}	
		if($_POST['weblizar_settings_save_home-portfolio'] == 2) 
		{	
			reset_portfolio_setting();
		}
	}
	
	/*
	* Home blog setting 
	*/
	if(isset($_POST['weblizar_settings_save_home-blog']))
	{	
		if($_POST['weblizar_settings_save_home-blog'] == 1) 
		{	
			foreach($_POST as  $key => $value)
			{
				$wl_theme_options[$key]=sanitize_text_field($_POST[$key]);	
			}
			update_option('enigma_options_pro', stripslashes_deep($wl_theme_options));
			
		}	
		if($_POST['weblizar_settings_save_home-blog'] == 2) 
		{	
			reset_blog_setting();
		}
	}
	
	/*
	* Home Testimonial setting 
	*/
	if(isset($_POST['weblizar_settings_save_home-testi']))
	{	
		if($_POST['weblizar_settings_save_home-testi'] == 1) 
		{	
			foreach($_POST as  $key => $value)
			{
				$wl_theme_options[$key]=sanitize_text_field($_POST[$key]);	
			}
			update_option('enigma_options_pro', stripslashes_deep($wl_theme_options));
			
		}	
		if($_POST['weblizar_settings_save_home-testi'] == 2) 
		{	
			reset_testi_setting();
		}
	}
	
	/*
	* Home Client setting 
	*/
	if(isset($_POST['weblizar_settings_save_home-client']))
	{	
		if($_POST['weblizar_settings_save_home-client'] == 1) 
		{	
			foreach($_POST as  $key => $value)
			{
				$wl_theme_options[$key]=sanitize_text_field($_POST[$key]);	
			}
			update_option('enigma_options_pro', stripslashes_deep($wl_theme_options));
			
		}	
		if($_POST['weblizar_settings_save_home-client'] == 2) 
		{	
			reset_client_setting();
		}
	}
	
	
	/*
	* Home Theme call out area setting 
	*/
	if(isset($_POST['weblizar_settings_save_home-call-out']))
	{	
		if($_POST['weblizar_settings_save_home-call-out'] == 1) 
		{	
			foreach($_POST as  $key => $value)
			{
				$wl_theme_options[$key]=sanitize_text_field($_POST[$key]);	
			}
			if($_POST['call_out_button_target']){
			
			$wl_theme_options['call_out_button_target']=sanitize_text_field($_POST['call_out_button_target']); } 
			else
			{  $wl_theme_options['call_out_button_target']="off"; }
			
			update_option('enigma_options_pro', stripslashes_deep($wl_theme_options));
			
		}	
		if($_POST['weblizar_settings_save_home-call-out'] == 2) 
		{	
			reset_callout_setting();
		}
	}
	
	/*
	*  Theme  skin setting 
	*/
	if(isset($_POST['weblizar_settings_save_skin-layout']))
	{	
		if($_POST['weblizar_settings_save_skin-layout'] == 1) 
		{	
			foreach($_POST as  $key => $value)
			{
				$wl_theme_options[$key]=sanitize_text_field($_POST[$key]);	
			}			
			
			if(isset($_POST['custom_color_enbled'])){
			echo $wl_theme_options['custom_color_enbled']=sanitize_text_field($_POST['custom_color_enbled']); } 
			else
			{ echo $wl_theme_options['custom_color_enbled']="off"; }
			
			if(isset($_POST['layout_type'])){
			echo $wl_theme_options['layout_type']=sanitize_text_field($_POST['layout_type']); } 
			else
			{ echo $wl_theme_options['layout_type']="off"; }
			
			
			update_option('enigma_options_pro', stripslashes_deep($wl_theme_options));
			
		}	
		if($_POST['weblizar_settings_save_skin-layout'] == 2) 
		{	
			reset_skin_layout_setting();
		}
	}
	
	/*
	* Home Theme contact details setting 
	*/
	if(isset($_POST['weblizar_settings_save_contact-details']))
	{	
		if($_POST['weblizar_settings_save_contact-details'] == 1) 
		{	
			foreach($_POST as  $key => $value)
			{
				$wl_theme_options[$key]=sanitize_text_field($_POST[$key]);	
			}
			//google map on conatact page
			if(isset($_POST['google_map_on_contact']))
			{  $wl_theme_options['google_map_on_contact'] = $_POST['google_map_on_contact'];
			} else {  $wl_theme_options['google_map_on_contact'] = "off";	} 
			
			update_option('enigma_options_pro', stripslashes_deep($wl_theme_options));
			
		}	
		if($_POST['weblizar_settings_save_contact-details'] == 2) 
		{	
			reset_contact_details_setting();
			
		}
	}
	
	
	/*
	* social media link Settings
	*/
	if(isset($_POST['weblizar_settings_save_social']))
	{	
		if($_POST['weblizar_settings_save_social'] == 1) 
		{
			
			foreach($_POST as  $key => $value)
			{
				$wl_theme_options[$key]=sanitize_text_field($_POST[$key]);	
			}
			
			
			// Social Icons footer section yes or on
			if(isset($_POST['header_section_social_media_enbled']))
			{  $wl_theme_options['header_section_social_media_enbled'] = $_POST['header_section_social_media_enbled'];
			} else {  $wl_theme_options['header_section_social_media_enbled'] = "off";	} 
			
			// Social Icons social_media_on_contact section yes or on
			if(isset($_POST['footer_section_social_media_enbled']))
			{  $wl_theme_options['footer_section_social_media_enbled'] = $_POST['footer_section_social_media_enbled'];
			} else {  $wl_theme_options['footer_section_social_media_enbled'] = "off";	} 
			
			update_option('enigma_options_pro', stripslashes_deep($wl_theme_options));
			
		}	
		if($_POST['weblizar_settings_save_social'] == 2) 
		{
			reset_social_setting();
		}
	}
	
	/*
	* footer customization Settings
	*/
	if(isset($_POST['weblizar_settings_save_footer']))
	{	
		if($_POST['weblizar_settings_save_footer'] == 1) 
		{
			foreach($_POST as  $key => $value)
			{
				$wl_theme_options[$key]=sanitize_text_field($_POST[$key]);	
			}
			
			update_option('enigma_options_pro', stripslashes_deep($wl_theme_options));
		}	
		if($_POST['weblizar_settings_save_footer'] == 2) 
		{
			reset_footer_customizations_setting();
		}
	}
	
	/*
	* Custom Links Settings
	*/
	if(isset($_POST['weblizar_settings_save_cptname']))
	{	
		if($_POST['weblizar_settings_save_cptname'] == 1) 
		{
			foreach($_POST as  $key => $value)
			{
				$wl_theme_options[$key]=sanitize_text_field($_POST[$key]);	
			}
			
			update_option('enigma_options_pro', stripslashes_deep($wl_theme_options));
		}	
		if($_POST['weblizar_settings_save_cptname'] == 2) 
		{
			reset_cptlinks();
		}
	}
?>