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


define('QUANTUM_PROJECT_VERSION', '0.1.0');

define('QUANTUM_CHILD_VERSION', '0.2.0');
define('QUANTUM_CHILD_SETTINGS', 'quantum-child-settings');
define('QUANTUM_CHILD_DIR', trailingslashit(get_stylesheet_directory()));
define('QUANTUM_CHILD_URI', trailingslashit(esc_url(get_stylesheet_directory_uri())));


require_once QUANTUM_CHILD_DIR . 'inc/core/enqueue-scripts.php';

require_once QUANTUM_CHILD_DIR . 'inc/header/header.php';
require_once QUANTUM_CHILD_DIR . 'inc/footer/footer.php';
