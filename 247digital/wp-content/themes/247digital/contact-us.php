<?php
// Template Name: contact-us
 get_header(); 
 get_template_part('breadcrums');  ?>

 <?php 	$wl_theme_options=get_option('enigma_options_pro');	 ?>
 <div class="enigma_contact_area">
	<div class="container">
		<div class="row enigma_cotact_form_div">
			<div class="col-md-12">
				<div class="enigma_heading_title">
				<?php if($wl_theme_options['contact_heading']!='') {  
					echo "<h3>".$wl_theme_options['contact_heading']."</h3>";
				}
				if($wl_theme_options['contact_description']!='') { ?>
					<p class="sub-title"><?php echo $wl_theme_options['contact_description']; ?></p>	
				<?php } ?>
				</div>
			</div>			
			<div class="col-md-6 enigma_contact_form_fields">
				<div id="weblizar_form"> 
					<form role="form" method="POST"  action="#">	
						<div class="enigma_form_group">
							<label for="exampleInputEmail1"><?php _e('Nom','weblizar'); ?><small>*</small></label>
							<input type="name" name="user_name" id="user_name" class="enigma_con_input_control">
							<span id="contact_name_error" style="display:none;color:red;"><?php _e('Entrer Votre Nom ','weblizar'); ?></span>
						</div>
						<div class="enigma_form_group">
							<label for="exampleInputPassword1"><?php _e('Email','weblizar'); ?><small>*</small></label>
							<input type="email" id="user_email" name="user_email" class="enigma_con_input_control">
							<span id="contact_email_error" style="display:none;color:red;"><?php _e('Entrer Votre Email !','weblizar'); ?></span>
						</div>
						
						<div class="enigma_form_group">
							<label for="exampleInputPassword1"><?php _e('Message','weblizar'); ?></label>
							<textarea class="enigma_con_textarea_control" name="user_message"  rows="5"></textarea>
							<span id="contact_user_massage_error" style="display:none;color:red;"><?php _e('Entrer Votre massage ! ','weblizar'); ?></span>
						</div>
						<button class="enigma_send_button" type="submit" name="query_submit" id="query_submit"><?php _e('Envoyer','weblizar'); ?></button>
					</form>
				</div>
				<div id="enquiry_send_massage" style="display:none;">
					<div class="callout-box callout-box2 clearfix">
						<div class="callout-content">
							<h2><?php _e('Message envoyée avec succès','weblizar'); ?></h2>							
						</div>    
					</div>
				</div>
			</div>
			<?php 
				if(isset($_POST['query_submit']))
				{ 	if($_POST['user_name']==''){	
						echo "<script>jQuery('#contact_name_error').show();</script>";
					} else
					if($_POST['user_email']=='') {
						echo "<script>jQuery('#contact_email_error').show();</script>";
					} else
					if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $_POST['user_email'])) {								
						echo "<script>jQuery('#contact_email_error').show();</script>";
					} else	
					if($_POST['user_message'] ==''){							
						echo "<script>jQuery('#contact_user_massage_error').show();</script>";
					}
					else
					{	$email = get_option('admin_email');
						$subject = "You have new enquiry  form".get_option("blogname");
						$massage =  stripslashes(trim($_POST['user_message']))."Message sent from  Name:" . trim($_POST['user_name']). "<br>Email :". trim($_POST['user_email']);
						$headers = "From: ".trim($_POST['user_name'])." <".trim($_POST['user_email']).">\r\nReply-To:".trim($_POST['user_email']);							
						$enquerysend =wp_mail( $email, $subject, $massage, $headers);
						
						echo "<script>jQuery('#weblizar_form').hide();</script>";
						echo "<script>jQuery('#enquiry_send_massage').show();</script>";	
					}
				}
			?>
			<div class="col-md-6 enigma_contact_info">
				<ul><?php if($wl_theme_options['phone_number_text']!='') {  ?>
					<li>
						<i class="fa fa-phone"></i><span class="text">
						<span class="desc"><?php echo $wl_theme_options['phone_number_text']; ?></span>
						<?php if($wl_theme_options['contact_phone_no']!='') { echo $wl_theme_options['contact_phone_no'];  } ?>
						</span>
					</li>
					<?php } 
					if($wl_theme_options['general_info_text'] !='') {  ?>
					<li>
						<i class="fa fa-envelope"></i><span class="text">
						<span class="desc"><?php echo $wl_theme_options['general_info_text']; ?></span>
						<?php if($wl_theme_options['contact_email']!='') { echo $wl_theme_options['contact_email'];  } ?>
						</span>
					</li>
					<?php } 
					if($wl_theme_options['work_time_text'] !='') {  ?>
					<li>
						<i class="fa fa-clock-o"></i><span class="text">
						<span class="desc"><?php echo $wl_theme_options['work_time_text']; ?></span>
						<?php if($wl_theme_options['work_time']!='') { echo $wl_theme_options['work_time'];  } ?>
						</span>
					</li>
					<?php } 
					if($wl_theme_options['where_we_are_text'] !='') {  ?>					
					<li>
						<i class="fa fa-map-marker"></i><span class="text">
						<span class="desc"><?php echo $wl_theme_options['where_we_are_text']; ?></span> 
						<?php if($wl_theme_options['contact_address']!='') { echo $wl_theme_options['contact_address'];  } ?>
						</span>
					</li>
					<?php } ?>					
				</ul>
			</div>			
		</div>
	</div> <!-- container div end here -->
	<?php if($wl_theme_options['google_map_on_contact']=='on') { 
		$google_maps = $wl_theme_options['google_maps'] . "&amp;t=m&amp;z=9&amp;output=embed";
		?>
	<div class="enigma_google_map">			
		<iframe width="100%" scrolling="no" height="500" frameborder="0" src="<?php echo $google_maps; ?>" marginwidth="0" marginheight="0"></iframe>	
	</div>
	<?php } ?>
	
</div> <!-- contact area div end here -->
	
	
	
 <?php get_footer(); ?>