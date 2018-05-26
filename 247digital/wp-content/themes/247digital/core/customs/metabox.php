<?php
add_action('admin_init','weblizar_init');
function weblizar_init()
	{	
		add_meta_box('weblizar_slider', 'Slider Detail', 'weblizar_meta_slider', 'weblizar_slider', 'normal', 'high');	
		add_meta_box('weblizar_portfolio', 'Portfolio Detail', 'weblizar_meta_portfolio', 'weblizar_portfolio', 'normal', 'high');	
		add_meta_box('weblizar_service', 'Service Detail', 'weblizar_meta_service', 'weblizar_service', 'normal', 'high');	
		add_meta_box('weblizar_testimonial', 'Testimonial Info', 'weblizar_meta_testimonial', 'weblizar_testimonial', 'normal', 'high');
		add_meta_box('weblizar_team', 'Details', 'weblizar_meta_team', 'weblizar_team', 'normal', 'high');
		add_meta_box('weblizar_client', 'Client URL', 'weblizar_meta_client', 'weblizar_client', 'normal', 'high');
		add_action('save_post','weblizar_meta_save');
	}
	
	/*Client URL */
	function weblizar_meta_client() { 
	$client_button_link = sanitize_text_field( get_post_meta( get_the_ID(), 'client_button_link', true ));
	$client_button_target = sanitize_text_field( get_post_meta( get_the_ID(), 'client_button_target', true )); ?>
	<p><input  name="client_button_link" id="client_button_link" style="width: 480px" placeholder="Enter the button link" type="text" value="<?php if (!empty($client_button_link)) echo esc_attr($client_button_link); ?>"> </input></p>
	<p><input type="checkbox" id="client_button_target" name="client_button_target" <?php if($client_button_target) echo "checked"; ?> ><?php _e('Open link in a new window/tab','weblizar'); ?></p>
	<?php 
	}
	
	/*Slider Meta Fields*/
	function weblizar_meta_slider()
	{ 
		global $post;
		$slider_desciption = sanitize_text_field( get_post_meta( get_the_ID(), 'slider_desciption', true ));		
		$slider_button_text = sanitize_text_field( get_post_meta( get_the_ID(), 'slider_button_text', true ));
		$slider_button_link = sanitize_text_field( get_post_meta( get_the_ID(), 'slider_button_link', true ));
		$slider_button_target = sanitize_text_field( get_post_meta( get_the_ID(), 'slider_button_target', true ));
		
		$slider_button_text2 = sanitize_text_field( get_post_meta( get_the_ID(), 'slider_button_text2', true ));
		$slider_button_link2 = sanitize_text_field( get_post_meta( get_the_ID(), 'slider_button_link2', true ));
		$slider_button_target2 = sanitize_text_field( get_post_meta( get_the_ID(), 'slider_button_target2', true ));
	
	?>
	<p><h4 ><?php _e('Slider Description','weblizar');?></h4></p>
	<p><textarea name="slider_desciption" id="slider_desciption" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter slider description"  rows="3" cols="10" ><?php if (!empty($slider_desciption)) echo esc_textarea( $slider_desciption ); ?></textarea></p>
	<p><h4 ><?php _e('Slider Button','weblizar');?></h4></p>
	<p><input type="checkbox" id="slider_button_target" name="slider_button_target" <?php if($slider_button_target) echo "checked"; ?> ><?php _e('Open link in a new window/tab','weblizar'); ?></p>
	<p><input  name="slider_button_link" id="slider_button_link" style="width: 480px" placeholder="Enter the button link" type="text" value="<?php if (!empty($slider_button_link)) echo esc_attr($slider_button_link); ?>"> </input></p>
	<p><input  name="slider_button_text" id="slider_button_text" style="width: 480px" placeholder="Enter the Button text" type="text" value="<?php if (!empty($slider_button_text)) echo esc_attr($slider_button_text); ?>"> </input></p>
	
	<p><h4 ><?php _e('Slider Button Two','weblizar');?></h4></p>
	<p><input type="checkbox" id="slider_button_target2" name="slider_button_target2" <?php if($slider_button_target2) echo "checked"; ?> ><?php _e('Open link in a new window/tab','weblizar'); ?></p>
	<p><input  name="slider_button_link2" id="slider_button_link2" style="width: 480px" placeholder="Enter the button link" type="text" value="<?php if (!empty($slider_button_link2)) echo esc_attr($slider_button_link2); ?>"> </input></p>
	<p><input  name="slider_button_text2" id="slider_button_text2" style="width: 480px" placeholder="Enter the Button text" type="text" value="<?php if (!empty($slider_button_text2)) echo esc_attr($slider_button_text2); ?>"> </input></p>
	
	<?php
	}
	
	/*Portfolio Meta Fields*/
	function weblizar_meta_portfolio()
	{ 
		global $post;
		$portfolio_client = sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_client', true ));		
		$portfolio_url = sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_url', true ));
		$portfolio_skill = sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_skill', true ));
		$portfolio_button_text = sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_button_text', true ));
		$portfolio_button_link = sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_button_link', true ));
		$portfolio_button_target = sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_button_target', true ));
	?>
	<p><h4><?php _e('Portfolio Client','weblizar');?></h4></p>
	<p><input  name="portfolio_client" id="portfolio_client" style="width: 480px" placeholder="Enter the Portfolio client" type="text" value="<?php if (!empty($portfolio_client)) echo esc_attr($portfolio_client); ?>"> </input></p>
	<p><h4><?php _e('Portfolio Skill','weblizar');?></h4></p>
	<p><input  name="portfolio_skill" id="portfolio_skill" style="width: 480px" placeholder="Enter the Portfolio skill" type="text" value="<?php if (!empty($portfolio_skill)) echo esc_attr($portfolio_skill); ?>"> </input></p>
	<p><h4 ><?php _e('Portfolio URL','weblizar');?></h4></p>
	<p><input  name="portfolio_url" id="portfolio_url" style="width: 480px" placeholder="Enter the Portfolio website url  http://weblizar.com/ " type="text" value="<?php if (!empty($portfolio_url)) echo esc_attr($portfolio_url); ?>"> </input></p>
	<p><h4 ><?php _e('Portfolio Button','weblizar');?></h4></p>
	<p><input type="checkbox" id="portfolio_button_target" name="portfolio_button_target" <?php if($portfolio_button_target) echo "checked"; ?> ><?php _e('Open link in a new window/tab','weblizar'); ?></p>
	<p><input  name="portfolio_button_link" id="portfolio_button_link" style="width: 480px" placeholder="Enter the button link Ex:http://weblizar.com/" type="text" value="<?php if (!empty($portfolio_button_link)) echo esc_attr($portfolio_button_link); ?>"> </input></p>
	<p><input  name="portfolio_button_text" id="portfolio_button_text" style="width: 480px" placeholder="Enter the button text" type="text" value="<?php if (!empty($portfolio_button_text)) echo esc_attr($portfolio_button_text); ?>"> </input></p>
	<?php
	}
	
	/******** weblizar meta service ***********/
	function weblizar_meta_service()
	{ 
		global $post;
		$service_font_awesome_icons = sanitize_text_field( get_post_meta( get_the_ID(), 'service_font_awesome_icons', true ));
		$service_description = sanitize_text_field( get_post_meta( get_the_ID(), 'service_description', true ));		
		$service_button_text = sanitize_text_field( get_post_meta( get_the_ID(), 'service_button_text', true ));			
		$service_button_target = sanitize_text_field( get_post_meta( get_the_ID(), 'service_button_target', true ));
		$service_button_link = sanitize_text_field( get_post_meta( get_the_ID(), 'service_button_link', true ));	
	?>
	<p><h4 ><?php _e('Service font-awesome Icons','weblizar');?></h4></p>
	<p><input  name="service_font_awesome_icons" id="service_font_awesome_icons" style="width: 480px" placeholder="Enter Service font-awesome icons" type="text" value="<?php if (!empty($service_font_awesome_icons)) echo esc_attr($service_font_awesome_icons); ?>"></input>
	<br><span style="font-size:14px;">Click her for Service <a href="http://fortawesome.github.io/Font-Awesome/icons/" style="text-decoration:none;" target="_blank"> Font-Awesome icons</a> For example : <b>fa-check-square-o</b></span>
	</p>
	<p><h4 ><?php _e('Service Description','weblizar');?></h4></p>
	<p><textarea name="service_description" id="service_description" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter service description here "  rows="3" cols="10" ><?php if (!empty($service_description)) echo esc_textarea( $service_description ); ?></textarea></p>
	<p><h4 ><?php _e('Service Button Text','weblizar');?></h4></p>
	
	<p><input type="checkbox" id="service_button_target" name="service_button_target" <?php if($service_button_target) echo "checked"; ?> ><?php _e('Open link in a new window/tab','weblizar'); ?></p>
	<p><input  name="service_button_link" id="service_button_link" style="width: 480px" placeholder="Enter the service link" type="text" value="<?php if (!empty($service_button_link)) echo esc_attr($service_button_link); ?>"> </input></p>
	<?php
	}
	
	/*Testimonial Meta Fields*/
	function weblizar_meta_testimonial()
	{ 
		global $post;
		$designation_meta_save = sanitize_text_field( get_post_meta( get_the_ID(), 'designation_meta_save', true ));		
		$description_meta_save = sanitize_text_field( get_post_meta( get_the_ID(), 'description_meta_save', true ));		
	?>
	<p><h4 ><?php _e('Testimonials Description Box','weblizar');?></h4></p>
	<p><textarea name="description_meta_save" id="description_meta_save" style="width: 480px; height: 56px; padding: 0px;" placeholder="Enter about testimonial here"  rows="3" cols="10" ><?php if (!empty($description_meta_save)) echo esc_textarea( $description_meta_save ); ?></textarea></p>	<p><h4 ><?php _e('Members Designation','weblizar');?></h4></p>
	<p><input class="inputwidth"  name="designation_meta_save" id="designation_meta_save" style="width: 480px" placeholder="Enter Member's Designation Here" type="text" value="<?php if (!empty($designation_meta_save)) echo esc_attr($designation_meta_save);?>"></input></p>
	<?php
	}
	
	
	/***Team Meta Boxes**/
	function weblizar_meta_team()
	{ 
		global $post;
		$designation_meta_save = sanitize_text_field( get_post_meta( get_the_ID(), 'designation_meta_save', true ));		
		$fb_meta_save = sanitize_text_field( get_post_meta( get_the_ID(), 'fb_meta_save', true ));		
		$twt_meta_save = sanitize_text_field( get_post_meta( get_the_ID(), 'twt_meta_save', true ));		
		$lnkd_meta_save = sanitize_text_field( get_post_meta( get_the_ID(), 'lnkd_meta_save', true ));	
		$team_meta_save = sanitize_text_field( get_post_meta( get_the_ID(), 'team_meta_save', true ));
	?>
	<p><h4 ><?php _e('Members Designation','weblizar');?></h4></p>
	<p><input class="inputwidth"  name="designation_meta_save" id="designation_meta_save" style="width: 480px" placeholder="Enter Member's Designation Here" type="text" value="<?php if (!empty($designation_meta_save)) echo esc_attr($designation_meta_save);?>"></input></p>
	<p><h4 ><span><?php _e('Social Media Setting','weblizar');?></span></h4>
	<p><h4 ><label><?php _e('Facebook','weblizar');?></label></h4>
	<input style="width:80%;padding: 10px;"  name="fb_meta_save" id="fb_meta_save" placeholder="Enter Your Fb's URL in https formate" value="<?php if(!empty($fb_meta_save)) echo esc_attr($fb_meta_save); ?>"/>
	<p><h4 ><?php _e('Twitter Url','weblizar')?></h4>	 
	<p><input style="width:80%; padding: 10px;"  name="twt_meta_save" id="twt_meta_save" placeholder="Enter Your Twitter's URL in https formate"  value="<?php if(!empty($twt_meta_save)) echo esc_attr($twt_meta_save); ?>"/>	
	<p><h4 ><label><?php _e('LinkedIn Url','weblizar');?></label></h4>
	<input style="width:80%;padding: 10px;"  name="lnkd_meta_save" id="lnkd_meta_save" placeholder="Enter Your LinkedIn's URL in https formate" value="<?php if(!empty($lnkd_meta_save)) echo esc_attr($lnkd_meta_save); ?>"/>
	
	<p><h4 ><label><?php _e('Team Member Url','weblizar');?></label></h4>
	<input style="width:80%;padding: 10px;"  name="team_meta_save" id="team_meta_save" placeholder="Enter Your Team Member's URL in https formate" value="<?php if(!empty($team_meta_save)) echo esc_attr($team_meta_save); ?>"/>
	
	<?php
	}
	
	function weblizar_meta_save($post_id) 
	{	
		if((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || (defined('DOING_AJAX') && DOING_AJAX) || isset($_REQUEST['bulk_edit']))
			return;
			
		if ( ! current_user_can( 'edit_page', $post_id ) )
		{     return ;	} 		
		if(isset($_POST['post_ID']))
		{ 	
			$post_ID = $_POST['post_ID'];				
			$post_type=get_post_type($post_ID);
			
			if($post_type=='weblizar_slider') {			
				update_post_meta($post_ID, 'slider_desciption', sanitize_text_field($_POST['slider_desciption']));
				update_post_meta($post_ID, 'slider_button_text', sanitize_text_field($_POST['slider_button_text']));
				update_post_meta($post_ID, 'slider_button_link', sanitize_text_field($_POST['slider_button_link']));
				update_post_meta($post_ID, 'slider_button_target', sanitize_text_field($_POST['slider_button_target']));
				
				update_post_meta($post_ID, 'slider_button_text2', sanitize_text_field($_POST['slider_button_text2']));
				update_post_meta($post_ID, 'slider_button_link2', sanitize_text_field($_POST['slider_button_link2']));
				update_post_meta($post_ID, 'slider_button_target2', sanitize_text_field($_POST['slider_button_target2']));
				
			}
			else if($post_type=='weblizar_portfolio') {
			
				update_post_meta($post_ID, 'portfolio_skill', sanitize_text_field($_POST['portfolio_skill']));
				update_post_meta($post_ID, 'portfolio_client', sanitize_text_field($_POST['portfolio_client']));
				update_post_meta($post_ID, 'portfolio_url', sanitize_text_field($_POST['portfolio_url']));
				update_post_meta($post_ID, 'portfolio_button_text', sanitize_text_field($_POST['portfolio_button_text']));
				update_post_meta($post_ID, 'portfolio_button_link', sanitize_text_field($_POST['portfolio_button_link']));
				update_post_meta($post_ID, 'portfolio_button_target', sanitize_text_field($_POST['portfolio_button_target']));			
			}
			else if($post_type=='weblizar_service') {
				update_post_meta($post_ID, 'service_font_awesome_icons', sanitize_text_field($_POST['service_font_awesome_icons']));
				update_post_meta($post_ID, 'service_description', sanitize_text_field($_POST['service_description']));
				//update_post_meta($post_ID, 'service_button_text', sanitize_text_field($_POST['service_button_text']));
				update_post_meta($post_ID, 'service_button_link', sanitize_text_field($_POST['service_button_link']));
				update_post_meta($post_ID, 'service_button_target', sanitize_text_field($_POST['service_button_target']));			
			}
			else if($post_type=='weblizar_testimonial') {
				update_post_meta($post_ID, 'designation_meta_save', sanitize_text_field($_POST['designation_meta_save']));			
				update_post_meta($post_ID, 'description_meta_save', sanitize_text_field($_POST['description_meta_save']));			
			}
			else if($post_type=='weblizar_team') {
				update_post_meta($post_ID, 'designation_meta_save', sanitize_text_field($_POST['designation_meta_save']));			
				update_post_meta($post_ID, 'fb_meta_save', sanitize_text_field($_POST['fb_meta_save']));			
				update_post_meta($post_ID, 'twt_meta_save', sanitize_text_field($_POST['twt_meta_save']));			
				update_post_meta($post_ID, 'lnkd_meta_save', sanitize_text_field($_POST['lnkd_meta_save']));
				update_post_meta($post_ID, 'team_meta_save', sanitize_text_field($_POST['team_meta_save']));
			} else if($post_type=='weblizar_client') {
			update_post_meta($post_ID, 'client_button_target', sanitize_text_field($_POST['client_button_target']));
			update_post_meta($post_ID, 'client_button_link', sanitize_text_field($_POST['client_button_link']));
			}
		}			
	} 
?>