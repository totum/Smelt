<?php

// Post thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 320, 320, true ); // Regular thumbnail hard-cropped for gallery-style lists.
add_image_size( 'single-post-xsmall', 200, 200 ); // X-small for mobile thumbs
add_image_size( 'single-post-small', 480, 480 ); // Small for summaries
add_image_size( 'single-post-medium', 640, 9999 ); // Medium-size for inserting in posts
add_image_size( 'single-post-large', 1024, 768 ); // Large size for slimbox view
add_image_size( 'single-post-xlarge', 1280, 1024 ); // XLarge size for smth in the future
add_image_size( 'single-post-full', 9999, 9999 ); // Full-size image for whatever!

function register_my_menus() {
	register_nav_menus(
		array( 'site-nav' => __( 'Site Navigation' ))
	);
}
add_action( 'init', 'register_my_menus' );

/*function init_scripts() {
	if (!is_admin()) {
		wp_register_script('mobile-nav', get_template_directory_uri().'/js/mobile-nav.js', array('jquery'));
		wp_enqueue_script('mobile-nav');
        wp_register_script('ajax-posts-init', get_template_directory_uri().'/js/ajax-posts.js', array('jquery'));
        wp_enqueue_script('ajax-posts-init');
        wp_register_script('imagefit', get_template_directory_uri().'/js/jquery.imagefit-0.2.js', array('jquery'));
        wp_enqueue_script('imagefit');
        wp_register_script('colorbox', get_template_directory_uri().'/js/colorbox/jquery.colorbox-min.js', array('jquery'));
        wp_enqueue_script('colorbox');
        
		// Jquery dependencies, automatically calls jquery in wp
	}
}
add_action('init', 'init_scripts');*/

?>