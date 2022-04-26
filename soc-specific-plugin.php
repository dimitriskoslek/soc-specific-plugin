<?php
/*
	Plugin Name: Sociality Specific Plugin
	Description: This is a site-specific plugin for sociality.gr, created by Sociality
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

include 'settings/gutenberg.php';
include 'settings/hide-from-dashboard.php';
include 'settings/notices.php';

include 'register/register-post-types.php';
include 'register/register-taxonomies.php';
include 'register/register-user-roles.php';

include 'shortcodes.php';
