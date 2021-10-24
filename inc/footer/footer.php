<?php

/**
 * Footer Includes
 */

if (!defined('ABSPATH')) exit; // Exit if accessed directly

add_filter('footer_meta_domain', function () {
    return 'www.quantum.de';
});
add_filter('footer_meta_default_mail', function () {
    return 'info@quantum.de';
});
