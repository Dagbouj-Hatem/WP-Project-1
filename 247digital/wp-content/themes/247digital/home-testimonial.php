<!-- Testimonial  section -->	
<div class="enigma_testimonial_area">
<?php $wl_theme_options=get_option('enigma_options_pro'); 
if($wl_theme_options['home_testi_title'] !='') { ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="enigma_heading_title">
					<h3><?php echo $wl_theme_options['home_testi_title']; ?></h3>		
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<div class="container">
		<div class="row " id="enigma_testimonial_section">
		<?php $all_posts = wp_count_posts( 'weblizar_testimonial')->publish;		
		$args = array( 'post_type' => 'weblizar_testimonial','posts_per_page' =>$all_posts); 	
		$testimonial = new WP_Query( $args );		 
		if( $testimonial->have_posts() )
		{ while ( $testimonial->have_posts() ) : $testimonial->the_post(); ?>
		
		<div class="col-md-3 enigma_testimonial pull-left scrollimation scale-in d2">
			<i class="fa fa-quote-left"></i>
			<p><?php echo get_post_meta( get_the_ID(),'description_meta_save', true ); ?></p>
			<?php if(has_post_thumbnail()): 
			the_post_thumbnail('home_test_thumb'); 
			endif; ?>
			<h3><?php the_title(); ?></h3>
			<span>( <?php echo get_post_meta( get_the_ID(),'designation_meta_save', true ); ?> )</span>
		</div>
		<?php endwhile;
		} else { ?>
		<div class="col-md-3 enigma_testimonial pull-left scrollimation scale-in d2">
				<img src="<?php echo WL_TEMPLATE_DIR_URI ?>/images/member3.jpg" >
			<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
			<h3>John Doe</h3><span>( Hr Manager )</span>
		</div>
		<div class="col-md-3 enigma_testimonial pull-left scrollimation scale-in d2">
				<img src="<?php echo WL_TEMPLATE_DIR_URI ?>/images/member3.jpg" >
			<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
			<h3>John Doe</h3><span>( Hr Manager )</span>
		</div>
		<div class="col-md-3 enigma_testimonial pull-left scrollimation scale-in d2">
			<img src="<?php echo WL_TEMPLATE_DIR_URI ?>/images/member3.jpg" >
			<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
			<h3>John Doe</h3><span>( Hr Manager )</span>
		</div>
		<?php } ?>	
		</div>
		<div class="row">
			<div id="pager2" class="pager testi-pager"></div>
		</div>	
	</div>

</div>
<!-- /Testimonial  section -->