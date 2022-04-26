<?php

if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
}

// Notice for Library Users
function soc_library_notice(){

        $user = wp_get_current_user();
        if(in_array('library', (array) $user->roles)){
		echo	'<div class="notice notice-warning">';
		echo		'<p>' . __('Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'soc') . '</p>';
		echo	'</div>';
        }

}
add_action('admin_notices', 'soc_library_notice');
