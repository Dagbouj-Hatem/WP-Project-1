<?php $wl_theme_options = get_option('enigma_options_pro'); ?>
<div class="block ui-tabs-panel active" id="option-general" >	
	<form method="post" id="weblizar_theme_options_general">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('General Settings','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_general_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_general_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_general_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('general');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('general')" >
				</td>
				</tr>
			</table>			
		</div>
		<div class="section">
			<h3><?php _e('Home-Page or Custom Page','weblizar'); ?></h3>
			<input type="checkbox" <?php if($wl_theme_options['front_page']=='on') echo "checked='checked'"; ?> id="front_page" name="front_page" > <span class="explain"><?php _e('Enable Custom Static Front-Page.','weblizar');?> <a href="<?php echo home_url( '/' ); ?>wp-admin/options-reading.php"><?php _e('Click Here','weblizar');?></a>.</span>
		</div>
		<div class="section">
			<h3><?php _e('Your Site Logo','weblizar'); ?></h3>
			<input class="weblizar_inpute" type="text" value="<?php if($wl_theme_options['upload_image_logo']!='') { echo esc_attr($wl_theme_options['upload_image_logo']); } ?>" id="upload_image_logo" name="upload_image_logo" size="36" class="upload has-file"/>
			<input type="button" id="upload_button" value="Custom Logo" class="upload_image_button" />
			<span class="explain"><?php _e('Add your site logo here suggested size is 150X50','weblizar');?></span>	
			<?php if($wl_theme_options['upload_image_logo']!='') { ?>
			<p><img style="height:60px;width:100px;" src="<?php if($wl_theme_options['upload_image_logo']!='') { echo esc_attr($wl_theme_options['upload_image_logo']); } ?>" /></p>
			<?php } ?>
		</div>
		<div class="section">
			<h3><?php _e('Logo Height','weblizar'); ?></h3>
			<input class="weblizar_inpute"  type="text" name="height" id="height" value="<?php echo $wl_theme_options['height']; ?>" >	
			<span class="explain"><?php  _e('Default Logo Height : 55px, if you want to increase than specify your value','weblizar'); ?></span>
		</div>
		<div class="section">
			<h3><?php _e('Logo Width','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="width" id="width"  value="<?php echo $wl_theme_options['width']; ?>" >	
			<span class="explain"><?php  _e('Default Logo Width : 150px, if you want to increase than specify your value','weblizar');?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Your Site Favicon','weblizar'); ?></h3>
			<input class="weblizar_inpute" type="text" value="<?php if($wl_theme_options['upload_image_favicon']!='') { echo esc_attr($wl_theme_options['upload_image_favicon']); } ?>" id="upload_image_favicon" name="upload_image_favicon" size="36" class="upload has-file"/>
			<input type="button" id="upload_button" value="Favicon Icon" class="upload_image_button"  /><br>	
			<span class="explain"><?php  _e('Make sure you upload .ico image type which is not more then 25X25 px.','weblizar');?></span>
			<?php if($wl_theme_options['upload_image_favicon']!='') { ?>
			<p><img style="height:60px;width:100px;" src="<?php  echo esc_attr($wl_theme_options['upload_image_favicon']);  ?>" /></p>
			<?php } ?>
		</div>
		<div class="section">
			<h3><?php _e('Google Analytic Tracking Code','weblizar'); ?></h3>
			<textarea rows="8" cols="8" id="google_analytics" name="google_analytics" ><?php if($wl_theme_options['google_analytics']!='') { echo esc_attr($wl_theme_options['google_analytics']); } ?></textarea>
			<div class="explain"><?php _e('Paste your Google Analytics tracking code here. This will be added into themes footer. Copy only scripting code i.e no need to use script tag ','weblizar'); ?><br></div>
		</div>
		<div class="section">
			<h3><?php _e('Custom CSS Editor','weblizar'); ?></h3>
			<textarea rows="8" cols="8" id="custom_css" name="custom_css"><?php if($wl_theme_options['custom_css']!='') { echo esc_attr($wl_theme_options['custom_css']); } ?></textarea>
			<div class="explain"><?php _e('This is a powerful feature provided here. No need to use custom css plugin, just paste your css code and see the magic.','weblizar'); ?><br></div>
		</div>		
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_general" name="weblizar_settings_save_general" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('general');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('general')" >
		</div>
	</form>	
</div>
<!-------- Home Slider setting ------------>
<div class="block ui-tabs-panel deactive" id="option-home-slider" >
	<form method="post" id="weblizar_theme_options_home-slider">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Slider Settings','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_home-slider_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-slider_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-slider_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-slider');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-slider')" >
				</td>
				</tr>
			</table>			
		</div>		
		<div class="section">
			<h3><?php _e('On-mouse hover Pause','weblizar'); ?></h3>
			<?php $side_pause = $wl_theme_options['side_pause']; ?>		
			<select name="side_pause" class="webriti_inpute" >					
				<option value="yes"  <?php echo selected($side_pause, 'yes' ); ?>><?php _e('Yes','weblizar');?></option>
				<option value="no" <?php echo selected($side_pause, 'no' ); ?>><?php _e('No','weblizar');?></option> 
			</select>
			<span class="explain"><?php _e('Pause Slider on hover.','weblizar'); ?></span>
		</div>			
		<div class="section">
			<h3><?php _e('Slide show Interval','weblizar') ?></h3>
			<?php $side_interval = $wl_theme_options['side_interval']; ?>		
				<select name="side_interval" class="webriti_inpute" >
					<option value="4000" <?php selected($side_interval, '4000' ); ?>>4000</option>
					<option value="5000" <?php selected($side_interval, '5000' ); ?>>5000</option>
					<option value="6000" <?php selected($side_interval, '6000' ); ?>>6000</option>
					<option value="7000" <?php selected($side_interval, '7000' ); ?>>7000</option>
					<option value="8000" <?php selected($side_interval, '8000' ); ?>>8000</option>
					<option value="9000" <?php selected($side_interval, '9000' ); ?>>9000</option>
					<option value="10000" <?php selected($side_interval, '10000' ); ?>>10000</option>
				</select>
				<span class="explain"><?php _e('Select Slide show Interval.','weblizar'); ?></span>	
		</div>
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_home-slider" name="weblizar_settings_save_home-slider" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-slider');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-slider')" >
		</div>		
	</form>	
</div>
<!--------------- Service settings ------------>
<div class="block ui-tabs-panel deactive" id="option-home-service" >
	<form method="post" id="weblizar_theme_options_home-service">	
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Service Settings','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_home-service_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-service_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-service_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-service');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-service')" >
				</td>
				</tr>
			</table>			
		</div>
		
		<div class="section">			
			<h3><?php _e('service Title','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="home_service_title" id="home_service_title"  value="<?php if($wl_theme_options['home_service_title']!='') { echo esc_attr($wl_theme_options['home_service_title']); } ?>" >	
			<span class="explain"><?php  _e('Type here your Service title','weblizar');?></span>			
		</div>
		
		<div class="section">
			<h3><?php _e('Home Page Service Column','weblizar'); ?></h3>
			<?php $service_column = $wl_theme_options['service_column']; ?>		
			<select name="service_column" class="webriti_inpute" >					
				<option value="2"  <?php echo selected($service_column, '2' ); ?>>2</option>
				<option value="3" <?php echo selected($service_column, '3' ); ?>>3</option>
				<option value="4" <?php echo selected($service_column, '4' ); ?>>4</option> 
			</select>
			<span class="explain"><?php _e('Select your home page Service Column.','weblizar'); ?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Number Of Service on home page','weblizar'); ?></h3>
			<?php $no_of_service = $wl_theme_options['no_of_service']; ?>		
			<select name="no_of_service" class="webriti_inpute" >					
				<option value="2"  <?php echo selected($no_of_service, '2' ); ?>>2</option>
				<option value="3" <?php echo selected($no_of_service, '3' ); ?>>3</option>
				<option value="4" <?php echo selected($no_of_service, '4' ); ?>>4</option> 
				<option value="5" <?php echo selected($no_of_service, '5' ); ?>>5</option> 
				<option value="6" <?php echo selected($no_of_service, '6' ); ?>>6</option> 
				<option value="7" <?php echo selected($no_of_service, '7' ); ?>>7</option>
				<option value="8" <?php echo selected($no_of_service, '8' ); ?>>8</option> 
			</select>
			<span class="explain"><?php _e('Select your Number Of Service on home page.','weblizar'); ?></span>
		</div>
		<div class="section">		
		<h3><?php _e('Home Page Extra Option','weblizar'); ?></h3>			
			<?php $settings = array( "media_buttons" => true,"quicktags" => true, "tinymce" => array( "plugins" => "wordpress" ) ); ?>
			<?php $content = $wl_theme_options["extra_home_text"]!="" ? esc_attr($wl_theme_options["extra_home_text"]) : "" ; ?>                     
			<?php $editor_id = "extra_home_text"; ?>
			<?php wp_editor( $content, $editor_id, $settings ); ?><br>
			<span class="explain"><?php _e('Type here your service description.','weblizar'); ?></span>
		</div>	
		
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_home-service" name="weblizar_settings_save_home-service" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-service');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-service')" >
			<!--  alert massage when data saved and reset -->
		</div>
		
	</form>	
</div>

<!--------------- Portfolio settings ------------>
<div class="block ui-tabs-panel deactive" id="option-home-portfolio" >
	<form method="post" id="weblizar_theme_options_home-portfolio">	
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Portfolio Settings','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_home-portfolio_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-portfolio_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-portfolio_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-portfolio');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-portfolio')" >
				</td>
				</tr>
			</table>			
		</div>
		
		<div class="section">			
			<h3><?php _e('Portfolio Title','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="home_portfolio_title" id="home_portfolio_title"  value="<?php if($wl_theme_options['home_portfolio_title']!='') { echo esc_attr($wl_theme_options['home_portfolio_title']); } ?>" >	
			<span class="explain"><?php  _e('Type here your portfolio title','weblizar');?></span>			
		</div>
		<div class="section">			
			<h3><?php _e('Related Project Portfolio Title Text','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="portfolio_related_project_title" id="portfolio_related_project_title"  value="<?php if($wl_theme_options['portfolio_related_project_title']!='') { echo esc_attr($wl_theme_options['portfolio_related_project_title']); } ?>" >	
			<span class="explain"><?php  _e('Type here your related project portfolio title text','weblizar');?></span>			
		</div>
		
		<div class="section">
			<h3><?php _e('Portfolio light box type','weblizar'); ?></h3>
			<?php $light_box_style = $wl_theme_options['light_box_style']; ?>		
			<select name="light_box_style" class="webriti_inpute" >					
				<option value="photobox_a"  <?php echo selected($light_box_style, 'photobox_a' ); ?>><?php _e('Photobox','weblizar'); ?></option>
				<option value="swipebox" <?php echo selected($light_box_style, 'swipebox' ); ?>><?php _e('Swipebox','weblizar'); ?></option> 
			</select>
			<span class="explain"><?php _e('Select your portfolio light box.','weblizar'); ?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Portfolio Slide Duration','weblizar'); ?></h3>
			<?php $portfolio_slide_duration = $wl_theme_options['portfolio_slide_duration']; ?>		
			<select name="portfolio_slide_duration" class="webriti_inpute" >					
				<option value="500"  <?php echo selected($portfolio_slide_duration, '500' ); ?>>500</option>
				<option value="1000" <?php echo selected($portfolio_slide_duration, '1000' ); ?>>1000</option>
				<option value="2000" <?php echo selected($portfolio_slide_duration, '2000' ); ?>>2000</option> 
				<option value="3000" <?php echo selected($portfolio_slide_duration, '3000' ); ?>>3000</option> 
				<option value="4000" <?php echo selected($portfolio_slide_duration, '4000' ); ?>>4000</option> 
				<option value="5000" <?php echo selected($portfolio_slide_duration, '5000' ); ?>>5000</option>
				<option value="6000" <?php echo selected($portfolio_slide_duration, '6000' ); ?>>6000</option> 
				<option value="7000" <?php echo selected($portfolio_slide_duration, '7000' ); ?>>7000</option>
				<option value="8000" <?php echo selected($portfolio_slide_duration, '8000' ); ?>>8000</option> 
			</select>
			<span class="explain"><?php _e('Select your Portfolio Slide Duration.','weblizar'); ?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Portfolio Slide Time Out Duration','weblizar'); ?></h3>
			<?php $portfolio_slide_timeoutduration = $wl_theme_options['portfolio_slide_timeoutduration']; ?>		
			<select name="portfolio_slide_timeoutduration" class="webriti_inpute" >					
				<option value="500"  <?php echo selected($portfolio_slide_timeoutduration, '500' ); ?>>500</option>
				<option value="1000" <?php echo selected($portfolio_slide_timeoutduration, '1000' ); ?>>1000</option>
				<option value="2000" <?php echo selected($portfolio_slide_timeoutduration, '2000' ); ?>>2000</option> 
				<option value="3000" <?php echo selected($portfolio_slide_timeoutduration, '3000' ); ?>>3000</option> 
				<option value="4000" <?php echo selected($portfolio_slide_timeoutduration, '4000' ); ?>>4000</option> 
				<option value="5000" <?php echo selected($portfolio_slide_timeoutduration, '5000' ); ?>>5000</option>
				<option value="6000" <?php echo selected($portfolio_slide_timeoutduration, '6000' ); ?>>6000</option> 
				<option value="7000" <?php echo selected($portfolio_slide_timeoutduration, '7000' ); ?>>7000</option>
				<option value="8000" <?php echo selected($portfolio_slide_timeoutduration, '8000' ); ?>>8000</option> 
			</select>
			<span class="explain"><?php _e('Select your Portfolio Slide Time Out Duration.','weblizar'); ?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Portfolio Slide Item','weblizar'); ?></h3>
			<?php  $portfolio_slide_item = $wl_theme_options['portfolio_slide_item']; ?>		
			<select name="portfolio_slide_item" class="webriti_inpute" >					
				<option value="2"  <?php echo selected($portfolio_slide_item, '2' ); ?>>2</option>
				<option value="3"  <?php echo selected($portfolio_slide_item, '3' ); ?>>3</option>
				<option value="4"  <?php echo selected($portfolio_slide_item, '4' ); ?>>4</option>
				<option value="5"  <?php echo selected($portfolio_slide_item, '5' ); ?>>5</option>
				<option value="6"  <?php echo selected($portfolio_slide_item, '6' ); ?>>6</option>
				<option value="7"  <?php echo selected($portfolio_slide_item, '7' ); ?>>7</option>
				<option value="8"  <?php echo selected($portfolio_slide_item, '8' ); ?>>8</option>
			</select>
			<span class="explain"><?php _e('Select your Portfolio Slide Items.','weblizar'); ?></span>
		</div>
		
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_home-portfolio" name="weblizar_settings_save_home-portfolio" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-portfolio');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-portfolio')" >
			<!--  alert massage when data saved and reset -->
		</div>
		
	</form>	
</div>

<!--------------- blog settings ------------>
<div class="block ui-tabs-panel deactive" id="option-home-blog" >
	<form method="post" id="weblizar_theme_options_home-blog">	
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Blog Settings','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_home-blog_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-blog_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-blog_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-blog');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-blog')" >
				</td>
				</tr>
			</table>			
		</div>
		
		<div class="section">			
			<h3><?php _e('Blog Title','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="home_blog_heading" id="home_blog_heading"  value="<?php if($wl_theme_options['home_blog_heading']!='') { echo esc_attr($wl_theme_options['home_blog_heading']); } ?>" >	
			<span class="explain"><?php  _e('Type here your Blog title','weblizar');?></span>			
		</div>
		
		<div class="section">
			<h3><?php _e('Blog Slide Duration','weblizar'); ?></h3>
			<?php $blog_slide_duration = $wl_theme_options['blog_slide_duration']; ?>		
			<select name="blog_slide_duration" class="webriti_inpute" >					
				<option value="500"  <?php echo selected($blog_slide_duration, '500' ); ?>>500</option>
				<option value="1000" <?php echo selected($blog_slide_duration, '1000' ); ?>>1000</option>
				<option value="2000" <?php echo selected($blog_slide_duration, '2000' ); ?>>2000</option> 
				<option value="3000" <?php echo selected($blog_slide_duration, '3000' ); ?>>3000</option> 
				<option value="4000" <?php echo selected($blog_slide_duration, '4000' ); ?>>4000</option> 
				<option value="5000" <?php echo selected($blog_slide_duration, '5000' ); ?>>5000</option>
				<option value="6000" <?php echo selected($blog_slide_duration, '6000' ); ?>>6000</option> 
				<option value="7000" <?php echo selected($blog_slide_duration, '7000' ); ?>>7000</option>
				<option value="8000" <?php echo selected($blog_slide_duration, '8000' ); ?>>8000</option> 
			</select>
			<span class="explain"><?php _e('Select your Blog Slide Duration.','weblizar'); ?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Blog Slide Time Out Duration','weblizar'); ?></h3>
			<?php $blog_slide_timeoutduration = $wl_theme_options['blog_slide_timeoutduration']; ?>		
			<select name="blog_slide_timeoutduration" class="webriti_inpute" >					
				<option value="500"  <?php echo selected($blog_slide_timeoutduration, '500' ); ?>>500</option>
				<option value="1000" <?php echo selected($blog_slide_timeoutduration, '1000' ); ?>>1000</option>
				<option value="2000" <?php echo selected($blog_slide_timeoutduration, '2000' ); ?>>2000</option> 
				<option value="3000" <?php echo selected($blog_slide_timeoutduration, '3000' ); ?>>3000</option> 
				<option value="4000" <?php echo selected($blog_slide_timeoutduration, '4000' ); ?>>4000</option> 
				<option value="5000" <?php echo selected($blog_slide_timeoutduration, '5000' ); ?>>5000</option>
				<option value="6000" <?php echo selected($blog_slide_timeoutduration, '6000' ); ?>>6000</option> 
				<option value="7000" <?php echo selected($blog_slide_timeoutduration, '7000' ); ?>>7000</option>
				<option value="8000" <?php echo selected($blog_slide_timeoutduration, '8000' ); ?>>8000</option> 
			</select>
			<span class="explain"><?php _e('Select your Blog Slide Time Out Duration.','weblizar'); ?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Blog Slide Item','weblizar'); ?></h3>
			<?php  $blog_slide_item = $wl_theme_options['blog_slide_item']; ?>		
			<select name="blog_slide_item" class="webriti_inpute" >					
				<option value="2"  <?php echo selected($blog_slide_item, '2' ); ?>>2</option>
				<option value="3"  <?php echo selected($blog_slide_item, '3' ); ?>>3</option>
				<option value="4"  <?php echo selected($blog_slide_item, '4' ); ?>>4</option>
				<option value="5"  <?php echo selected($blog_slide_item, '5' ); ?>>5</option>
				<option value="6"  <?php echo selected($blog_slide_item, '6' ); ?>>6</option>
				<option value="all"  <?php echo selected($blog_slide_item, 'all' ); ?>>all</option>
			
			</select>
			<span class="explain"><?php _e('Select your Blog Slide Items.','weblizar'); ?></span>
		</div>		
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_home-blog" name="weblizar_settings_save_home-blog" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-blog');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-blog')" >
			<!--  alert massage when data saved and reset -->
		</div>		
	</form>	
</div>

<!--------------- Testimonial settings ------------>
<div class="block ui-tabs-panel deactive" id="option-home-testi" >
	<form method="post" id="weblizar_theme_options_home-testi">	
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Testimonial Settings','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_home-testi_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-testi_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-testi_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-testi');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-testi')" >
				</td>
				</tr>
			</table>			
		</div>
		
		<div class="section">			
			<h3><?php _e('Testimonial Title','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="home_testi_title" id="home_testi_title"  value="<?php if($wl_theme_options['home_testi_title']!='') { echo esc_attr($wl_theme_options['home_testi_title']); } ?>" >	
			<span class="explain"><?php  _e('Type here your Testimonial title','weblizar');?></span>			
		</div>
		
		<div class="section">
			<h3><?php _e('Testimonial Slide Duration','weblizar'); ?></h3>
			<?php $testi_slide_duration = $wl_theme_options['testi_slide_duration']; ?>		
			<select name="testi_slide_duration" class="webriti_inpute" >					
				<option value="500"  <?php echo selected($testi_slide_duration, '500' ); ?>>500</option>
				<option value="1000" <?php echo selected($testi_slide_duration, '1000' ); ?>>1000</option>
				<option value="2000" <?php echo selected($testi_slide_duration, '2000' ); ?>>2000</option> 
				<option value="3000" <?php echo selected($testi_slide_duration, '3000' ); ?>>3000</option> 
				<option value="4000" <?php echo selected($testi_slide_duration, '4000' ); ?>>4000</option> 
				<option value="5000" <?php echo selected($testi_slide_duration, '5000' ); ?>>5000</option>
				<option value="6000" <?php echo selected($testi_slide_duration, '6000' ); ?>>6000</option> 
				<option value="7000" <?php echo selected($testi_slide_duration, '7000' ); ?>>7000</option>
				<option value="8000" <?php echo selected($testi_slide_duration, '8000' ); ?>>8000</option> 
			</select>
			<span class="explain"><?php _e('Select your Testimonial Slide Duration.','weblizar'); ?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Testimonial Slide Time Out Duration','weblizar'); ?></h3>
			<?php $testi_slide_timeoutduration = $wl_theme_options['testi_slide_timeoutduration']; ?>		
			<select name="testi_slide_timeoutduration" class="webriti_inpute" >					
				<option value="500"  <?php echo selected($testi_slide_timeoutduration, '500' ); ?>>500</option>
				<option value="1000" <?php echo selected($testi_slide_timeoutduration, '1000' ); ?>>1000</option>
				<option value="2000" <?php echo selected($testi_slide_timeoutduration, '2000' ); ?>>2000</option> 
				<option value="3000" <?php echo selected($testi_slide_timeoutduration, '3000' ); ?>>3000</option> 
				<option value="4000" <?php echo selected($testi_slide_timeoutduration, '4000' ); ?>>4000</option> 
				<option value="5000" <?php echo selected($testi_slide_timeoutduration, '5000' ); ?>>5000</option>
				<option value="6000" <?php echo selected($testi_slide_timeoutduration, '6000' ); ?>>6000</option> 
				<option value="7000" <?php echo selected($testi_slide_timeoutduration, '7000' ); ?>>7000</option>
				<option value="8000" <?php echo selected($testi_slide_timeoutduration, '8000' ); ?>>8000</option> 
			</select>
			<span class="explain"><?php _e('Select your Testimonial Slide Time Out Duration.','weblizar'); ?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Testimonial Slide Item','weblizar'); ?></h3>
			<?php  $testi_slide_item = $wl_theme_options['testi_slide_item']; ?>		
			<select name="testi_slide_item" class="webriti_inpute" >
				<option value="1"  <?php echo selected($testi_slide_item, '1' ); ?>>1</option>
				<option value="2"  <?php echo selected($testi_slide_item, '2' ); ?>>2</option>
				<option value="3"  <?php echo selected($testi_slide_item, '3' ); ?>>3</option>
				<option value="4"  <?php echo selected($testi_slide_item, '4' ); ?>>4</option>
				<option value="5"  <?php echo selected($testi_slide_item, '5' ); ?>>5</option>
			</select>
			<span class="explain"><?php _e('Select your Testimonial Slide Items.','weblizar'); ?></span>
		</div>
		<div class="section">
			<h3><?php _e('Testimonial Slide AutoPlay','weblizar'); ?></h3>
			<?php  $testi_slide_item_autoplay = $wl_theme_options['testi_slide_item_autoplay']; ?>		
			<select name="testi_slide_item_autoplay" class="webriti_inpute" >
				<option value="true"  <?php echo selected($testi_slide_item_autoplay, 'true' ); ?>>ON</option>
				<option value="false"  <?php echo selected($testi_slide_item_autoplay, 'false' ); ?>>OFF</option>
			</select>
			<span class="explain"><?php _e('Set Your Testimonial Slide Items AutoPlay.','weblizar'); ?></span>
		</div>
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_home-testi" name="weblizar_settings_save_home-testi" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-testi');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-testi')" >
			<!--  alert massage when data saved and reset -->
		</div>		
	</form>	
</div>

<!--------------- Client settings ------------>
<div class="block ui-tabs-panel deactive" id="option-home-client" >
	<form method="post" id="weblizar_theme_options_home-client">	
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Client Settings','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_home-client_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-client_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-client_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-client');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-client')" >
				</td>
				</tr>
			</table>			
		</div>
		
		<div class="section">			
			<h3><?php _e('Client Title','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="home_client_title" id="home_client_title"  value="<?php if($wl_theme_options['home_client_title']!='') { echo esc_attr($wl_theme_options['home_client_title']); } ?>" >	
			<span class="explain"><?php  _e('Type here your Cleint title','weblizar');?></span>			
		</div>
		
		<div class="section">
			<h3><?php _e('Client Slide Duration','weblizar'); ?></h3>
			<?php $client_slide_duration = $wl_theme_options['client_slide_duration']; ?>		
			<select name="client_slide_duration" class="webriti_inpute" >					
				<option value="500"  <?php echo selected($client_slide_duration, '500' ); ?>>500</option>
				<option value="1000" <?php echo selected($client_slide_duration, '1000' ); ?>>1000</option>
				<option value="2000" <?php echo selected($client_slide_duration, '2000' ); ?>>2000</option> 
				<option value="3000" <?php echo selected($client_slide_duration, '3000' ); ?>>3000</option> 
				<option value="4000" <?php echo selected($client_slide_duration, '4000' ); ?>>4000</option> 
				<option value="5000" <?php echo selected($client_slide_duration, '5000' ); ?>>5000</option>
				<option value="6000" <?php echo selected($client_slide_duration, '6000' ); ?>>6000</option> 
				<option value="7000" <?php echo selected($client_slide_duration, '7000' ); ?>>7000</option>
				<option value="8000" <?php echo selected($client_slide_duration, '8000' ); ?>>8000</option> 
			</select>
			<span class="explain"><?php _e('Select your Client Slide Duration.','weblizar'); ?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Client Slide Time Out Duration','weblizar'); ?></h3>
			<?php $client_slide_timeoutduration = $wl_theme_options['client_slide_timeoutduration']; ?>		
			<select name="client_slide_timeoutduration" class="webriti_inpute" >					
				<option value="500"  <?php echo selected($client_slide_timeoutduration, '500' ); ?>>500</option>
				<option value="1000" <?php echo selected($client_slide_timeoutduration, '1000' ); ?>>1000</option>
				<option value="2000" <?php echo selected($client_slide_timeoutduration, '2000' ); ?>>2000</option> 
				<option value="3000" <?php echo selected($client_slide_timeoutduration, '3000' ); ?>>3000</option> 
				<option value="4000" <?php echo selected($client_slide_timeoutduration, '4000' ); ?>>4000</option> 
				<option value="5000" <?php echo selected($client_slide_timeoutduration, '5000' ); ?>>5000</option>
				<option value="6000" <?php echo selected($client_slide_timeoutduration, '6000' ); ?>>6000</option> 
				<option value="7000" <?php echo selected($client_slide_timeoutduration, '7000' ); ?>>7000</option>
				<option value="8000" <?php echo selected($client_slide_timeoutduration, '8000' ); ?>>8000</option> 
			</select>
			<span class="explain"><?php _e('Select your Client Slide Time Out Duration.','weblizar'); ?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Client Slide Item','weblizar'); ?></h3>
			<?php  $client_slide_item = $wl_theme_options['client_slide_item']; ?>		
			<select name="client_slide_item" class="webriti_inpute" >					
				<option value="2"  <?php echo selected($client_slide_item, '2' ); ?>>2</option>
				<option value="3"  <?php echo selected($client_slide_item, '3' ); ?>>3</option>
				<option value="4"  <?php echo selected($client_slide_item, '4' ); ?>>4</option>
			</select>
			<span class="explain"><?php _e('Select your Client Slide Items.','weblizar'); ?></span>
		</div>
		<div class="section">
			<h3><?php _e('Client Slide Rotation','weblizar'); ?></h3>
			<?php  $client_slide_rotation = $wl_theme_options['client_slide_rotation']; ?>		
			<select name="client_slide_rotation" class="webriti_inpute" >					
				<option value="true"  <?php echo selected($client_slide_rotation, 'true' ); ?>>On</option>
				<option value="false"  <?php echo selected($client_slide_rotation, 'false' ); ?>>Off</option>
			</select>
			<span class="explain"><?php _e('Select your Client Slide Items.','weblizar'); ?></span>
		</div>
		
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_home-client" name="weblizar_settings_save_home-client" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-client');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-client')" >
			<!--  alert massage when data saved and reset -->
		</div>		
	</form>	
</div>

<!--------------- home-call-out settings ------------>
<div class="block ui-tabs-panel deactive" id="option-home-call-out" >
	<form method="post" id="weblizar_theme_options_home-call-out">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Call Out Settings','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_home-call-out_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-call-out_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-call-out_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-call-out');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-call-out')" >
				</td>
				</tr>
			</table>			
		</div>
		<div class="section">
			<h3><?php _e('Call Out Area Description','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="call_out_text" id="call_out_text"  value="<?php if($wl_theme_options['call_out_text']!='') { echo esc_attr($wl_theme_options['call_out_text']); } ?>" >	
			<span class="explain"><?php  _e('Type here your call out  Description','weblizar');?></span>
			
			<h3><?php _e('Button Text','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="call_out_button_text" id="call_out_button_text"  value="<?php if($wl_theme_options['call_out_button_text']!='') { echo esc_attr($wl_theme_options['call_out_button_text']); } ?>" >	
			<span class="explain"><?php  _e('Type here your call out Button Text ','weblizar');?> </span>
			
			<h3><?php _e('Button Link','weblizar'); ?></h3>
			<input type="checkbox" <?php if($wl_theme_options['call_out_button_target']=='on') echo "checked='checked'"; ?> id="call_out_button_target" name="call_out_button_target" > <span class="explain"><?php _e('Open link in a new window/tab.','weblizar'); ?></span><br><br>
			<input  class="weblizar_inpute" type="text" name="call_out_link" id="call_out_link"  value="<?php if($wl_theme_options['call_out_link']!='') { echo esc_attr($wl_theme_options['call_out_link']); } ?>" >	
			<span class="explain"><?php  _e('Type here your call out area button link','weblizar');?></span>
		</div>	
		
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_home-call-out" name="weblizar_settings_save_home-call-out" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-call-out');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-call-out')" >
			<!--  alert massage when data saved and reset -->
		</div>
	</form>	
</div>

<!--------------- Skin Layout settings ------------>
<div class="block ui-tabs-panel deactive" id="option-skin-layout" >
	<form method="post" id="weblizar_theme_options_skin-layout">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Skin Layout Settings','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_skin-layout_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_skin-layout_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_skin-layout_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('skin-layout');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('skin-layout')" >
				</td>
				</tr>
			</table>			
		</div>
		<div class="section">
			<h3><?php _e('Theme Color Schemes','weblizar'); ?></h3>
			<?php $stylesheet = $wl_theme_options['style_sheet']; ?>
			<div style="background-color: rgb(52, 152, 219);" data-skinname="flat-blue" class="predefined-skins flat-blue" title="flat-blue"></div>			
			<select id="style_sheet" name="style_sheet" class="webriti_inpute">
				<option <?php echo selected($stylesheet, 'default.css' ); ?> value="default.css"  ><?php _e('Default','weblizar'); ?></option>
				<option <?php echo selected($stylesheet, 'blue.css' ); ?> value="blue.css" ><?php _e('Blue','weblizar'); ?></option>
				<option <?php echo selected($stylesheet, 'green.css' ); ?> value="green.css" ><?php _e('Green','weblizar'); ?></option>
				<option <?php echo selected($stylesheet, 'red.css' ); ?> value="red.css" ><?php _e('Red','weblizar'); ?></option>
				<option <?php echo selected($stylesheet, 'pink.css' ); ?> value="pink.css" ><?php _e('Pink','weblizar'); ?></option>
				<option <?php echo selected($stylesheet, 'orange.css' ); ?> value="orange.css" ><?php _e('Orange','weblizar'); ?></option>				
				<option <?php echo selected($stylesheet, 'brown.css' ); ?> value="brown.css" ><?php _e('Brown','weblizar'); ?></option>
				<option <?php echo selected($stylesheet, 'purple.css' ); ?> value="purple.css" ><?php _e('Purple','weblizar'); ?></option>
				<option <?php echo selected($stylesheet, 'skyblue.css' ); ?> value="skyblue.css" ><?php _e('Sky-Blue','weblizar'); ?></option>
				<option <?php echo selected($stylesheet, 'litered.css' ); ?> value="litered.css"  ><?php _e('Litered','weblizar'); ?></option>
			</select><span class="explain"><?php _e('Select color for you theme.','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Custom Color Schemes','weblizar');?></h3>
			<input type="checkbox" <?php if($wl_theme_options['custom_color_enbled']=='on') echo "checked='checked'"; ?> id="custom_color_enbled" name="custom_color_enbled" >
			<span class="explain"><?php _e('Enable Custom color Schemes and set your color Schemes using color picker','weblizar');?>.</span>
			<br><br>
			<div class="color-picker" style="position: relative;">
				<input type="text" name="weblizar_custom_color" id="color" value="<?php echo $wl_theme_options['weblizar_custom_color']; ?>" />
				<div style="position: absolute;" id="colorpicker"></div>
			</div>	
		</div>
		<div class="section">
			<h3><?php _e('Header Position','weblizar');?></h3>
			<?php $header_position =$wl_theme_options['header_position']; ?>
			<select id="header_position" name="header_position" class="webriti_inpute">
				<option <?php echo selected($header_position, 'fixed' ); ?> value="fixed" ><?php _e('Fixed','weblizar'); ?></option>
				<option <?php echo selected($header_position, 'static' ); ?> value="static" ><?php _e('Static','weblizar'); ?></option>
			</select><span class="explain"><?php _e('With the Help of Fixed Header you can show sites Header','weblizar');?></span>			
		</div>
		<div class="section">
			<h3><?php _e('Theme Layout','weblizar');?></h3>
			<?php $layout_selector =$wl_theme_options['layout_selector']; ?>
			<select id="layout_selector" name="layout_selector" class="webriti_inpute">
				<option <?php echo selected($layout_selector, 'wide' ); ?> ><?php _e('wide','weblizar'); ?></option>
				<option <?php echo selected($layout_selector, 'boxed' ); ?> ><?php _e('boxed','weblizar'); ?></option>
			</select>
			<span class="explain"><?php _e('With the Help of box layout you can show sites background','weblizar');?></span>			
		</div>
		<div class="section">
			<h3><?php _e('Custom background ','weblizar');?></h3>
			<hr>
			<p><?php $back_image = $wl_theme_options['back_image']; ?>
			<input id="radio1" 	<?php if($back_image == "bg_img1") { echo "checked"; } ?> type="radio" name="back_image" value="bg_img1">
			<label for="radio1" <?php if($back_image == "bg_img1") { echo "checked"; } ?> ><img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/images/bg-patterns/bg_img1.png" id="custom_back_image" ></label>
			<input  id="radio2" <?php if($back_image == "bg_img2") { echo "checked"; } ?> type="radio" name="back_image" value="bg_img2">
			<label for="radio2" <?php if($back_image == "bg_img2") { echo "checked"; } ?> ><img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/images/bg-patterns/bg_img2.png" id="custom_back_image" ></label>
			<input  id="radio3" <?php if($back_image == "bg_img3") { echo "checked"; } ?> type="radio" name="back_image" value="bg_img3">
			<label for="radio3" <?php if($back_image == "bg_img3") { echo "checked"; } ?> ><img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/images/bg-patterns/bg_img3.png" id="custom_back_image" ></label>
			<input id="radio4" 	<?php if($back_image == "bg_img4") { echo "checked"; } ?> type="radio" name="back_image" value="bg_img4">
			<label for="radio4" <?php if($back_image == "bg_img4") { echo "checked"; } ?> ><img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/images/bg-patterns/bg_img4.png" id="custom_back_image" ></label>
			<input  id="radio5" <?php if($back_image == "bg_img5") { echo "checked"; } ?> type="radio" name="back_image" value="bg_img5">
			<label for="radio5" <?php if($back_image == "bg_img5") { echo "checked"; } ?> ><img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/images/bg-patterns/bg_img5.png" id="custom_back_image" ></label>
			<br><br>
			<input id="radio6" 	<?php if($back_image == "bg_img6") { echo "checked"; } ?> type="radio" name="back_image" value="bg_img6">
			<label for="radio6" <?php if($back_image == "bg_img6") { echo "checked"; } ?> ><img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/images/bg-patterns/bg_img6.png" id="custom_back_image" ></label>
			<input  id="radio7" <?php if($back_image == "bg_img7") { echo "checked"; } ?> type="radio" name="back_image" value="bg_img7">
			<label for="radio7" <?php if($back_image == "bg_img7") { echo "checked"; } ?> ><img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/images/bg-patterns/bg_img7.png" id="custom_back_image" ></label>
			<input  id="radio8" <?php if($back_image == "bg_img8") { echo "checked"; } ?> type="radio" name="back_image" value="bg_img8">
			<label for="radio8" <?php if($back_image == "bg_img8") { echo "checked"; } ?> ><img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/images/bg-patterns/bg_img8.png" id="custom_back_image" ></label>
			<input id="radio9" 	<?php if($back_image == "bg_img9") { echo "checked"; } ?> type="radio" name="back_image" value="bg_img9">
			<label for="radio9" <?php if($back_image == "bg_img9") { echo "checked"; } ?> ><img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/images/bg-patterns/bg_img9.png" id="custom_back_image" ></label>
			<input  id="radio10" <?php if($back_image == "bg_img10") { echo "checked"; } ?> type="radio" name="back_image" value="bg_img10">
			<label for="radio10" <?php if($back_image == "bg_img10") { echo "checked"; } ?> ><img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/images/bg-patterns/bg_img10.png" id="custom_back_image" ></label>
			<br><br>
			<input id="radio11"  <?php if($back_image == "bg_img11") { echo "checked"; } ?> type="radio" name="back_image" value="bg_img11">
			<label for="radio11" <?php if($back_image == "bg_img11") { echo "checked"; } ?> ><img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/images/bg-patterns/bg_img11.png" id="custom_back_image" ></label>
			<input  id="radio12" <?php if($back_image == "bg_img12") { echo "checked"; } ?> type="radio" name="back_image" value="bg_img12">
			<label for="radio12" <?php if($back_image == "bg_img12") { echo "checked"; } ?> ><img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/images/bg-patterns/bg_img12.png" id="custom_back_image" ></label>
			<input  id="radio13" <?php if($back_image == "bg_img13") { echo "checked"; } ?> type="radio" name="back_image" value="bg_img13">
			<label for="radio13" <?php if($back_image == "bg_img13") { echo "checked"; } ?> ><img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/images/bg-patterns/bg_img13.png" id="custom_back_image" ></label>
			<input id="radio14"  <?php if($back_image == "bg_img14") { echo "checked"; } ?> type="radio" name="back_image" value="bg_img14">
			<label for="radio14" <?php if($back_image == "bg_img14") { echo "checked"; } ?> ><img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/images/bg-patterns/bg_img14.png" id="custom_back_image" ></label>
			<input  id="radio15" <?php if($back_image == "bg_img5") { echo "checked"; } ?> type="radio" name="back_image" value="bg_img15">
			<label for="radio15" <?php if($back_image == "bg_img5") { echo "checked"; } ?> ><img src="<?php echo WL_TEMPLATE_DIR_URI; ?>/images/bg-patterns/bg_img15.png" id="custom_back_image" ></label>
			<p/>			
		</div>
		<div class="section">
			<h3><?php _e('WordPress Custom Background','weblizar');?></h3>			
			<input type="checkbox" <?php if($wl_theme_options['layout_type']=='on') echo "checked='checked'"; ?> id="layout_type" name="layout_type" >
			<span class="explain"><?php _e('Enable Custom Background .Set background','weblizar');?> <a href="<?php echo home_url( '/' ); ?>wp-admin/themes.php?page=custom-background"><?php _e('Click Here','weblizar');?></a>.</span>
		</div>
		
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_skin-layout" name="weblizar_settings_save_skin-layout" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('skin-layout');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('skin-layout')" >
			<!--  alert massage when data saved and reset -->
		</div>
	</form>	
</div>


<!--------------- contact Details settings ------------>
<div class="block ui-tabs-panel deactive" id="option-contact-details" >
	<form method="post" id="weblizar_theme_options_contact-details">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Contact Details','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_contact-details_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_contact-details_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_contact-details_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('contact-details');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('contact-details')" >
				</td>
				</tr>
			</table>			
		</div>
		<div class="section">
			<h3><?php _e('Contact Heading','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="contact_heading" id="contact_heading"  value="<?php if($wl_theme_options['contact_heading']!='') { echo esc_attr($wl_theme_options['contact_heading']); } ?>" >	
			<span class="explain"><?php  _e('Type here your contact Heading','weblizar');?></span>
			
			<h3><?php _e('Contact Description','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="contact_description" id="contact_description"  value="<?php if($wl_theme_options['contact_description']!='') { echo esc_attr($wl_theme_options['contact_description']); } ?>" >	
			<span class="explain"><?php  _e('Type here your contactPage Heading','weblizar');?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Phone Number Text','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="phone_number_text" id="phone_number_text"  value="<?php if($wl_theme_options['phone_number_text']!='') { echo esc_attr($wl_theme_options['phone_number_text']); } ?>" >	
			<span class="explain"><?php  _e('Type here your contact Phone number text','weblizar');?></span>
			
			<h3><?php _e('Phone Number','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="contact_phone_no" id="contact_phone_no"  value="<?php if($wl_theme_options['contact_phone_no']!='') { echo esc_attr($wl_theme_options['contact_phone_no']); } ?>" >	
			<span class="explain"><?php  _e('Type here your contact Phone number','weblizar');?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Email Address Text','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="general_info_text" id="general_info_text"  value="<?php if($wl_theme_options['general_info_text']!='') { echo esc_attr($wl_theme_options['general_info_text']); } ?>" >	
			<span class="explain"><?php  _e('Type here your Contact Email Address Text','weblizar');?></span>
			
			<h3><?php _e('Email Address','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="contact_email" id="contact_email"  value="<?php if($wl_theme_options['contact_email']!='') { echo esc_attr($wl_theme_options['contact_email']); } ?>" >	
			<span class="explain"><?php  _e('Type here your contact Email address','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Office Time Label','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="work_time_text" id="work_time_text"  value="<?php if($wl_theme_options['work_time_text']!='') { echo esc_attr($wl_theme_options['work_time_text']); } ?>" >	
			<span class="explain"><?php  _e('Type here Office Timings','weblizar');?></span>
			
			<h3><?php _e('Office Time In Hours','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="work_time" id="work_time"  value="<?php if($wl_theme_options['work_time']!='') { echo esc_attr($wl_theme_options['work_time']); } ?>" >	
			<span class="explain"><?php  _e('Type here Office Time In Hours','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Contact Address Text','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="where_we_are_text" id="where_we_are_text"  value="<?php if($wl_theme_options['where_we_are_text']!='') { echo esc_attr($wl_theme_options['where_we_are_text']); } ?>" >	
			<span class="explain"><?php  _e('Type here your contact address text','weblizar');?></span>
		
		
			<h3><?php _e('Contact Address','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="contact_address" id="contact_address"  value="<?php if($wl_theme_options['contact_address']!='') { echo esc_attr($wl_theme_options['contact_address']); } ?>" >	
			<span class="explain"><?php  _e('Type here your contact address','weblizar');?></span>
		
		</div>		
		
		
		<div class="section">
			<h3><?php _e('Google Maps Url','weblizar'); ?></h3>
			<input type="checkbox" <?php if($wl_theme_options['google_map_on_contact']=='on') echo "checked='checked'"; ?> id="google_map_on_contact" name="google_map_on_contact" > <span class="explain"><?php _e('Enable Google map in contact section.','weblizar'); ?></span>
			<br><br>
			<input  class="weblizar_inpute" type="text" name="google_maps" id="google_maps"  value="<?php if($wl_theme_options['google_maps']!='') { echo esc_attr($wl_theme_options['google_maps']); } ?>" >	
			<span class="explain"><?php  _e('Type here your Google map url','weblizar');?></span>		
		</div>
		<div class="section">
			<input type="hidden" value="1" id="weblizar_settings_save_contact-details" name="weblizar_settings_save_contact-details" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('contact-details');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('contact-details')" >
		</div>
	</form>	
</div>

<!-------- Social media link settings ----------->
<div class="block ui-tabs-panel deactive" id="option-social" >	
	<form method="post" id="weblizar_theme_options_social">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td><h2><?php _e('Social media','weblizar');?></h2></td>
					<td style="width:30%;">
						<div class="weblizar_settings_loding" id="weblizar_loding_social_image"></div>
						<div class="weblizar_settings_massage" id="weblizar_settings_save_social_success" ><?php _e('Options Data updated','weblizar');?></div>
						<div class="weblizar_settings_massage" id="weblizar_settings_save_social_reset" ><?php _e('Options data Reset','weblizar');?></div>
					</td>
					<td style="text-align:right;">					
						<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('social');">
						<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('social')" >
					</td>
				</tr>
			</table>	
		</div>		
		<div class="section">
			<h3><?php _e('Enable Social media:','weblizar');  ?>  </h3>
			<input type="checkbox" <?php if($wl_theme_options['header_section_social_media_enbled']=='on') echo "checked='checked'"; ?> id="header_section_social_media_enbled" name="header_section_social_media_enbled" > <span class="explain"><?php _e('Enable social media on Header .','weblizar'); ?></span>
			<input type="checkbox" <?php if($wl_theme_options['footer_section_social_media_enbled']=='on') echo "checked='checked'"; ?> id="footer_section_social_media_enbled" name="footer_section_social_media_enbled" > <span class="explain"><?php _e('Enable Social media in Footer .','weblizar'); ?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Twitter Link:','weblizar');?></h3>
			<input class="weblizar_inpute"  type="text" name="twitter_link" id="twitter_link" value="<?php if($wl_theme_options['twitter_link']!='') { echo esc_attr($wl_theme_options['twitter_link']); } ?>" >
			<span class="explain"><?php  _e('Enter twitter link.','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Linkedin Links:','weblizar');?></h3>
			<input class="weblizar_inpute"  type="text" name="linkedin_link" id="linkedin_link" value="<?php if($wl_theme_options['linkedin_link']!='') { echo esc_attr($wl_theme_options['linkedin_link']); } ?>" >
			<span class="explain"><?php  _e('Enter linkedin link.','weblizar');?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Facebook Links:','weblizar');?></h3>
			<input class="weblizar_inpute"  type="text" name="facebook_link" id="facebook_link" value="<?php if($wl_theme_options['facebook_link']!='') { echo esc_attr($wl_theme_options['facebook_link']); } ?>" >
			<span class="explain"><?php  _e('Enter facebook link.','weblizar');?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Google Plus Links:','weblizar');?></h3>
			<input class="weblizar_inpute"  type="text" name="google_plus" id="google_plus" value="<?php if($wl_theme_options['google_plus']!='') { echo esc_attr($wl_theme_options['google_plus']); } ?>" >
			<span class="explain"><?php  _e('Enter google plus link.','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Dribble Links:','weblizar');?></h3>
			<input class="weblizar_inpute"  type="text" name="dribble_link" id="dribble_link" value="<?php if($wl_theme_options['dribble_link']!='') { echo esc_attr($wl_theme_options['dribble_link']); } ?>" >
			<span class="explain"><?php  _e('Enter Dribble link.','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('You-tube Links:','weblizar');?></h3>
			<input class="weblizar_inpute"  type="text" name="youtube_link" id="youtube_link" value="<?php if($wl_theme_options['youtube_link']!='') { echo esc_attr($wl_theme_options['youtube_link']); } ?>" >
			<span class="explain"><?php  _e('Enter You-tube link.','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Flicker Links:','weblizar');?></h3>
			<input class="weblizar_inpute"  type="text" name="flicker_link" id="flicker_link" value="<?php if($wl_theme_options['flicker_link']!='') { echo esc_attr($wl_theme_options['flicker_link']); } ?>" >
			<span class="explain"><?php  _e('Enter flicker link.','weblizar');?></span>
		</div>
		
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_social" name="weblizar_settings_save_social" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('social');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('social')" >
		</div>
	</form>
</div>

<!---------------- footer customization Settings form ------------------------>
<div class="block ui-tabs-panel deactive" id="option-footer" >
	<form method="post" id="weblizar_theme_options_footer">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Footer Customization','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_footer_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_footer_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_footer_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('footer');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('footer')" >
				</td>
				</tr>
			</table>			
		</div>	
		<div class="section">
			<h3><?php _e('Footer customization','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="footer_customizations" id="footer_customizations"  value="<?php if($wl_theme_options['footer_customizations']!='') { echo esc_attr($wl_theme_options['footer_customizations']); } ?>" >	
			<span class="explain"><?php  _e('Enter your footer customization text ','weblizar');?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Developed by text','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="developed_by_text" id="developed_by_text"  value="<?php if($wl_theme_options['developed_by_text']!='') { echo esc_attr($wl_theme_options['developed_by_text']); } ?>" >	
			<span class="explain"><?php  _e('Enter developed by text','weblizar');?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Developed by link text','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="developed_by_weblizar_text" id="developed_by_weblizar_text"  value="<?php if($wl_theme_options['developed_by_weblizar_text']!='') { echo esc_attr($wl_theme_options['developed_by_weblizar_text']); } ?>" >	
			<span class="explain"><?php  _e('Enter developed by link text  ','weblizar');?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Developed by link','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="developed_by_link" id="developed_by_link"  value="<?php if($wl_theme_options['developed_by_link']!='') { echo esc_attr($wl_theme_options['developed_by_link']); } ?>" >	
			<span class="explain"><?php  _e('Enter developed by link','weblizar');?></span>
		</div>			
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_footer" name="weblizar_settings_save_footer" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('footer');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('footer')" >
		</div>
	</form>	
</div>
<div class="block ui-tabs-panel deactive" id="option-csmode" >	
	<form method="post" id="weblizar_theme_options_csmode">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Maintenance Mode','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_csmode_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_csmode_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_csmode_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('csmode');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('csmode')" >
				</td>
				</tr>
			</table>			
		</div>		
		<div class="section">
			<h3><?php _e('Enable Maintenance Mode','weblizar'); ?></h3>
			<input type="checkbox" <?php if($wl_theme_options['coming_soon']=='on') echo "checked='checked'"; ?> id="coming_soon" name="coming_soon" > <span class="explain"><?php _e('Enable Maintainence Mode on Site.','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Title of the Page','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="coming_soon_heading" id="coming_soon_heading"  value="<?php echo $wl_theme_options['coming_soon_heading']; ?>" >	
			<span class="explain"><?php  _e('Add your Heading for this Page','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Add Text Description','weblizar'); ?></h3>
			<textarea rows="8" cols="8" id="coming_soon_desc" name="coming_soon_desc" ><?php if($wl_theme_options['coming_soon_desc']!='') { echo esc_attr($wl_theme_options['coming_soon_desc']); } ?></textarea>
			<div class="explain"><?php _e('Add description for the Maintenance Mode Ready Page ','weblizar'); ?><br></div>
		</div>	
		<div class="section">
			<h3><?php _e('Coming Soon Image','weblizar'); ?></h3>
			<input class="weblizar_inpute" type="text" value="<?php if($wl_theme_options['coming_soon_img']!='') { echo esc_attr($wl_theme_options['coming_soon_img']); } ?>" id="coming_soon_img" name="coming_soon_img" size="36" class="upload has-file"/>
			<input type="button" id="upload_button" value="Add Image" class="upload_image_button" />
			<span class="explain"><?php _e('Add Image for Maintenance Mode Ready Page','weblizar');?></span>	
			<?php if($wl_theme_options['coming_soon_img']!='') { ?>
			<p><img style="height:450px;width:822px;margin:12px;" src="<?php if($wl_theme_options['coming_soon_img']!='') { echo esc_attr($wl_theme_options['coming_soon_img']); } ?>" /></p>
			<?php } ?>
		</div>		
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_csmode" name="weblizar_settings_save_csmode" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('csmode');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('csmode')" >
		</div>
	</form>	
</div>

<!---------------- Custome Link Settings form ------------------------>
<div class="block ui-tabs-panel deactive" id="option-cptname" >
	<form method="post" id="weblizar_theme_options_cptname">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Custom Links for Slider , Services , Portfolio','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_cptname_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_cptname_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_cptname_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('cptname');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('cptname')" >
				</td>
				</tr>
			</table>			
		</div>	
		<div class="section">
			<h3><?php _e('Slider - Custom Link','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="cpt_slider" id="cpt_slider"  value="<?php if($wl_theme_options['cpt_slider']!='') { echo esc_attr($wl_theme_options['cpt_slider']); } ?>" >	
			<span class="explain"><?php  _e('Enter your custom links for SLIDER ','weblizar');?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Service - Custom Link','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="cpt_service" id="cpt_service"  value="<?php if($wl_theme_options['cpt_service']!='') { echo esc_attr($wl_theme_options['cpt_service']); } ?>" >	
			<span class="explain"><?php  _e('Enter your custom links for SERVICES ','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Portfolio - Custom Link','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="cpt_portfolio" id="cpt_portfolio"  value="<?php if($wl_theme_options['cpt_portfolio']!='') { echo esc_attr($wl_theme_options['cpt_portfolio']); } ?>" >	
			<span class="explain"><?php  _e('Enter your custom links for PORTFOLIO ','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Testimonial - Custom Link','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="cpt_testimonial" id="cpt_testimonial"  value="<?php if($wl_theme_options['cpt_testimonial']!='') { echo esc_attr($wl_theme_options['cpt_testimonial']); } ?>" >	
			<span class="explain"><?php  _e('Enter your custom links for Testimonial ','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Client - Custom Link','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="cpt_client" id="cpt_client"  value="<?php if($wl_theme_options['cpt_client']!='') { echo esc_attr($wl_theme_options['cpt_client']); } ?>" >	
			<span class="explain"><?php  _e('Enter your custom links for Client ','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Team - Custom Link','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="cpt_team" id="cpt_team"  value="<?php if($wl_theme_options['cpt_team']!='') { echo esc_attr($wl_theme_options['cpt_team']); } ?>" >	
			<span class="explain"><?php  _e('Enter your custom links for Team ','weblizar');?></span>
		</div>
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_cptname" name="weblizar_settings_save_cptname" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('cptname');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('cptname')" >
		</div>
	</form>	
</div>
<!--------- layout manger  ------------->
<div class="block ui-tabs-panel deactive" id="option-layoutmanger" >	
	<form method="post" id="weblizar_theme_options_layoutmanger">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Home Layout Manager');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_layoutmanger_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_layoutmanger_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_layoutmanger_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('layoutmanger');">
					<input class="button button-primary" type="button" value="Save Options" id="weblizar_home_layout_save_button" >
				</td>
				</tr>
			</table>			
		</div>	
		<div class="section">
			<table  class="form-table">						
				<div class="dhe-example-section-content">
					<div id="weblizar_home_page">
						<div class="column left first">
							<font color="#333333" size="+2"> <?php _e('Disabled','weblizar');?></font><p></p>							
							<div class="sortable-list" id="disable">
								<?php 	
									$data = $wl_theme_options['home_page_layout'];									
									$home_page_data=array('extra','service','portfolio','blog','testimonial','client');
									$todisable=array_diff($home_page_data, $data);
									if($todisable != '')
									{	foreach($todisable as $value)
										{ ?>
											<div class="sortable-item" id="<?php echo $value ?>">
											<?php echo ucfirst($value); ?>
											</div>
								<?php 	}		 
									} ?>
							</div>
						</div>
						<div class="column left">
							<font color="#333333" size="+2"> <?php _e('Enabled','weblizar'); ?></font><p></p>
							<div class="sortable-list" id="enable">
								<?php 
								$enable =$wl_theme_options['home_page_layout'];								
								if($enable[0]!="")
								{	foreach($enable as $value)
									{ ?>
										<div class="sortable-item" id="<?php echo $value ?>">
										<?php  echo ucfirst($value); ?>
										</div> <?php 
									} 
								}								
								?>
							</div>
						</div>
					</div>			
				</div><!--end redify_frontpage--->
			</table>				
		</div>
		<div class="section">
		<p> <b><?php _e('Weblizar Slider will always remain top of the Home page','weblizar'); ?></b></p>
		<p> <b><?php _e('Note:','weblizar'); ?> </b> <?php _e('By default all the section are enable on Home Page. If you want to disable any section just drag this section to the disabled box.','weblizar'); ?><p>
		</div>
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_layoutmanger" name="weblizar_settings_save_layoutmanger" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" >
			<input class="button button-primary" type="button" value="Save Options" id="weblizar_home_layout_save" >
		</div>
	</form>
	<script type="text/javascript">
			jQuery(document).ready(function(){	
				//drag drop tabs
				jQuery('#weblizar_home_page .sortable-list').sortable({ connectWith: '#weblizar_home_page .sortable-list' });	
				
				// Get items id you can chose
				function weblizartems(weblizar)
				{
					var columns = [];
					jQuery(weblizar + ' div.sortable-list').each(function(){
						columns.push(jQuery(this).sortable('toArray').join(','));
					});
					return columns.join('|');
				}
				
				//onclick check id
				jQuery('#weblizar_home_layout_save').click(function(){ 
					var data = weblizartems('#weblizar_home_page');		
					var dataStringfirst = 'weblizar_home_data='+ data;
					
					jQuery('#weblizar_loding_layoutmanger_image').show();				 
					var url = '?page=weblizar';				 
						jQuery.ajax({
							dataType : 'html',
							type: 'POST',
							url : url,
							data : dataStringfirst,
							complete : function() {  },
							success: function(data) 
							{	jQuery('#weblizar_loding_layoutmanger_image').fadeOut();
								jQuery("#weblizar_settings_save_layoutmanger_success").show();
								jQuery("#weblizar_settings_save_layoutmanger_success").fadeOut(5000);
							}
					});
				});
				jQuery('#weblizar_home_layout_save_button').click(function(){ 
					var data = weblizartems('#weblizar_home_page');		
					var dataStringfirst = 'weblizar_home_data='+ data;
					
					jQuery('#weblizar_loding_layoutmanger_image').show();				 
					var url = '?page=weblizar';				 
						jQuery.ajax({
							dataType : 'html',
							type: 'POST',
							url : url,
							data : dataStringfirst,
							complete : function() {  },
							success: function(data) 
							{	jQuery('#weblizar_loding_layoutmanger_image').fadeOut();
								jQuery("#weblizar_settings_save_layoutmanger_success").show();
								jQuery("#weblizar_settings_save_layoutmanger_success").fadeOut(5000);
							}
					});
				});				
			});
			</script>
			<?php 
			if(isset($_POST['weblizar_settings_save_layoutmanger']))
			{	if($_POST['weblizar_settings_save_layoutmanger'] == 2) 
				{
					$wl_theme_options['home_page_layout']=array('service','portfolio','blog','testimonial','client');
					update_option('enigma_options_pro', $wl_theme_options);
				}
			}
			
			if(isset($_POST['weblizar_home_data']))
			{
				if($_POST['weblizar_home_data'] ) 
				{		
					/*send data hold*/
					$datashowredify = $_POST['weblizar_home_data'];
					$hold = strstr($datashowredify,'|');
					$datashowredify = str_replace('|', '' ,$hold);				
					$data = explode(",",$datashowredify);				
					/*data save*/
					$wl_theme_options['home_page_layout']=$data;
					/*update all field*/
					update_option('enigma_options_pro' , $wl_theme_options);				
				}
			}
		?>
</div>