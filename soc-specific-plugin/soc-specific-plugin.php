<?php
/*
	Plugin Name: Sociality Specific Plugin
	Description: This is a site-specific plugin for sociality.gr, created by Sociality
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

include 'includes/register/soc-register-post-types.php';
include 'includes/register/soc-register-taxonomies.php';

include 'includes/soc-hide-from-admin.php';
include 'includes/soc-shortcodes.php';