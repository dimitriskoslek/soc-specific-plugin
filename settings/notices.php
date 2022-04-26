<?php

if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
}

// Notice for Library Users
function soc_library_notice(){

        $user = wp_get_current_user();
        if(in_array('library', (array) $user->roles)){
		echo	'<div class="notice notice-warning">
				<p>Παρακαλώ προσθέστε τις βιβλιοθήκες-τοποθεσίες που σχετίζονται με τον οργανισμό σας στο τέλος της σελίδας προφίλ σας!!</p>
			</div>';
        }

}
add_action('admin_notices', 'soc_library_notice');
