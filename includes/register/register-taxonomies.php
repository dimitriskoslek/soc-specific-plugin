<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/************************ 
** REGISTER TAXONOMIES **
************************/
function soc_register_taxonomies() {

	/* Sector for Project */
	register_taxonomy(
		'sector',
		'project',
		array(
			'label'			=> __('Sector', 'soc'),
			'rewrite'		=> array( 'slug' => 'sector' ),
			'hierarchical'	=> true,
			'labels'		=> array(
				'add_new_item' => __('Add new Sector','soc'),
			),
			'show_in_rest'	=> true,
		)
	);

}
add_action('init', 'soc_register_taxonomies');