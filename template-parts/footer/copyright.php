<?php

/**
 * Template part for Copyright stuff
 * 
 * @since 0.2.0
 */

if (!defined('ABSPATH')) exit; // Exit if accessed directly

$copyright_start_date = "'Startdatum'";
$copyright_end_date = date('Y');
?>

<div>
    <small>Copyright &copy; <?php echo $copyright_start_date . ' - ' . $copyright_end_date; ?></small>
</div>