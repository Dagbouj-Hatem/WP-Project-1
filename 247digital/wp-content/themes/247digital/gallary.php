<?php // Template Name: Portfolio-Gallary 
get_header(); 
get_template_part('breadcrums'); 

	$wl_theme_options=get_option('enigma_options_pro');	
	
	if($wl_theme_options['light_box_style'] == 'photobox_a')
	{ $light_box_style = $wl_theme_options['light_box_style']; }
	else 
	{ $light_box_style = $wl_theme_options['light_box_style']; }

	?>
<div class="row enigma_portfolio_page">
	<div class="enigma_gallery_page enima_photo_gallery isotope" id="isotope-gallery-container">
		<?php
				$all_posts = wp_count_posts( 'weblizar_portfolio')->publish;
				$args = array('post_type' => 'weblizar_portfolio', 'posts_per_page' =>$all_posts);
					global $portfolio;
					$portfolio = new WP_Query( $args );			
					if( $portfolio->have_posts() )
					{	
						while ( $portfolio->have_posts() ) : $portfolio->the_post();							
						$terms_names = wp_get_post_terms($post->ID, "portfolio_categories", array("fields" => "names"));
						
						if(get_post_meta( get_the_ID(),'portfolio_link', true )) 
						{ $portfolio_link=get_post_meta( get_the_ID(),'portfolio_link', true ); }
						else { $portfolio_link = get_post_permalink(); }							
					?>
					
			<div class="enigma_gallery_blog  enigma_gallery-padding enigma_gallery-sellector"> 
				<div class="gallery_wrapper">
					<?php if(has_post_thumbnail()) {	?>
					<div class="enigma_gallery_showcase gallery_showcase">
						<div class="enigma_gal_img">
							<?php
									$class=array('class'=>'enigma_img_responsive');
									the_post_thumbnail('portfo_2_thumb',$class);
									$post_thumbnail_id = get_post_thumbnail_id();
									$post_image_url = wp_get_attachment_url($post_thumbnail_id );									
								?>
						</div>
						<div class="enigma_gallery_showcase_overlay">
							<div class="enigma_gallery_showcase_overlay_inner ">
								<div class="enigma_gallery_showcase_icons">
									<a class="<?php echo $light_box_style; ?>" href="<?php echo $post_image_url; ?>"><i class="fa fa-search-plus"></i><img src="<?php echo $post_image_url; ?>" alt="<?php the_title(); ?>" style="display:none !important;visibility:hidden"></a>
								</div>
							</div>
						</div>						
					</div>
					<?php } ?>
				</div>	
			</div>
			
				<?php endwhile; 
				} ?>
	</div> <!-- gallery div end here -->
</div>

<?php get_footer(); ?>