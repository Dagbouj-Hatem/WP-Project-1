<div class="enigma_client_area">
<?php $wl_theme_options=get_option('enigma_options_pro');
if($wl_theme_options['home_client_title'] !='') { ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="enigma_heading_title2 ">
					<h3 class="pull-left"><?php echo $wl_theme_options['home_client_title']; ?></h3>
					<div class="enigma_client_navi">
						<div id="client-prev" class="enigma_client_prev" ><i class="fa fa-arrow-left"></i></div>
						<div id="client-next" class="enigma_client_next" ><i class="fa fa-arrow-right"></i></div>
					</div>	
				</div>
				
			</div>
		</div>
	</div>
	<?php } ?>
	<div class="container">		
		<div class="row" id="enigma_client_section">
		<?php $all_posts = wp_count_posts( 'weblizar_client')->publish;		
		$args = array( 'post_type' => 'weblizar_client','posts_per_page' =>$all_posts); 	
		$portfolio = new WP_Query( $args );		 
		if( $portfolio->have_posts() )
		{ while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>
			<div class="col-lg-3 col-sm-3 col-md-3 pull-left scrollimation fade-left d1">			
				<div class="enigma_client_wrapper">
				<a href="<?php echo get_post_meta( get_the_ID(),'client_button_link', true ) ?>" <?php if(get_post_meta( get_the_ID(), 'client_button_target', true )) { echo "target='_blank'"; } ?>>
					<?php $default=array('class' => "img-responsive");
					if(has_post_thumbnail()): 
					the_post_thumbnail('home_clientel_thumb',$default);
					endif; ?>
				</a>					
				</div>				
			</div>		
		<?php endwhile;
		} else { ?>
			<div class="col-lg-3 col-md-3 pull-left scrollimation fade-left d1">
				<div class="enigma_client_wrapper">
					<img class="img-responsive" src="<?php echo WL_TEMPLATE_DIR_URI ?>/images/clients/photo(1).jpg">
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 pull-left scrollimation fade-left d1">
				<div class="enigma_client_wrapper">
					<img class="img-responsive" src="<?php echo WL_TEMPLATE_DIR_URI ?>/images/clients/photo(2).jpg">
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 pull-left scrollimation fade-left d1">
				<div class="enigma_client_wrapper">
					<img class="img-responsive" src="<?php echo WL_TEMPLATE_DIR_URI ?>/images/clients/photo(3).jpg">
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 pull-left scrollimation fade-left d1">
				<div class="enigma_client_wrapper">
					<img class="img-responsive" src="<?php echo WL_TEMPLATE_DIR_URI ?>/images/clients/photo(4).jpg">
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 pull-left scrollimation fade-up d1">
				<div class="enigma_client_wrapper">
					<img class="img-responsive" src="<?php echo WL_TEMPLATE_DIR_URI ?>/images/clients/photo(5).jpg">
				</div>
			</div>
			
			<div class="col-md-3 col-md-3 pull-left">
				<div class="enigma_client_wrapper">
					<img class="img-responsive" src="<?php echo WL_TEMPLATE_DIR_URI ?>/images/clients/photo(6).jpg">
				</div>
			</div>
		<?php } ?>	
		</div>		
	</div>
</div>