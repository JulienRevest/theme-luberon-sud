<?php
/**
 * Single entity prestations age minimum
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/prestations/prestations-age-min.php.
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

$heading = apply_filters( 'apidae_single_prestation_age_min_title', __( 'Âge minimum', 'wp-apidae' ) );
?>
<div class="dae-single-infos-block">
	<h3><?php echo esc_html( $heading ); ?></h3>
	<p><?php echo esc_html( $values . __( ' ans', 'wp-apidae' ) ); ?></p>
</div>
