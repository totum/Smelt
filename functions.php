<?php

// Include ore functions
include (get_template_directory_uri() . '/ore/ore_functions.php');

// Post thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 200, 200, true );
add_image_size( 'single-post-small', 480, 480 );
add_image_size( 'single-post-medium', 640, 9999 );
add_image_size( 'single-post-large', 1024, 768 );
add_image_size( 'single-post-full', 9999, 9999 );

// Remove bloat classes from menu. (pulled from ore)
add_filter('nav_menu_css_class', 'discard_menu_classes', 10, 2);

function register_menus() {
	register_nav_menus(
		array( 'nav-main' => __( 'Top Navigation' ))
	);
}
add_action( 'init', 'register_menus' );

function load_scripts() {
	if (!is_admin()) {
		// !Note: Remember to set scripts to load in footer by last parameter set to true, unless you want it loaded in wp_head.

		// Deregister jquery
		// wp_deregister_script('jquery');

		// Register jQuery through jsDelivr along with other scripts to reduce http requests
		// wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://cdn.jsdelivr.net/g/jquery@2.1", false, null, true);

		// Theme specific scripts

		// Load
	}
}
// add_action('wp_enqueue_scripts', 'load_scripts');

?>