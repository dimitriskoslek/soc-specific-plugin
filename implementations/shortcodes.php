<?php

if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
}

/*****************************
** NETWORKS ARCHIVE DISPLAY **
*****************************/
function fn_display_networks(){

	// Start buffer
	ob_start();

	$network_args = array(
		'post_type'		=> array('network'),
		'post_status'		=> array('publish'),
		'posts_per_page'	=> -1,
	);
	$network_items = new WP_Query($network_args);

	if($network_items->have_posts())
	{
		?>
		<div class="row network-items-container">
			<?php
			while($network_items->have_posts())
			{
				$network_items->the_post();
				$item_title = get_the_title();
				$item_thumbnail_src = get_the_post_thumbnail_url();
				$item_permalink = get_the_permalink(); ?>


				<a class="network-item col-md-4 col-sm-6 col-xs-12" href="<?php echo $item_permalink; ?>">
					<div class="thumbnail"><img src="<?php echo $item_thumbnail_src; ?>"></div>
					<div class="title"><h5><?php echo $item_title; ?></h5></div>
				</a>


				<?php
			} ?>
		</div>
		<?php
	}
	wp_reset_postdata();

	return ob_get_clean();
}
add_shortcode('display_networks', 'fn_display_networks');
