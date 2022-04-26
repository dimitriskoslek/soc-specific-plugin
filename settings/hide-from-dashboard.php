<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/***********************************
** Remove sections from admin bar **
***********************************/
function soc_hide_from_dashboard(){
	
	/*
	** Remove for non-admin
	*/
	if(!current_user_can('administrator')){
		remove_menu_page('index.php');
		remove_menu_page('edit-comments.php');
		remove_menu_page('plugins.php');
		remove_menu_page('users.php');
		remove_menu_page('options-general.php');
	}
}
add_action('admin_menu', 'soc_hide_from_dashboard');
