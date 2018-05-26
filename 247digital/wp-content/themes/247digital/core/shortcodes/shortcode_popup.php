<?php
// registers the buttons for use
function wl_register_buttons($buttons) {
	array_push($buttons, "wl_shortcodes");
	return $buttons;
}

// filters the tinyMCE buttons and adds our custom buttons
function wl_shortcode_buttons() {
	// Don't bother doing this stuff if the current user lacks permissions
	if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
		return;
	 
	// Add only in Rich Editor mode
	if ( get_user_option('rich_editing') == 'true') {
		// filter the tinyMCE buttons and add our own
		add_filter("mce_external_plugins", "wl_add_tinymce_plugin");
		add_filter('mce_buttons', 'wl_register_buttons');
	}
}
// init process for button control
add_action('init', 'wl_shortcode_buttons');

// add the button to the tinyMCE bar
function wl_add_tinymce_plugin($plugin_array) {
	$plugin_array['wl_shortcodes'] = get_template_directory_uri() .'/core/shortcodes/shortcodes_popup.js';
	return $plugin_array;
}
?>