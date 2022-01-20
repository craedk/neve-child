<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! function_exists( 'neve_child_load_css' ) ):
	/**
	 * Load CSS file.
	 */
	function neve_child_load_css() {
		wp_enqueue_style( 'neve-child-style', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'neve-style' ), NEVE_VERSION );
	}
endif;
add_action( 'wp_enqueue_scripts', 'neve_child_load_css', 20 );

// Adding excerpt for page
add_post_type_support( 'page', 'excerpt' );

/**
 * Add image sizes.
 */
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'crae-square-medium-image', 800, 800, true );
}

add_filter( 'crae_square_medium_image_size', function( $size ) {
    return 'crae-square-medium-image';
});
