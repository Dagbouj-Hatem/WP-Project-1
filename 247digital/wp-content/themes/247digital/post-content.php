<div id="post-<?php the_ID(); ?>" <?php post_class('enigma_blog_full'); ?> >
	<?php if(is_page_template('blog-rightsb.php') || is_home() || is_singular()  || is_archive() || is_author() || is_tag() || is_category() || is_search() ) {
	$class = "blog-date-left";
	} if(is_page_template('blog-leftsb.php')) {
	$class = "blog-date-right";
	}?>
	<ul class=<?php echo $class ;?>>
		<li class="enigma_post_date"><span class="date"><?php echo get_the_date('d'); ?></span><h6><?php echo get_the_date('M  y'); ?></h6></li>
		<li class="enigma_post_author"><?php echo get_avatar(get_the_author_meta( 'ID' ),96); ?></li>
		<li class="enigma_blog_comment"><i class="fa fa-comments-o"></i><h6><?php comments_popup_link( '0', '1', '%', '', '-'); ?></h6></li>
	</ul>
	<div class="post-content-wrap">
		<?php if(has_post_thumbnail()): ?>
		<div class="enigma_blog_thumb_wrapper_showcase">						
			<div class="enigma_blog-img">
				<?php $class=array('class'=>'enigma_img_responsive'); ?>
				<?php the_post_thumbnail('blog_2c_thumb', $class); ?>			
			</div>
			<?php if(!is_single()) { ?>
			<div class="enigma_blog_thumb_wrapper_showcase_overlay">
				<div class="enigma_blog_thumb_wrapper_showcase_overlay_inner ">
					<div class="enigma_blog_thumb_wrapper_showcase_icons">
						<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<?php endif; ?>
		<div class="enigma_fuul_blog_detail_padding">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php if(get_the_tag_list() != '') { ?>
		<p class="enigma_tags"><?php the_tags('Tags :&nbsp;', ' ', '<br />'); ?></p>
		<?php } ?>
		<?php the_content( __( 'Read More' , 'weblizar' ) ); ?>
		<?php $defaults = array(
              'before'           => '<div class="enigma_blog_pagination"><div class="enigma_blog_pagi">' . __( 'Pages:','weblizar' ),
              'after'            => '</div></div>',
	          'link_before'      => '',
	          'link_after'       => '',
	          'next_or_number'   => 'number',
	          'separator'        => ' ',
	          'nextpagelink'     => __( 'Next page'  ,'weblizar'),
	          'previouspagelink' => __( 'Previous page' ,'weblizar' ),
	          'pagelink'         => '%',
	          'echo'             => 1
	          );
	          weblizar_link_pages( $defaults );
			  ?>	
		</div>
	</div>
</div>			
<div class="push-right">
<hr class="blog-sep header-sep">
</div>