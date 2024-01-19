<?php
/**
 * Single entity prestations animaux acceptes
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/prestations/prestations-animaux-acceptes.php.
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

$heading = apply_filters( 'apidae_single_prestation_animaux_accepte_title', __( 'Animaux acceptés', 'wp-apidae' ) );
$animaux = apidae_get_the_( 'prestations.animauxAcceptes', null, array() );
$icon    = '';
switch ( $animaux ) {
	case 'ACCEPTES':
		$icon = '<span class="icon-pets" aria-hidden="true"></span>';
		break;
	case 'NON_ACCEPTES':
		$icon = '<span class="icon-no-pets" aria-hidden="true"></span>';
		break;
}
?>
<div class="dae-single-infos-block">
	<h3><?php echo esc_html( $heading ); ?></h3>
	<p><?php echo $icon . esc_html( $values ); ?></p>
</div>
