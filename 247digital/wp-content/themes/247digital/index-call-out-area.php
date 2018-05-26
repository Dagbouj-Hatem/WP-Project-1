<!-- enigma Callout Section -->
<div class="enigma_callout_area">
	<?php  $wl_theme_options = get_option('enigma_options_pro'); ?>
	<div class="container">
		<div class="row">
			<?php if($wl_theme_options['call_out_text']!='') ?>
			<div class="col-md-9">
				<p><i class="fa fa-thumbs-up"></i><?php echo $wl_theme_options['call_out_text']; ?></p>
			</div>
			<?php } ?>			
			<?php if($wl_theme_options['call_out_button_text']!='') ?>
			<div class="col-md-3">
				<a href="<?php if($wl_theme_options['call_out_link']!='') { echo $wl_theme_options['call_out_link']; } ?>" class="enigma_callout_btn" <?php if($wl_theme_options['call_out_button_target']=='on') { echo "target='_blank'"; } ?> ><?php echo $wl_theme_options['call_out_button_text']; ?> </a>
			</div>
			<?php } ?>
		</div>
		
	</div>
	<div class="enigma_callout_shadow"></div>
</div>
<!-- /enigma Callout Section -->