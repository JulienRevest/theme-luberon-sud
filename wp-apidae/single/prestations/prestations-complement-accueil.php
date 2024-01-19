<?php
/**
 * Single entity prestations complement accueil
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/prestations/prestations-complement-accueil.php.
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

$heading = apply_filters( 'apidae_single_prestation_complement_accueil_title', __( 'Complément accueil', 'wp-apidae' ) );

?>
<h2><?php echo esc_html( $heading ); ?></h2>
<div class="dae-single-presta-cols">
	<div class="dae-single-presta-block">
		<p><?php echo esc_html( $values ); ?></p>
	</div>
</div>

