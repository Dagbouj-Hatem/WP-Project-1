<?php //Template Name: Blog 3 Column
get_header(); 
get_template_part('breadcrums'); ?>
<div class="container">
	<div class="row enigma_blog_wrapper">
		<?php get_template_part('loop'); ?>		
	</div> <!--- row div end here -->
</div> <!-- container div end here -->
<?php get_footer(); ?>