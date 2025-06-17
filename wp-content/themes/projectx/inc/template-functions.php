<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package projectx
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function projectx_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'projectx_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function projectx_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'projectx_pingback_header' );

function projectx_enqueue_assets() {
	// Enqueue CSS
	wp_enqueue_style(
		'projectx-app',
		get_template_directory_uri() . '/dist/css/app.min.css',
		array(), // Add dependencies if needed
		filemtime( get_template_directory() . '/dist/css/app.min.css' )
	);

	// Enqueue JS
	wp_enqueue_script(
		'projectx-app',
		get_template_directory_uri() . '/dist/js/app.min.js',
		array('jquery'), // Add dependencies if needed
		filemtime( get_template_directory() . '/dist/js/app.min.js' ),
		true // Load in footer
	);
}
add_action( 'wp_enqueue_scripts', 'projectx_enqueue_assets' );
