<?php
/*
	Plugin Name: Sociality Specific Plugin
	Description: This is a site-specific plugin for sociality.gr, created by Sociality
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

include 'settings/settings.php';

include 'includes/register/register-post-types.php';
include 'includes/register/register-taxonomies.php';
include 'includes/shortcodes.php';
