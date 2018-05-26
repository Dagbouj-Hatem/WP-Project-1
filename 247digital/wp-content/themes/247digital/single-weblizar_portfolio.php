 <?php 
get_header(); 
get_template_part('breadcrums'); 
get_template_part('slide_customjs'); 
$wl_theme_options=get_option('enigma_options_pro');	
if($wl_theme_options['light_box_style'] == 'photobox_a')
{ $light_box_style = $wl_theme_options['light_box_style']; }
else 
{ $light_box_style = $wl_theme_options['light_box_style']; }
	?>	
<div class="container">	
	<div class="enigma-project-detail-section">
	<div class="row">
			<?php the_post(); ?>
			<div class="col-md-12">
				<ul class="enigma_portfolio_detail_pagi">
				<?php $next_post = get_next_post();
					if (!empty( $next_post )): ?>
						<li><a href="<?php echo get_permalink( $next_post->ID ); ?>" title="Previous" rel="prev"><span class="fa fa-arrow-left"></span></a></li>
				<?php endif; ?>	
				<?php $prev_post = get_previous_post();
				if (!empty( $prev_post )): ?>
					<li><a href="<?php echo get_permalink( $prev_post->ID ); ?>" title="Next" rel="next"><span class="fa fa-arrow-right"></span></a></li>
				<?php endif; ?>						  
				</ul>
			</div>
			<div class="col-md-8">
				<?php if(has_post_thumbnail()){
					$class=array('class'=>'enigma-project-detail-img enigma_img_responsive');  
					the_post_thumbnail('portfo_detail_thumb', $class); 
				} ?>		
			</div>
			<div class="col-md-4">
				<div class="enigma-project-detail-sidebar">
					<p><?php _e('Date','weblizar'); ?>:<small><?php echo the_date('d M, Y'); ?></small></p>
					<?php if(get_post_meta( get_the_ID(), 'portfolio_skill', true )) { ?>
					<p><?php _e('Skills','weblizar'); ?>:<small><?php echo get_post_meta( get_the_ID(), 'portfolio_skill', true ); ?></small></p>
					<?php } ?>
					
					<?php if(get_post_meta( get_the_ID(), 'portfolio_client', true )) { ?>
					<p><?php _e('Client','weblizar'); ?>:<small><?php echo get_post_meta( get_the_ID(), 'portfolio_client', true ); ?></small></p>
					<?php  } ?>
					<?php if(get_post_meta( get_the_ID(), 'portfolio_url', true )) { ?>
					<p><?php _e('Url','weblizar'); ?>:<small><?php echo get_post_meta( get_the_ID(), 'portfolio_url', true ); ?></small></p>
					<?php } ?>
					<?php if(get_post_meta( get_the_ID(), 'portfolio_button_text', true )) { ?>
					<div class="launch-enigma-project"><a <?php if(get_post_meta( get_the_ID(), 'portfolio_button_target', true )) { echo "target='_blank'"; } ?> href="<?php echo get_post_meta( get_the_ID(), 'portfolio_button_link', true ); ?>" title="Launch Project"><?php echo get_post_meta( get_the_ID(), 'portfolio_button_text', true ); ?></a></div>
					<?php } ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="enigma-project-description">
					<div class="enigma_heading_title2">
						<h3><?php the_title(); ?></h3>		
					</div>
					<p> <?php the_content(); ?> </p>
				</div>
			</div>
			
		</div>
	</div>
	
</div>
<div class="enigma_project_detail_related_projet"> 
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="enigma_heading_title2">
				<?php if($wl_theme_options['portfolio_related_project_title'] != '') { ?>
					<h3><?php echo $wl_theme_options['portfolio_related_project_title']; ?></h3>
				<?php } ?>
					<div class="enigma_carousel-navi">
						<div id="port-prev" class="enigma_carousel-prev" ><i class="fa fa-arrow-left"></i></div>
						<div id="port-next" class="enigma_carousel-next" ><i class="fa fa-arrow-right"></i></div>
					</div>	
				</div>
			</div>
		</div>
	</div>	
	<div class="container">
		<div class="row enima_photo_gallery" >
			<div id="enigma_portfolio_section">
			<?php 
					/**** Related portfolio ****/
					$all_posts = wp_count_posts( 'weblizar_portfolio')->publish;
					$post_type = 'weblizar_portfolio';
					$tax = 'portfolio_categories'; 
					$args = array (
					'post_type' => $post_type,
					'post__not_in' => array($post->ID),
					'posts_per_page' =>$all_posts,
					'post_status' => 'publish');
					$weblizar_portfolio = null;		
					$weblizar_portfolio = new WP_Query($args);				
					if( $weblizar_portfolio->have_posts() )
					{   ?>
						<!-- Portfolio Item -->
					<?php while ($weblizar_portfolio->have_posts()) : $weblizar_portfolio->the_post();
						if(get_post_meta( get_the_ID(),'portfolio_link', true )) 
						{ $portfolio_link=get_post_meta( get_the_ID(),'portfolio_link', true ); }
						else
						{ $portfolio_link = get_post_permalink(); }
					?>
						
					<div class="col-lg-3 col-md-3 pull-left"> 
						<div class="img-wrapper">							
							<div class="enigma_home_portfolio_showcase">
							<?php 
								if(has_post_thumbnail())
								{ 
									$class=array('class'=>'enigma_img_responsive'); 
									the_post_thumbnail('portfo_4_thumb',$class);
									$post_thumbnail_id = get_post_thumbnail_id();
									$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id );
								?>
								<div class="enigma_home_portfolio_showcase_overlay">
									<div class="enigma_home_portfolio_showcase_overlay_inner ">
										<div class="enigma_home_portfolio_showcase_icons">
											<a title="Link" href="<?php echo $portfolio_link; ?>"><i class="fa fa-link"></i></a>
											<a class="<?php echo $light_box_style; ?>" href="<?php echo $post_thumbnail_url; ?>"><i class="fa fa-search-plus"></i><img src="<?php echo $post_thumbnail_url; ?>" alt="photo1 title" style="display:none !important;visibility:hidden"></a>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
							<div class="enigma_home_portfolio_caption">
								<h3><a href="<?php echo $portfolio_link; ?>"> <?php the_title(); ?> </a></h3>							
							</div>
							
						</div>
						<div class="enigma_portfolio_shadow"></div>
					</div>
				<?php  
				endwhile;
				} ?>
			</div>
		</div>
	</div>
</div> <!-- realted project div end here ---> 
<?php get_footer();?>