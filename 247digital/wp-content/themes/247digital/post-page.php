<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
<div class="enigma_blog_full">
		<?php  
		 $defalt_arg ="";
		if(is_page_template('page.php') || is_page_template('page-leftsb.php')) 
		{ 
		$defalt_arg ='wl_page_thumb'; 
		}
		elseif (is_page_template('page-fullwidth.php')) {
		$defalt_arg = 'wl_pageff_thumb';		
		}		
		if(has_post_thumbnail()): ?>
		<div class="enigma_blog_thumb_wrapper_showcase">						
			<div class="enigma_blog-img">
			<?php the_post_thumbnail($defalt_arg); ?>						
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