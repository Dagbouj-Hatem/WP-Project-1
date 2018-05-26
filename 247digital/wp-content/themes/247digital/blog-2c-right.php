<?php //Template Name: Blog 2 Column Right Sidebar
get_header(); 
get_template_part('breadcrums'); ?>
<div class="container">
	<div class="row enigma_blog_wrapper">
		<div class="col-md-8">
		<?php get_template_part('loop'); ?>	
		</div> 
		<?php get_sidebar(); ?>
	</div><!--- row div end here -->
</div> <!-- container div end here -->
<?php get_footer(); ?>