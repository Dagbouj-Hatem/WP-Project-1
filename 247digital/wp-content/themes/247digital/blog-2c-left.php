<?php //Template Name: Blog 2 Column Left Sidebar
get_header(); 
get_template_part('breadcrums'); ?>
<div class="container">
	<div class="row enigma_blog_wrapper">
		<?php get_sidebar(); ?>
		<div class="col-md-8">
		<?php get_template_part('loop'); ?>		
		</div>
	</div> <!--- row div end here -->
</div><!-- container div end here -->
<?php get_footer(); ?>