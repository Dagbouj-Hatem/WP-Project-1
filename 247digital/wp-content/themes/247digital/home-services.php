<!-- service section -->
<div class="enigma_service">
<?php $wl_theme_options=get_option('enigma_options_pro');
if($wl_theme_options['home_service_title'] !='') { ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="enigma_heading_title">
				<h3><?php echo $wl_theme_options['home_service_title']; ?></h3>		
			</div>
		</div>
	</div>
</div>
<?php } ?>
<div class="container">
		<div class="row isotope" id="isotope-service-container">
		<?php
		if($wl_theme_options['service_column']==2){
			$service_column="6";
		}
		else
		if($wl_theme_options['service_column']==3){
			$service_column="4";
		}else
		if($wl_theme_options['service_column']==4){
			$service_column="3";
		}		
		$all_posts = wp_count_posts( 'weblizar_service')->publish;
		if($wl_theme_options['no_of_service']!=''){
			$all_posts = $wl_theme_options['no_of_service'];
		}		
		$args = array( 'post_type' => 'weblizar_service','posts_per_page' =>$all_posts); 	
		$service = new WP_Query( $args ); 
		if( $service->have_posts() )
		{ while ( $service->have_posts() ) : $service->the_post(); ?>	
			<div class=" col-md-<?php echo $service_column; ?> service">
			<?php if(get_post_meta( get_the_ID(),'service_button_link', true )) 
					{ $service_button_link=get_post_meta( get_the_ID(),'service_button_link', true ); }
					else { $service_button_link = get_post_permalink(); } ?>
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">				
					
					<?php if(get_post_meta( get_the_ID(),'service_font_awesome_icons', true )) { ?>
					<div class="enigma_service_iocn pull-left">
						<a href="<?php echo $service_button_link; ?>" <?php if(get_post_meta( get_the_ID(), 'service_button_target', true )) { echo "target='_blank'"; } ?>><i class="fa <?php echo get_post_meta( get_the_ID(),'service_font_awesome_icons', true ); ?>"></i></a>
					</div>
					<?php } else if(has_post_thumbnail()){ $class = "img-responsive" ; ?>
					<div class="enigma_service_img pull-left">
					<a href="<?php echo $service_button_link; ?>" target="<?php  if(get_post_meta( get_the_ID(),'service_button_target', true )) { echo '_blank'; }  ?>"><?php the_post_thumbnail('service_img', $class); ?></a>
					</div>
					<?php } ?>
					
					<div class="enigma_service_detail media-body">					
						<h3><a href="<?php echo $service_button_link; ?>"<?php if(get_post_meta( get_the_ID(), 'service_button_target', true )) { echo "target='_blank'"; } ?>><?php the_title(); ?></a></h3>
						<p><?php echo substr(get_post_meta( get_the_ID(),'service_description', true ), 0, 125); ?></p>
					</div>
				</div>
			</div>
		<?php endwhile;
		} else { ?>
			<div class=" col-md-4  service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
					<div class="enigma_service_iocn pull-left"><i class="fa fa-camera-retro"></i></div> 
					<div class="enigma_service_detail media-body">
						<h3>Lorem Ipsum </h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4  service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
					<div class="enigma_service_iocn pull-left"><i class="fa fa-desktop"></i></div> 
					<div class="enigma_service_detail media-body">
						<h3>Lorem ipsum dolor</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
					</div>
				</div>
			</div>
			
			<div class=" col-md-4  service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
					<div class="enigma_service_iocn pull-left"><i class="fa fa-check-square-o"></i></div> 
					<div class="enigma_service_detail media-body">
						<h3>Lorem ipsum dolor  Lorem</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
					</div>
				</div>
			</div>
			
			<div class=" col-md-4  service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
					<div class="enigma_service_iocn pull-left"><i class="fa fa-check-square-o"></i></div> 
					<div class="enigma_service_detail media-body">
						<h3>consectetur Lorem</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
					</div>
				</div>
			</div>
			
			<div class=" col-md-4  service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
					<div class="enigma_service_iocn pull-left"><i class="fa fa-check-square-o"></i></div> 
					<div class="enigma_service_detail media-body">
						<h3>consectetur adipiscing metus</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
					</div>
				</div>
			</div>
			<div class=" col-md-4  service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
					<div class="enigma_service_iocn pull-left"><i class="fa fa-check-square-o"></i></div> 
					<div class="enigma_service_detail media-body">
						<h3>Quisque rutrum pellentesque</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>	 
<!-- /Service section -->