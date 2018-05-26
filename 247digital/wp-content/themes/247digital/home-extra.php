<div class="feature_section1">
	<div class="container">	
		<?php $wl_theme_options=get_option('enigma_options_pro'); 
		echo apply_filters('the_content', html_entity_decode($wl_theme_options['extra_home_text']), true); 
		?>		
	</div>
</div><!-- end features section1 -->
<div class="clearfix"></div>