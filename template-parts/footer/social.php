<?php

/**
 * Template part for social media icons
 * 
 * @since 0.2.0
 */

if (!defined('ABSPATH')) exit; // Exit if accessed directly


$footer_social_icons = [
    'twitter' => [
        'name'  => 'Twitter',
        'url'   => 'https://twitter.com/qbitone',
    ],
    'facebook' => [
        'name'  => 'Facebook',
        'url'   => 'https://facebook.com/qbitone',
    ],
    'instagram' => [
        'name'  => 'Instagram',
        'url'   => 'https://instragram.com/qbitone',
    ],
    'linkedin' => [
        'name'  => 'LinkedIn',
        'url'   => 'https://linkedin.com/company/qbitone',
    ],
];
?>

<ul class="">

    <?php
    /**
     * Loop over all defined social entries
     */
    foreach ($footer_social_icons as $key => $value) : ?>
        <li>
            <small>
                <a rel="nofollow noopener noreferrer" target="_blank" aria-label="<?php echo $value['name']; ?>" href="<?php echo $value['url']; ?>">
                    <img class="" src="<?php echo get_stylesheet_directory_uri() . '/assets/svg/social/' . $key . '-icon.svg'; ?>">
                </a>
            </small>
        </li>
    <?php endforeach; ?>
</ul>


<!-- 

        von QbitOne Website übernommen
        TODO: löschen wenn nicht mehr benötigt

 -->
<!-- <ul class="blog-social-list">
    <li>
        <span>
            <a rel="nofollow noopener noreferrer" target="_blank" aria-label="Twitter" href="https://twitter.com/qbitone">
                <img class="site-footer-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/twitter-icon.svg" alt="">
            </a>
        </span>
    </li>
    <li>
        <span>
            <a rel="nofollow noopener noreferrer" target="_blank" aria-label="Facebook" href="https://facebook.com/qbitone">
                <img class="site-footer-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/facebook-icon.svg" alt="">
            </a>
        </span>
    </li>
    <li>
        <span>
            <a rel="nofollow noopener noreferrer" target="_blank" aria-label="Instagram" href="https://instagram.com/qbitone">
                <img class="site-footer-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/instagram-icon.svg" alt="">
            </a>
        </span>
    </li>
    <li>
        <span>
            <a rel="nofollow noopener noreferrer" target="_blank" aria-label="LinkedIn" href="https://de.linkedin.com/company/qbitone">
                <img class="site-footer-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/linkedin-icon.svg" alt="">
            </a>
        </span>
    </li>
</ul> -->