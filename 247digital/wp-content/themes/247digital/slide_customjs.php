<?php $wl_theme_options=get_option('enigma_options_pro'); ?>
<script>
  var caroufredsel = function () {	
	 jQuery('#enigma_portfolio_section').carouFredSel({
			width: '100%',
			responsive: true,
		   scroll : {
				items : 1,
				duration : <?php echo $wl_theme_options['portfolio_slide_duration']; ?>,
				timeoutDuration : <?php echo $wl_theme_options['portfolio_slide_timeoutduration']; ?>
			},
			circular: true,
			direction: 'left',
			items: {
				height: 'variable',
				visible: {
					min: 1,
					max: <?php echo $wl_theme_options['portfolio_slide_item']; ?>
				}
			},
			prev: '#port-prev',
			next: '#port-next',
			auto: {
				play: false
			}
		});
		
		jQuery('#enigma_blog_section').carouFredSel({
						width: '100%',
						responsive: true,
					   scroll : {
							items : 1,
							duration : <?php echo $wl_theme_options['blog_slide_duration']; ?>,
							timeoutDuration : <?php echo $wl_theme_options['blog_slide_timeoutduration']; ?>
						},
						circular: true,
						direction: 'left',
						items: {
							height: 'variable',
							visible: {
								min: 1,
								max: 4,
							},							
						},
						prev: '#port-prev1',
						next: '#port-next1',						
						auto: {
							play: true
						}
					});	
			  
				 jQuery('#enigma_testimonial_section').carouFredSel({
						width: '100%',
						responsive: true,
					   scroll : {
							items : 1,
							duration : <?php echo $wl_theme_options['testi_slide_duration']; ?>,
							timeoutDuration : <?php echo $wl_theme_options['testi_slide_timeoutduration']; ?>
						},
						circular: true,
						direction: 'left',
						items: {
							height: 'variable',
							visible: {
								min: 1,
								max: <?php echo $wl_theme_options['testi_slide_item']; ?>
							}
						},
						pagination: "#pager2",
						auto: {
							play: <?php echo $wl_theme_options['testi_slide_item_autoplay']; ?>
						}
					});
					
					// jQuery CarouFredSel  For Client
					jQuery('#enigma_client_section').carouFredSel({
						width: '100%',
						height: 'variable',
						responsive: true,
						scroll :1,
						circular: true,
						direction: 'left',
						items: {
							height: 'variable',
							visible: {
								min: 1,
								max:<?php echo $wl_theme_options['client_slide_item']; ?>
							}
						},
						scroll: {
							duration : <?php echo $wl_theme_options['client_slide_duration']; ?>,
							timeoutDuration : <?php echo $wl_theme_options['client_slide_timeoutduration']; ?>,
						},						
						prev: '#client-prev',
						next: '#client-next',
						auto: {
							play: <?php echo $wl_theme_options['client_slide_rotation']; ?>
						}
					});
	}
	jQuery(window).resize(function () { caroufredsel(); });   
	jQuery(window).load(function () { caroufredsel(); });
</script>