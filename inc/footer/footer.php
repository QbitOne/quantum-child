<?php

/**
 * Include footer stuff
 * 
 * @since 0.2.0
 */

if (!defined('ABSPATH')) exit; // Exit if accessed directly

if (!function_exists('quantum_child_inc_footer')) :
    function quantum_child_inc_footer()
    {
        get_template_part('template-parts/footer/footer');
    }
    add_action('quantum_footer', 'quantum_child_inc_footer');
endif;
