<?php

/**
 * Quantum Child Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package quantum-child
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) exit;


define('QUANTUM_CHILD_VERSION', '0.1.0');
define('QUANTUM_CHILD_SETTINGS', 'quantum-child-settings');
define('QUANTUM_CHILD_DIR', trailingslashit(get_stylesheet_directory()));
define('QUANTUM_CHILD_URI', trailingslashit(esc_url(get_stylesheet_directory_uri())));








add_action('wp_enqueue_scripts', 'quantum_parent_theme_enqueue_styles');

/**
 * Enqueue scripts and styles.
 */
function quantum_parent_theme_enqueue_styles()
{
	wp_enqueue_style(
		'quantum-child-style',
		get_stylesheet_directory_uri() . '/assets/css/minified/style.min.css',
		['quantum-style']
	);
}
