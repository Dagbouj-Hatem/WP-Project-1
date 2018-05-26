<!-- Carousel -->
<?php $wl_theme_options = get_option('enigma_options_pro'); 
$side_interval = $wl_theme_options['side_interval']; ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel" <?php if($wl_theme_options['side_pause']=="yes") { echo "data-pause='false'"; } ?> data-interval="<?php echo $side_interval; ?>">
        <?php $all_posts = wp_count_posts( 'weblizar_slider')->publish;
        $args = array( 'post_type' => 'weblizar_slider','posts_per_page' =>$all_posts);        
        $slider = new WP_Query( $args );
        if( $slider->have_posts() )
        { $t=1; ?>
        <div class="carousel-inner">
        <?php while ( $slider->have_posts() ) : $slider->the_post();  ?>
                <div class="item <?php if($t==1) { echo 'active'; } ?>">
                        <?php if(has_post_thumbnail()): ?>
                        <?php $defalt_arg =array('class' => "img-responsive"); ?>
                        <?php if( $wl_theme_options['front_pg']=='parallax'){
                                the_post_thumbnail('home_slider_parallax');
                        }else{
                        the_post_thumbnail('home_slider_thumb');  }?>
                        <?php endif; ?>
                        <div class="container">
                                <div class="carousel-caption" <?php if( $wl_theme_options['front_pg']=='parallax') { ?> style="top:35% !important" <?php } ?> >
                                        <div class="carousel-text"><?php if(the_title('','','')) { ?>
                                           <h1 class="animated bounceInRight"><?php the_title(); ?></h1>
                                           <?php } ?>
                                                        <ul class="list-unstyled carousel-list">
                                                                <?php if(get_post_meta( get_the_ID(),'slider_desciption', true )) { ?>
                                                           <li class="animated bounceInLeft"><?php echo get_post_meta( get_the_ID(),'slider_desciption', true ); ?></li>
                                                           <?php } ?>
                                                        </ul>
                                                        <?php if(get_post_meta( get_the_ID(),'slider_button_text', true )) { ?>
                                                        <a href="<?php echo get_post_meta( get_the_ID(),'slider_button_link', true );  ?>" class="enigma_blog_read_btn animated bounceInUp" <?php if(get_post_meta( get_the_ID(),'slider_button_target', true )) { echo "target='_blank'"; }?> ><?php echo get_post_meta( get_the_ID(),'slider_button_text', true ); ?></a>
                                                        <?php } ?>
                                        </div>
                                </div>
                        </div>
                </div>
                <?php $t++; endwhile; ?>
        </div>
		<ol class="carousel-indicators">
                <?php for($i=0; $i<$t-1; $i++) { ?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" <?php if($i==0) { echo 'class="active"'; } ?> ></li>
                <?php } ?>
        </ol><?php      
        }
        else
        {
        ?>
        <!-- Indicators -->
        <ol class="carousel-indicators">
                <?php for($i=0; $i<3; $i++) { ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" <?php if($i==0) { echo 'class="active"'; } ?> ></li>
                <?php } ?>
        </ol> 
        <div class="carousel-inner">
                <?php for($i=1; $i<=3; $i++) { ?>
                <div class="item <?php if($i==1) { echo 'active'; } ?>">
                        <img src="<?php echo WL_TEMPLATE_DIR_URI ?>/images/slide/slider-bg-<?php echo $i; ?><?php if( $wl_theme_options['front_pg']=='parallax') { ?>-p<?php } ?>.jpg" >
                        <div class="container">
                                <div class="carousel-caption">
                                        <div class="carousel-text">
                                           <h1 class="animated bounceInRight">Responsive Theme</h1>
                                           <ul class="list-unstyled carousel-list">
                                                   <li class="animated bounceInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet</li>
                                                </ul>
                                                <a href="#" class="enigma_blog_read_btn animated bounceInUp">Read More</a>
                                        </div>
                                </div>
                        </div>
                </div>
        <?php } ?>
        </div>
  <?php } if($all_posts >= "2") { ?>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev" ><span class="glyphicon glyphicon-chevron-left" ></span></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
  <?php } ?>
</div><!-- /.carousel -->      
<!-- / Slider-->
<!-- enigma Callout Section -->
<div class="enigma_callout_area">
        <?php  $wl_theme_options = get_option('enigma_options_pro'); ?>
        <div class="container">
                <div class="row">
                        <?php if($wl_theme_options['call_out_text']!='') { ?>
                        <div class="col-md-9">
                                <p><i class="fa fa-thumbs-up"></i><?php echo $wl_theme_options['call_out_text']; ?></p>
                        </div>
                        <?php } ?>                     
                        <?php if($wl_theme_options['call_out_button_text']!='') { ?>
                        <div class="col-md-3">
                                <a href="<?php if($wl_theme_options['call_out_link']!='') { echo $wl_theme_options['call_out_link']; } ?>" class="enigma_callout_btn" <?php if($wl_theme_options['call_out_button_target']=='on') { echo "target='_blank'"; } ?> ><?php echo $wl_theme_options['call_out_button_text']; ?> </a>
                        </div>
                        <?php } ?>
                </div>         
        </div>
        <div class="enigma_callout_shadow"></div>
</div>
<!-- /enigma Callout Section -->