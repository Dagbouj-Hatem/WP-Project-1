  var caroufredsel = function () {
			   // jQuery CarouFredSel  For Portfolio           
                jQuery('#enigma_portfolio_section').carouFredSel({
					width: '100%',
                    responsive: true,
                   scroll : {
						items : 1,
						duration : 1000,
						timeoutDuration : 1000
					},
                    circular: true,
					direction: 'left',
                    items: {
                        visible: {
                            min: 1,
                            max: 4
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
						duration : 2000,
						timeoutDuration : 2000
					},
                    circular: true,
					direction: 'left',
                    items: {
						height: 'variable',
                        visible: {
                            min: 1,
                            max: 3
                        },
						
                    },
                   
                    auto: {
                        play: true
                    }
                });
         
			
          
			
			
			   // jQuery CarouFredSel for Testimonial
        
                jQuery('#enigma_testimonial_section').carouFredSel({
					width: '100%',
					direction: 'left',
					circular: true,
					pagination: "#pager2",
					items: {
                        visible: {
                            min: 1,
                            max: 1
                        }
                    },
					scroll: {
						duration : 2000,
						timeoutDuration : 2000,
					},

                     auto: {
                        play: false,
						duration : 3000,
						timeoutDuration : 3000
                    },
					responsive: true,

                    
                });
           
           
				 // jQuery CarouFredSel  For Client
           
                jQuery('#enigma_client_section').carouFredSel({
                    responsive: true,
					scroll :1,
                    circular: true,
					direction: 'left',
                    items: {
                        visible: {
                            min: 1,
                            max: 4
                        }
                    },
                    prev: '#client-prev',
                    next: '#client-next',

                    auto: {
                        play: false
                    }
                });
		}
		jQuery(window).resize(function () {
                caroufredsel();
            });   
			jQuery(window).load(function () {
                caroufredsel();
            });