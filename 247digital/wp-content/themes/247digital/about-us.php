<?php //Template Name: About-Us
get_header(); 
get_template_part('breadcrums'); 
if(has_post_thumbnail()): ?>
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="about_us_img">
				<?php $defalt_arg =array('class' => "img-responsive");
				the_post_thumbnail('about_post_thumb', $defalt_arg); ?>
			</div>			
		</div>
	</div>
</div>
<?php endif;
the_post();?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php the_content(); ?>
		</div>		
	</div>	
</div>
<div class="enigma_team_section">
<div class="container">
<?php $wl_theme_options=get_option('enigma_options_pro');	?>
		<?php $all_posts = wp_count_posts( 'weblizar_team')->publish;		
		$args = array( 'post_type' => 'weblizar_team','posts_per_page' =>$all_posts); 	
		$team = new WP_Query( $args );		 
		if( $team->have_posts() )
		{ while ( $team->have_posts() ) : $team->the_post(); ?>		
			<div class="col-xs-12 col-sm-6 col-md-4 service "> 
				<div class="enigma_team_wrapper">
					<div class="enigma_team_showcase">
						<?php $defalt_arg =array('class' => "enigma_img_responsive");
							if(has_post_thumbnail()): 
							the_post_thumbnail('about_team_thumb', $defalt_arg); 
							else : ?>						
							<img class="enigma_img_responsive" src="images/project/staff1.jpg">
							<?php endif; ?>
							<div class="enigma_team_showcase_overlay">
							<div class="enigma_team_showcase_overlay_inner ">
								<div class="enigma_team_showcase_icons">
								<?php if(get_post_meta( get_the_ID(),'fb_meta_save', true ) !='') { ?>		
									<a target="_blank" href="<?php echo get_post_meta( get_the_ID(),'fb_meta_save', true ); ?>" ><i class="fa fa-facebook"></i></a>
								<?php } 
								if(get_post_meta( get_the_ID(),'twt_meta_save', true ) !='') { ?>	
									<a target="_blank" href="<?php echo get_post_meta( get_the_ID(),'twt_meta_save', true ); ?>" ><i class="fa fa-twitter"></i></a>
								<?php }
								if(get_post_meta( get_the_ID(),'lnkd_meta_save', true ) !='') { ?>	
									<a target="_blank" href="<?php echo get_post_meta( get_the_ID(),'lnkd_meta_save', true ); ?>" ><i class="fa fa-linkedin"></i></a>
								<?php } ?>	
								</div>
							</div>
							</div>
					</div>
					<div class="enigma_team_caption">
						<h3><a target="_blank" href="<?php if(get_post_meta( get_the_ID(),'team_meta_save', true )) { echo get_post_meta( get_the_ID(),'team_meta_save', true ); } else { echo "#"; } ?>" > <?php the_title(); ?></a></h3>
						<small>(<?php echo get_post_meta( get_the_ID(),'designation_meta_save', true ); ?>)</small>	
					</div>
				</div>
			</div>
			<?php endwhile;
			} else { ?>
			<div class="col-xs-12 col-sm-6 col-md-4  service"> 
				<div class="enigma_team_wrapper">
					<div class="enigma_team_showcase">
						<img class="enigma_img_responsive" src="<?php echo WL_TEMPLATE_DIR_URI ?>/images/team.png">
						<div class="enigma_team_showcase_overlay">
							<div class="enigma_team_showcase_overlay_inner ">
								<div class="enigma_team_showcase_icons">
									<a href="http://www.fb.com"><i class="fa fa-facebook"></i></a>
									<a href="http://www.twitter.com" ><i class="fa fa-twitter"></i></a>
									<a href="http://www.linkedin.com" ><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="enigma_team_caption">
						<h3><?php _e('Linda Rozer','weblizar'); ?></h3>
						<small><?php _e('(Designer)','weblizar'); ?></small>	
					</div>
				</div>
			</div>			
			<div class="col-xs-12 col-sm-6 col-md-4  service"> 
				<div class="enigma_team_wrapper">
					<div class="enigma_team_showcase">
						<img class="enigma_img_responsive" src="<?php echo WL_TEMPLATE_DIR_URI ?>/images/team.png">
						<div class="enigma_team_showcase_overlay">
							<div class="enigma_team_showcase_overlay_inner ">
								<div class="enigma_team_showcase_icons">
									<a href="http://www.fb.com"><i class="fa fa-facebook"></i></a>
									<a href="http://www.twitter.com" ><i class="fa fa-twitter"></i></a>
									<a href="http://www.linkedin.com" ><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="enigma_team_caption">
						<h3><?php _e('John Mackenzy','weblizar'); ?></h3>
						<small><?php _e('(Hr Manager)','weblizar'); ?></small>	
					</div>
				</div>
			</div>			
			<div class="col-xs-12 col-sm-6 col-md-4 service "> 
				<div class="enigma_team_wrapper">
					<div class="enigma_team_showcase">
						<img class="enigma_img_responsive" src="<?php echo WL_TEMPLATE_DIR_URI ?>/images/team.png">
						<div class="enigma_team_showcase_overlay">
							<div class="enigma_team_showcase_overlay_inner ">
								<div class="enigma_team_showcase_icons">
									<a href="http://www.fb.com"><i class="fa fa-facebook"></i></a>
									<a href="http://www.twitter.com" ><i class="fa fa-twitter"></i></a>
									<a href="http://www.linkedin.com" ><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="enigma_team_caption">
						<h3><?php _e('John Doe','weblizar'); ?></h3>
						<small><?php _e('(Develpoer)','weblizar'); ?></small>	
					</div>
				</div>
			</div>			
				
			<?php } ?>
		</div><!-- row end--->
		
	</div> <!-- container div end here -->
	
</div><!-- enigm,a team section div end here -->
<?php get_footer(); ?>