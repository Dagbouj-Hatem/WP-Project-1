<?php //Template Name: Service Type-1
get_header(); 
get_template_part('breadcrums'); ?>
<div class="container">
		<div class="row isotope" id="isotope-service-container">
		<?php $all_posts = wp_count_posts( 'weblizar_service')->publish;		
		$args = array( 'post_type' => 'weblizar_service','posts_per_page' =>$all_posts); 	
		$service = new WP_Query( $args ); 
		if( $service->have_posts() )
		{ while ( $service->have_posts() ) : $service->the_post(); ?>
			<div class=" col-md-4 col-sm-6 service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
					
					<?php if(get_post_meta( get_the_ID(),'service_font_awesome_icons', true )) { ?>
					<div class="enigma_service_iocn pull-left">
						<i class="fa <?php echo get_post_meta( get_the_ID(),'service_font_awesome_icons', true ); ?>"></i>
					</div>
					<?php } else if(has_post_thumbnail()){
								$class = "img-responsive" ; ?>
					<div class="enigma_service_img pull-left">
					<?php the_post_thumbnail('service_img', $class); ?>
					</div>
					<?php } else { ?>
					<div class="enigma_service_iocn pull-left">
						<i class="fa fa-check-square-o"></i>
					</div>
					<?php } ?>
					
					<div class="enigma_service_detail media-body">
					<?php if(get_post_meta( get_the_ID(),'service_button_link', true )) 
					{ $service_button_link=get_post_meta( get_the_ID(),'service_button_link', true ); }
					else { $service_button_link = get_post_permalink(); } ?>
						<h3><a href="<?php echo $service_button_link; ?>"><?php the_title(); ?></a></h3>
						<p><?php echo get_post_meta( get_the_ID(),'service_description', true ); ?></p>
					</div>
				</div>
			</div>		
		<?php endwhile;
		} else { ?>	
		<div class=" col-md-12 col-sm-6 service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
					<div class="enigma_service_iocn pull-left"><i class="fa fa-check-square-o"></i></div> 
					<div class="enigma_service_detail media-body">
						<h3><?php _e('WOOPS..','weblizar');?></h3>
						<p><?php _e('No,Services to display here. Add your services using Service-Section CPT.','weblizar');?></p>
					</div>
				</div>
			</div>
		<?php } ?>	
		</div>
</div>
<?php get_template_part('home','clientel');
get_footer(); ?>