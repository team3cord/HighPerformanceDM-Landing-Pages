<?php
/**
 * HPDM theme functions and definitions.
 */
 
 // Enable Featured Images
add_theme_support( 'post-thumbnails' ); 
 
 // Register Navigation Menus
function custom_navigation_menus() {

	$locations = array(
		'main_menu'  => __( 'Main Menu', 'text_domain' ),
	);
	register_nav_menus( $locations );

}

// Hook into the 'init' action
add_action( 'init', 'custom_navigation_menus' );