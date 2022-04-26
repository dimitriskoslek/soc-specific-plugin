<?php

if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
}

/************************
** REGISTER USER ROLES **
************************/
add_role('library', __('Library','soc'), array(
	'read' => true,
));
add_role('pr_manager', __('Project Manager','soc'), array(
	'read' => true,
));

/***************************************
** CUSTOM CAPABILITIES FOR USER ROLES **
***************************************/
function soc_add_user_role_capabilities(){

	// Library
	$role = get_role('library');
	$role->add_cap('projects_managment');
	$role->add_cap('events_managment');

	// Project Manager
	$role = get_role('pr_manager');
	$role->add_cap('events_managment');

}
add_action( 'admin_init', 'soc_add_user_role_capabilities');
