<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**************************
** ADD CUSTOM POST TYPES **
**************************/

/* Network */
function soc_create_network_post_type() {
	// set up labels
	$labels = array(
		'name' 					=> __('Networks', 'soc'),
		'singular_name' 		=> __('Network', 'soc'),
		'add_new' 				=> __('Add new Network', 'soc'),
		'add_new_item' 			=> __('Add new Network', 'soc'),
		'edit_item' 			=> __('Edit Network', 'soc'),
		'new_item' 				=> __('New Network', 'soc'),
		'all_items' 			=> __('All Network', 'soc'),
		'view_item' 			=> __('View Network', 'soc'),
		'search_items' 			=> __('Search Networks', 'soc'),
		'not_found' 			=> __('No Networks found', 'soc'),
		'not_found_in_trash'	=> __('Network not found in trash bin', 'soc'),
		'parent_item_colon' 	=> '',
		'menu_name' 			=> __('Networks', 'soc'),
	);
	// register post type
	register_post_type( 'network', array(
		'labels' 				=> $labels,
		'menu_position' 		=> 3,
		'menu_icon' 			=> 'dashicons-networking',
		'has_archive' 			=> true,
		'rewrite'				=> array('slug'	=> 'network'),
		'public' 				=> true,
		'show_ui' 				=> true,
		'show_in_admin_bar' 	=> true,
		'show_in_rest' 			=> true,
		'supports' 				=> array( 'title', 'editor', 'thumbnail'),
		'exclude_from_search'	=> false,
		'capability_type' 		=> 'post',
		)
	);
}
add_action( 'init', 'soc_create_network_post_type' );
