<?php get_header(); ?>
<div class="enigma_header_breadcrum_title">	
	<div class="container">
		<div class="row">
		<?php if(have_posts()) :?>
			<div class="col-md-12">
			<h1 class="h1-page-title"><?php printf( __( 'Tag Archives: %s', 'weblizar' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h1>			
			</div>
		<?php endif; ?>
		<?php rewind_posts(); ?>
		</div>
	</div>	
</div>
<div class="container">	
	<div class="row enigma_blog_wrapper">
	<div class="col-md-8">
	<?php 
	if ( have_posts()): 
	while ( have_posts() ): the_post();
	get_template_part('post','content'); ?>	
	<?php endwhile; ?>
	<div class="enigma_blog_pagination">
		<?php if ( get_next_posts_link() ): ?>
		<?php next_posts_link('<span class="prev">&larr;</span>'.__('Older posts', 'weblizar' ) ); ?>
		<?php endif; ?>
		
		<?php if ( get_previous_posts_link() ): ?>
		<?php previous_posts_link( __( 'Newer posts', 'weblizar' ). '<span class="next">&rarr;</span>' ); ?>
		<?php endif; ?>	
	</div>
	<?php	
	endif; 
	 wp_link_pages(); 
 ?>
	</div>	
	<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
	