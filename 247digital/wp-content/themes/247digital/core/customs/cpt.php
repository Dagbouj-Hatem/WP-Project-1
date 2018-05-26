<?php
	$wl_theme_options = get_option('enigma_options_pro');
	$cpt_slider = $wl_theme_options['cpt_slider'];
	$cpt_service = $wl_theme_options['cpt_service'];
	$cpt_portfolio = $wl_theme_options['cpt_portfolio'];
	$cpt_testimonial = $wl_theme_options['cpt_testimonial'];
	$cpt_client = $wl_theme_options['cpt_client'];
	$cpt_team = $wl_theme_options['cpt_team'];
/************* Home Service custom post type ***********************/	
function weblizar_slider_type()
{	register_post_type( 'weblizar_slider',
		array(
			'labels' => array(
			'name' => __('Enigma Slider','weblizar'),
			'add_new' => __('Add New Slider', 'weblizar'),
			'add_new_item' => __('Add New Slider','weblizar'),
			'edit_item' => __('Add New service','weblizar'),
			'new_item' => __('New Link','weblizar'),
			'all_items' => __('All Slider','weblizar'),
			'view_item' => __('View Link','weblizar'),
			'search_items' => __('Search Links','weblizar'),
			'not_found' =>  __('No Links found','weblizar'),
			'not_found_in_trash' => __('No Links found in Trash','weblizar'), 
			),
		'supports' => array('title','thumbnail'),
		'show_in' => true,
		'show_in_nav_menus' => false,
		'rewrite' => array('slug' => $GLOBALS['cpt_slider']),		
		'public' => true,
		'menu_icon' => 'dashicons-admin-page',
		)
	);
}
add_action( 'init', 'weblizar_slider_type' );

/************* Home Service custom post type ***********************/	
function weblizar_service_type()
{	register_post_type( 'weblizar_service',
		array(
			'labels' => array(
			'name' => __('Enigma Service','weblizar'),
			'add_new' => __('Add New Service', 'weblizar'),
			'add_new_item' => __('Add New Service','weblizar'),
			'edit_item' => __('Add New service','weblizar'),
			'new_item' => __('New Link','weblizar'),
			'all_items' => __('All Services','weblizar'),
			'view_item' => __('View Link','weblizar'),
			'search_items' => __('Search Links','weblizar'),
			'not_found' =>  __('No Links found','weblizar'),
			'not_found_in_trash' => __('No Links found in Trash','weblizar'), 
			),
		'supports' => array('title','thumbnail'),
		'show_in' => true,
		'show_in_nav_menus' => false,
		'rewrite' => array('slug' => $GLOBALS['cpt_service']),
		'public' => true,
		'menu_icon' => 'dashicons-admin-generic',
		)
	);
}
add_action( 'init', 'weblizar_service_type' );
//************* Home project custom post type ***********************
function weblizar_portfolio_type()
{	register_post_type( 'weblizar_portfolio',
		array(
			'labels' => array(
				'name' => __('Enigma Portfolio','weblizar'),
				'add_new' => __('Add New Item', 'weblizar'),
				'add_new_item' => __('Add New Portfolio','weblizar'),
				'edit_item' => __('Add New Portfolio ','weblizar'),
				'new_item' => __('New Link','weblizar'),
				'all_items' => __('All Portfolio','weblizar'),
				'view_item' => __('View Link','weblizar'),
				'search_items' => __('Search Links','weblizar'),
				'not_found' =>  __('No Links found','weblizar'),
				'not_found_in_trash' => __('No Links found in Trash','weblizar'), 
			),
			'supports' => array('title','editor','thumbnail'),
			'show_in' => true,
			'show_in_nav_menus' => false,
			'public' => true,
			'rewrite' => array('slug' => $GLOBALS['cpt_portfolio']),
			'menu_icon' => 'dashicons-admin-media',
		)
	);
}
add_action( 'init', 'weblizar_portfolio_type' );
function portfolio_taxonomy() {
    register_taxonomy('portfolio_categories','weblizar_portfolio',
    array(  'hierarchical' => true,
			'show_in_nav_menus' => false,
            'label' => 'Portfolio Categories',
            'query_var' => true));
	
	// Get Default Category Id 
	$defualt_categories_id = get_option('portfolio_default_categories_id');	
	//quick update category
	if((isset($_POST['action'])) && (isset($_POST['taxonomy']))){		
		wp_update_term($_POST['tax_ID'], 'portfolio_categories', array(
		  'name' => $_POST['name'],
		  'slug' => $_POST['slug']
		));	
		update_option('portfolio_default_categories_id', $defualt_categories_id);
	} 
	else 
	{ 	// Add default taxonomy 
		if(!$defualt_categories_id){
			wp_insert_term('ALL','portfolio_categories', array('description'=> 'Default Category','slug' => 'ALL'));
			$Current_text_id = term_exists('ALL', 'portfolio_categories');
			update_option('portfolio_default_categories_id', $Current_text_id['term_id']);		
		}
		
	}
	 // update  default taxonomy 
	if(isset($_POST['submit']) && isset($_POST['action']) )
	{
		if(isset($_POST['tag_ID']) && isset($_POST['name']) && isset($_POST['slug']) && isset($_POST['description']) ) {
		wp_update_term($_POST['tag_ID'], 'portfolio_categories', array(
			  'name' => $_POST['name'],
			  'slug' => $_POST['slug'],
			  'description' =>$_POST['description']
			));
		}
	}
	// Delete default category
	if(isset($_POST['action']) && isset($_POST['tag_ID']) )
	{	if(($_POST['tag_ID'] == $defualt_tex_id) && $_POST['action'] == "delete-tag")
		{	
			delete_option('portfolio_default_categories_id'); 
		} 
	}	
}
add_action( 'init', 'portfolio_taxonomy' );

add_action( 'save_post', 'set_default_category_project' );
function set_default_category_project( $post_id ) {
    $terms = wp_get_post_terms( $post_id, 'portfolio_categories');	
    // Only set default if no terms are set yet
    if (!$terms)
	{    // Assign the default category
        $default_term = get_term_by('slug', 'ALL', 'portfolio_categories','ARRAY_A');		
        wp_set_post_terms( $post_id, $default_term, 'portfolio_categories' );
    }
}

/*Testimonial CPT*/
function weblizar_testimonial_type()
{	register_post_type( 'weblizar_testimonial',
		array(
			'labels' => array(
				'name' => __('Enigma Testimonial','weblizar'),
				'add_new' => __('Add New Testimonial', 'weblizar'),
                'add_new_item' => __('Add New Testimonial','weblizar'),
				'edit_item' => __('Add New Testimonial','weblizar'),
				'new_item' => __('New Link','weblizar'),
				'all_items' => __('All Testimonial','weblizar'),
				'view_item' => __('View Link','weblizar'),
				'search_items' => __('Search Links','weblizar'),
				'not_found' =>  __('No Links found','weblizar'),
				'not_found_in_trash' => __('No Links found in Trash','weblizar'), 
				),
			'supports' => array('title','thumbnail'),
			'show_in' => true,
			'show_in_nav_menus' => false,
			'public' => true,
			'rewrite' => array('slug' => $GLOBALS['cpt_testimonial']),
			'menu_icon' => 'dashicons-admin-users',
			)
	);
}
add_action( 'init', 'weblizar_testimonial_type' );

/*Clients CPT*/
add_action( 'init', 'weblizar_client_type' );
function weblizar_client_type()
{	register_post_type( 'weblizar_client',
		array(
			'labels' => array(
				'name' => 'Enigma Client',
				'add_new' => __('Add New Client', 'weblizar'),
                'add_new_item' => __('Add New Client','weblizar'),
				'edit_item' => __('Add New Client','weblizar'),
				'new_item' => __('New Link','weblizar'),
				'all_items' => __('All Client','weblizar'),
				'view_item' => __('View Link','weblizar'),
				'search_items' => __('Search Links','weblizar'),
				'not_found' =>  __('No Links found','weblizar'),
				'not_found_in_trash' => __('No Links found in Trash','weblizar'), 
				),
			'supports' => array('title','thumbnail'),
			'show_in' => true,
			'show_in_nav_menus' => false,
			'public' => true,
			'rewrite' => array('slug' => $GLOBALS['cpt_client']),
			'menu_icon' => 'dashicons-admin-users',
			)
	);
}
add_action( 'init', 'weblizar_client_type' );

/******`````````TEAM```````````````****/
function weblizar_team_type()
{	register_post_type( 'weblizar_team',
		array(
			'labels' => array(
				'name' => __('Enigma Team', 'weblizar'),
				'add_new' => __('Add New Team Member', 'weblizar'),
                'add_new_item' => __('Add New Member','weblizar'),
				'edit_item' => __('Add New Member','weblizar'),
				'new_item' => __('New Link','weblizar'),
				'all_items' => __('All Team Member','weblizar'),
				'view_item' => __('View Link','weblizar'),
				'search_items' => __('Search Links','weblizar'),
				'not_found' =>  __('No Links found','weblizar'),
				'not_found_in_trash' => __('No Links found in Trash','weblizar'), 
				),
			'supports' => array('title','thumbnail'),
			'show_in' => true,
			'show_in_nav_menus' => false,
			'public' => true,
			'rewrite' => array('slug' => $GLOBALS['cpt_team']),				
			'menu_icon' => 'dashicons-admin-users',
			)
	);
}
add_action( 'init', 'weblizar_team_type' );
?>