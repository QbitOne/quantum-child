<?php

/**
 * Template part for the footer
 *
 * @since 0.2.0
 */

if (!defined('ABSPATH')) exit; // Exit if accessed directly
?>

<footer id="footer" class="site-footer">
	<div class="qu-container">
		<div>
			Platz für footer content
		</div>
		<div id="footerbar" class="qu-flex justify--between">
			<?php get_template_part('template-parts/footer/copyright'); ?>
			<?php get_template_part('template-parts/footer/meta'); ?>
			<?php get_template_part('template-parts/footer/social'); ?>
		</div>
	</div>
</footer>
