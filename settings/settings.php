<?php

if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
}

include './hide-from-dashboard.php';

/* Disable Gutenberg block editor */
add_filter('use_block_editor_for_post', '__return_false', 10);

/* Disable Gutenberg block editor for Widgets */
add_filter('use_widgets_block_editor', '__return_false');
