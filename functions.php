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

add_theme_support( 'post-thumbnails' );

add_image_size( 'crae-square-medium-image', 800, 800, true );

add_filter( 'image_size_names_choose', 'my_custom_sizes' );

function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'crae-square-medium-image' => __( 'Square for two cols' ),
    ) );
}
