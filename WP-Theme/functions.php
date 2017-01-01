<?php

/**
 * Dequeue the jQuery UI script.
 *
 * Hooked to the wp_print_scripts action, with a late priority (100),
 * so that it is after the script was enqueued.
 */


add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );


function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' 	=> __( 'Primary Menu', 'treehouse-portfolio' )			
		)
	);

}
add_action( 'init', 'register_theme_menus' );



function wpmi_theme_styles() {


	wp_enqueue_style( 'foundation_min_css', get_template_directory_uri() . '/css/foundation.min.css');
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');
	
}

add_action('wp_enqueue_scripts', 'wpmi_theme_styles');


function wpmi_theme_js() {

	wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false);
	wp_enqueue_script( 'foundation_min_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'app_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_min_js'), '', true );
}

add_action('wp_enqueue_scripts', 'wpmi_theme_js');

// look up No conflict jQuery code on wp codex

?>