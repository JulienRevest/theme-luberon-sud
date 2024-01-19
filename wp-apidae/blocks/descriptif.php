<?php
/**
 * Block description
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/descriptif.php.
 *
 * IMPORTANT: on occasion WP-Apidae will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. Be safe and maintain your templates up to date.
 *
 * @package WP-Apidae
 * @version 4.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
?>
<p <?php echo $class; ?>><?php echo $value; ?></p>
