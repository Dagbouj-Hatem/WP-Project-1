<?php //Template Name: Page With Right Sidebar
get_header(); 
get_template_part('breadcrums'); ?>
<div class="container">
	<div class="row enigma_blog_wrapper">
	<div class="col-md-8">
	<?php //get_template_part('post','page'); ?>
	<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
		<div class="enigma_blog_full">
			<?php	if(has_post_thumbnail()): ?>
				<div class="enigma_blog_thumb_wrapper_showcase">						
					<div class="enigma_blog-img">
					<?php  $class =array('class'=>'enigma_img_responsive');
						the_post_thumbnail('wl_page_thumb',$class); ?>						
					</div>						
				</div>
				<?php endif; ?>
			<div class="enigma_blog_post_content">
				<?php the_content( __( 'Read More' , 'weblizar' ) ); ?>
			</div>
		</div>	
		<div class="push-right">
			<hr class="blog-sep header-sep">
		</div>
		<?php comments_template( '', true ); ?>
		<?php
		endwhile;
		endif; ?>
	</div>
	<?php get_sidebar(); ?>	
	</div>
</div>	
<?php get_footer(); ?>