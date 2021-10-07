<?php

/**
 * Template part for the footer
 * 
 * @since 0.2.0
 */

if (!defined('ABSPATH')) exit; // Exit if accessed directly
?>

<footer>
    <div>
        Platz für footer content
    </div>
    <div id="footerbar">
        <?php get_template_part('template-parts/footer/copyright'); ?>
        <?php get_template_part('template-parts/footer/meta'); ?>
        <?php get_template_part('template-parts/footer/social'); ?>
    </div>
</footer>