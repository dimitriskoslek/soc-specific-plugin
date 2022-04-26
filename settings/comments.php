<?php

if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
}

// Disable support for comments and trackbacks in post types
function soc_disable_comments_post_types_support(){
	$post_types = get_post_types();
	foreach($post_types as $post_type){
		if(post_type_supports($post_type, 'comments')){
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}
}
add_action('admin_init', 'soc_disable_comments_post_types_support');

// Close any comments open comments on the front-end
function soc_disable_comments_status() {
	return false;
}
add_filter('comments_open', 'soc_disable_comments_status', 20, 2);
add_filter('pings_open', 'soc_disable_comments_status', 20, 2);

// Hide existing comments
function soc_disable_comments_hide_existing_comments($comments){
	$comments = array();
	return $comments;
}
add_filter('comments_array', 'soc_disable_comments_hide_existing_comments', 10, 2);
