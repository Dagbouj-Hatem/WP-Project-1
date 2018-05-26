<?php //Template Name: Blog Full-Width
get_header(); 
get_template_part('breadcrums'); ?>
<div class="container">	
	<div class="row enigma_blog_wrapper">	
	<div class="col-md-12">
	<?php 	if ( have_posts()) : 
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'post','paged'=>$paged);		
		$post_data = new WP_Query( $args );
		while($post_data->have_posts()):
		$post_data->the_post(); 
		global $more;
		$more = 0; 
		get_template_part('post','content'); 
		endwhile; 
		endif; ?>
		<!-- Pagination -->
		<?php weblizar_pagination($post_data->max_num_pages) ; ?>    
		<!-- //Pagination -->	
	</div><!--- row div end here -->
	</div>
</div><!-- container div end here -->
<?php get_footer(); ?>