<?php
/**
 * Quantum Child Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package quantum-child
 */

add_action( 'wp_enqueue_scripts', 'quantum_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function quantum_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'quantum-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'quantum-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[ 'quantum-style' ]
	);
}
