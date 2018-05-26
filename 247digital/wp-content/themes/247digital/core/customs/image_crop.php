<?php
 if ( function_exists( 'add_image_size' ) )
 { 
	/*** slider ***/
	add_image_size('home_slider_thumb',1580,500,true);	
	/*** portfolio  ***/
	//add_image_size('home_portfo_thumb',260,160,true);
	add_image_size('portfo_2_thumb',555,340,true);
	add_image_size('portfo_3_thumb',360,220,true);
	add_image_size('portfo_4_thumb',260,160,true);
	add_image_size('portfo_v2_thumb',394,242,true);
	add_image_size('portfo_v3_thumb',252,155,true);
	add_image_size('portfo_detail_thumb',750,460,true);	
	//Home Service
	add_image_size('service_img',90,90,true);	
	//Home Thumb
	add_image_size('home_post_thumb',340,210,true);	
	//Home Testimonial Thumb
	add_image_size('home_test_thumb',150, 150,true);	
	//Home Clients Thumb
	add_image_size('home_clientel_thumb',255,140,true);
	
	//About-Us Post Thumb
	add_image_size('about_post_thumb',1140, 380,true);
	add_image_size('about_team_thumb',360, 360,true);
	
	//Blogs thumbs
	add_image_size('wl_page_thumb',730,350,true);
	add_image_size('wl_pageff_thumb',1170,350,true);
	add_image_size('blog_2c_thumb',570,350,true); //2-Column
	add_image_size('recent_blog_img',64,64,true);
}
// code for image resize for according to image layout
//add_filter( 'intermediate_image_sizes', 'weblizar_image_presets');
function weblizar_image_presets($sizes){
if($sizes) { 
	if( isset($_POST['post_id']) ){
   $type = get_post_type($_REQUEST['post_id']);	
    foreach($sizes as $key => $value){
		if($type=='weblizar_portfolio' && $value != 'portfo_v2_thumb' && $value != 'portfo_detail_thumb' && $value != 'portfo_v3_thumb' && $value != 'portfo_2_thumb' && $value != 'portfo_3_thumb' && $value != 'portfo_4_thumb')
		{ unset($sizes[$key]);  }
		
		elseif($type=='weblizar_slider' && $value != 'home_slider_thumb')
		{ unset($sizes[$key]);  }
		
		elseif($type=='weblizar_service' && $value != 'service_img')
		{ unset($sizes[$key]);  }
		
		elseif($type=='post' && $value != 'home_post_thumb' && $value != 'blog_2c_thumb' && $value != 'recent_blog_img' )
		{ unset($sizes[$key]);  }
		
		elseif($type=='weblizar_testimonial' && $value != 'home_test_thumb')
		{ unset($sizes[$key]);  }
		
		elseif($type=='weblizar_client' && $value != 'home_clientel_thumb')
		{ unset($sizes[$key]);  }
		
		elseif($type=='page' && $value != 'about_post_thumb' && $value != 'wl_page_thumb' && $value != 'wl_pageff_thumb')
		{ unset($sizes[$key]);  }
		
		elseif($type=='weblizar_team' && $value != 'about_team_thumb')
		{ unset($sizes[$key]);  }	
		
		}		
    return $sizes;
	}
	}
}
?>