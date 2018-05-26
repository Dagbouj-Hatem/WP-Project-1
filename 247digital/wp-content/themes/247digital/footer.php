<!-- enigma Callout Section -->
<!-- enigma Callout Section -->
<div class="enigma_callout_area">
	<?php  $wl_theme_options = get_option('enigma_options_pro'); ?>
	<div class="container">
		<div class="row">
			<?php if($wl_theme_options['call_out_text']!='') { ?>
			<div class="col-md-9">
				<p><i class="fa fa-thumbs-up"></i><?php echo $wl_theme_options['call_out_text']; ?></p>
			</div>
			<?php } ?>			
			<?php if($wl_theme_options['call_out_button_text']!='') { ?>
			<div class="col-md-3">
				<a href="<?php if($wl_theme_options['call_out_link']!='') { echo $wl_theme_options['call_out_link']; } ?>" class="enigma_callout_btn" <?php if($wl_theme_options['call_out_button_target']=='on') { echo "target='_blank'"; } ?> ><?php echo $wl_theme_options['call_out_button_text']; ?> </a>
			</div>
			<?php } ?>
		</div>		
	</div>
	<div class="enigma_callout_shadow"></div>
</div>
<!-- /enigma Callout Section -->
<!-- Footer Widget Secton -->
<div class="enigma_footer_widget_area">	
	<div class="container">
		<div class="row">
		<?php 
		if ( is_active_sidebar( 'footer-widget-area' ) ){ 
			dynamic_sidebar( 'footer-widget-area' );
		}else {  ?>
			<div class="col-md-3 col-sm-6 enigma_footer_widget_column">		
				<h3 class="enigma_footer_widget_title"><?php _e('24-7 Digital','weblizar'); ?> <div class="enigma-footer-separator" id=""></div></h3>
				<h6><?php _e(" « Agence de communication digitale multidisciplinaire »<br>
                          « Twenty Four/24 » <br>
						  « Seven/7 »
						 ",'weblizar'); ?>
				</h6>
				<img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/img/logo.png"  width="160" height="130">
				<h6 class="digi"><?php _e("<i><strong>24-7 Digital</strong> à vos disposition</i>",'weblizar'); ?></h6>
			</div>			
			<div class="col-md-3 col-sm-6 enigma_footer_widget_column">		
				<h3 class="enigma_footer_widget_title"><?php _e('Services Plus','weblizar'); ?><div class="enigma-footer-separator" id=""></div></h3>
						<div id="menu" class="collapse navbar-collapse ">	
				<?php wp_nav_menu( array(
						'menu' => 'menu-footer',
						'menu_class' => 'menu_footer',
						
						)
						);	?>	
						
			           </div>
					   
					  
					   				<!-- social-->
		 <?php if($wl_theme_options['footer_section_social_media_enbled']=="on") { ?>
			<div class="enigma_footer_social_div">
				<ul class="social">
					<?php if($wl_theme_options['facebook_link']!='') { ?>
					<li class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><a  href="<?php echo $wl_theme_options['facebook_link']; ?>"><i class="fa fa-facebook"></i></a></li>
					<?php } if($wl_theme_options['twitter_link']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="top" title="Twiiter"><a href="<?php echo $wl_theme_options['twitter_link']; ?>"><i class="fa fa-twitter"></i></a></li>
					<?php } if($wl_theme_options['dribble_link']!='') { ?>
					<li class="dribbble" data-toggle="tooltip" data-placement="top" title="Dribble"><a href="<?php echo $wl_theme_options['dribble_link']; ?>"><i class="fa fa-dribbble"></i></a></li>
					<?php } if($wl_theme_options['linkedin_link']!='') { ?>
					<li class="linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"><a href="<?php echo $wl_theme_options['linkedin_link']; ?>"><i class="fa fa-linkedin"></i></a></li>
					<?php } if($wl_theme_options['youtube_link']!='') { ?>
					<li class="youtube" data-toggle="tooltip" data-placement="top" title="Youtube"><a href="<?php echo $wl_theme_options['youtube_link']; ?>"><i class="fa fa-youtube"></i></a></li>
	                <?php } if($wl_theme_options['google_plus']!='') { ?>					
					<li class="Googleplus" data-toggle="tooltip" data-placement="bottom" title="Googleplus"><a href="<?php echo $wl_theme_options['google_plus']; ?>"><i class="fa fa-google"></i></a></li>
	                <?php } if($wl_theme_options['flicker_link']!='') { ?>
					<li class="flicker" data-toggle="tooltip" data-placement="bottom" title="Flicker"><a href="<?php echo $wl_theme_options['flicker_link']; ?>"><i class="fa fa-flickr"></i></a></li>
	                <?php } ?>
				</ul>
			</div>
			<?php } ?><!-- #social-->

              			
            </div>			
			<div class="col-md-3 col-sm-6 enigma_footer_widget_column">		
				<h3 class="enigma_footer_widget_title"><?php _e('Galerie Photos','weblizar'); ?><div class="enigma-footer-separator" id=""></div></h3>
				<ul class="flickr-photos-list">
				
					<li><a href="http://ohspublishing.com/wp-content/uploads/2016/10/web-design-ohs-publishing-kansas-city-smithville-mo.png"><img src="http://ohspublishing.com/wp-content/uploads/2016/10/web-design-ohs-publishing-kansas-city-smithville-mo.png" alt="Dev "></a></li>
					<li><a href="https://arquetipo.com.ar/baul/img/imagen--080820160512330000008cedf4e434f379b080b2ad55f2854ad7.png"><img src="https://arquetipo.com.ar/baul/img/imagen--080820160512330000008cedf4e434f379b080b2ad55f2854ad7.png" alt="responsive"></a></li>
					<li><a href="https://uploads.hb.cldmail.ru/basiccourse/88/image/a6c965c33d26e2391146c0a1eaaade12.png"><img src="https://uploads.hb.cldmail.ru/basiccourse/88/image/a6c965c33d26e2391146c0a1eaaade12.png" alt="Ortofon Concorde S-120 (#1211)"></a></li>
					
					<li><a href="http://www.jrtstudio.com/sites/default/files/ico_android.png"><img src="http://www.jrtstudio.com/sites/default/files/ico_android.png" alt="Android App"></a></li>
					<li><a href="http://ideaandcreativity.com/wp-content/uploads/2015/11/apple-inc.png"><img src="http://ideaandcreativity.com/wp-content/uploads/2015/11/apple-inc.png" alt="IOS"></a></li>
					<li><a href="https://www.muywindows.com/wp-content/uploads/2010/07/WindowsPhones.png"><img src="https://www.muywindows.com/wp-content/uploads/2010/07/WindowsPhones.png" alt="WindowsPhones"></a></li>
					
					<li><a href="https://chameleonproduction.com/wp-content/uploads/2017/05/teardrop-beach-flag.png"><img src="https://chameleonproduction.com/wp-content/uploads/2017/05/teardrop-beach-flag.png" alt="stands publicitaires"></a></li>
					<li><a href="https://keiturna.files.wordpress.com/2015/07/p1akenationbanner.png?w=208&h=208&crop=1"><img src="https://keiturna.files.wordpress.com/2015/07/p1akenationbanner.png?w=208&h=208&crop=1" alt="Bannières"></a></li>
					<li><a href="http://www.marketing-chine.com/wp-content/uploads/2017/09/Video-seo.png"><img src="http://www.marketing-chine.com/wp-content/uploads/2017/09/Video-seo.png" alt="Video"></a></li>
				</ul>
			</div>
			
			<div class="col-md-3 col-sm-6 enigma_footer_widget_column">		
				<h3 class="enigma_footer_widget_title"><?php _e('Contactez-nous','weblizar'); ?><div class="enigma-footer-separator" id=""></div></h3>
				<address>
				 <p><i class="fa fa-phone"></i>  <?php _e('+216 98 502 519','weblizar'); ?> </p>
				  <p><i class="fa fa-globe"></i> <?php _e('+216 71 505 451','weblizar'); ?></p>
				  	<p> <i class="fa fa-map-marker"></i> <?php _e('51 Av Habib BOURGUIBA, bardo ','weblizar'); ?></p>
				 <p><i class="fa fa-envelope"></i> <?php _e('contact@24-7digital.com.tn','weblizar'); ?></p>
				<p> <i class="fa fa-clock-o"></i> <?php _e('08:00 - 12:00 , 13:00 - 18:00','weblizar'); ?></p>
			
				</address>

			</div>
			<?php } ?>
		</div>	
	</div>
</div>
<div class="enigma_footer_area">
	<div class="container">
		<div class="col-md-12">
			
			<p class="enigma_footer_copyright_info wl_rtl"><?php if($wl_theme_options['footer_customizations']!='') { echo $wl_theme_options['footer_customizations']; } ?>&nbsp;<?php if($wl_theme_options['developed_by_text']!='') { echo $wl_theme_options['developed_by_text']; } ?>
				<a rel="nofollow" href="<?php if($wl_theme_options['developed_by_link']!='') { echo $wl_theme_options['developed_by_link']; } ?>" >
				<?php if($wl_theme_options['developed_by_weblizar_text']!='') { echo $wl_theme_options['developed_by_weblizar_text']; } ?></a>
			</p>

		</div>
	</div>	
</div>
<?php // google_analytics code 
	if($wl_theme_options['google_analytics']!='') { echo "<script>".$wl_theme_options['google_analytics']."</script>"; } 
	//  custom css code
	if($wl_theme_options['custom_css']!='') { echo "<style>".$wl_theme_options['custom_css']."</style>"; } 
	
	?>
 <?php //get_template_part('style-switcher'); ?>	
<!-- /Footer Widget Secton -->
<!--Scroll To Top-->
<a href="#" title="Go Top" class="enigma_scrollup"><i class="fa fa-chevron-up"></i></a>
<!--/Scroll To Top-->
</div>
<?php wp_footer(); ?>
</body>
</html>