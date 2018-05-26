<?php
// Template Name: Portfolio-4-Columns
 get_header(); 
 get_template_part('breadcrums'); 
	
	$wl_theme_options=get_option('enigma_options_pro');	
	
	if($wl_theme_options['light_box_style'] == 'photobox_a')
	{ $light_box_style = $wl_theme_options['light_box_style']; }
	else 
	{ $light_box_style = $wl_theme_options['light_box_style']; }
 ?>
 <div class="container">
	<div class="row">
	<?php
		//for a given post type, return all
		$post_type = 'weblizar_portfolio';
		$tax = 'portfolio_categories'; 
		$term_args=array( 'hide_empty' => true);
		$tax_terms = get_terms($tax, $term_args);					
		$defualt_tex_id = get_option('portfolio_default_categories_id'); 					
		?>	
		<div class="col-md-12">
			<ul class="portfolio-filter nav nav-pills">
			<?php
				foreach ($tax_terms  as $tax_term) {
					$tax_term_name = str_replace(' ', '_', $tax_term->name);
					$tax_term_name = preg_replace('~[^A-Za-z\d\s-]+~u', 'wl', $tax_term_name);
					?>
					<li <?php if($tax_term->term_id == $defualt_tex_id) { echo "class='active'";  } ?> >
						<a <?php if($tax_term->term_id == $defualt_tex_id) { echo 'data-filter="*"'; } else { echo "data-filter='.$tax_term_name'"; } ?>  href="#"><?php echo $tax_term->name; ?></a>
                    </li>						
				<?php } ?> 
			</ul>
		</div>	
	</div>	
 </div>
 <div class="container">
	<div class="row enigma_portfolio_page enima_photo_gallery portfolio " id="isotope-portfolio-container" style="width:100%;">
		<?php
				$all_posts = wp_count_posts( 'weblizar_portfolio')->publish;
				$args = array('post_type' => 'weblizar_portfolio', 'posts_per_page' =>$all_posts);
					global $portfolio;
					$portfolio = new WP_Query( $args );			
					if( $portfolio->have_posts() )
					{	
						while ( $portfolio->have_posts() ) : $portfolio->the_post();							
						$terms_names = wp_get_post_terms($post->ID, "portfolio_categories", array("fields" => "names"));
						//print_r($terms_names);
						if(get_post_meta( get_the_ID(),'portfolio_button_link', true )) 
						{ $portfolio_button_link=get_post_meta( get_the_ID(),'portfolio_button_link', true ); }
						else { $portfolio_button_link = get_post_permalink(); }							
					?>							
					<div class="col-xs-12 col-sm-6 col-md-3 portfolio-item-wrapper <?php foreach ($terms_names as $term) {   $tax_term = str_replace(' ', '_', $term);  echo preg_replace('~[^A-Za-z\d\s-]+~u', 'wl', $tax_term). " "; } ?>"> 
						<div class="img-wrapper">
							<div class="enigma_home_portfolio_showcase">
								 <?php if(has_post_thumbnail()) {	
									$class=array('class'=>'enigma_img_responsive');
									the_post_thumbnail('portfo_4_thumb',$class);
									$post_thumbnail_id = get_post_thumbnail_id();
									$post_image_url = wp_get_attachment_url($post_thumbnail_id );									
								?>
								<div class="enigma_home_portfolio_showcase_overlay">
									<div class="enigma_home_portfolio_showcase_overlay_inner ">
										<div class="enigma_home_portfolio_showcase_icons">
											<a <?php if(get_post_meta( get_the_ID(), 'portfolio_button_target', true )) { echo "target='_blank'"; } ?> title="portfolio" href="<?php echo $portfolio_button_link; ?>"><i class="fa fa-link"></i></a>
											<a class="<?php echo $light_box_style; ?>" href="<?php echo $post_image_url; ?>"><i class="fa fa-search-plus"></i><img src="<?php echo $post_image_url; ?>" alt="<?php the_title(); ?>" style="display:none !important;visibility:hidden"></a>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
							<div class="enigma_home_portfolio_caption">
								<h3><a <?php if(get_post_meta( get_the_ID(), 'portfolio_button_target', true )) { echo "target='_blank'"; } ?> href="<?php echo $portfolio_button_link; ?>"><?php the_title(); ?></a></h3>
							</div>
						</div>
						 <div class="enigma_portfolio_shadow"></div> 
					</div>
				<?php endwhile; 
				} ?>
	</div>
</div> <!-- container div end here --->
	<?php if( !$portfolio->have_posts() ) { ?>
	<div class="container">
		<div class="row enigma_blog_wrapper">
			<div class="col-md-12">
				<div class="error_404">
					<h2>No Portfolio!</h2>
					<h4>We're sorry, but First add your portfolio images</h4>
				</div>
			</div>
		</div>
	</div>
	<?php }
 get_footer(); ?>