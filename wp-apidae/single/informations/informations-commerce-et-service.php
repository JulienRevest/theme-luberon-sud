<?php
/**
 * Single entity information commerce et service
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/informations/informations-commerce-et-service.php.
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

do_action( 'apidae_single_content_ouvertures' );

if ( $commerce_et_service_type || $commerce_et_service_type_detail ) {
	$heading = apply_filters( 'apidae_single_informations_commerce_et_service_title', __( 'Classification', 'wp-apidae' ) );
	?>
	<h2><?php echo esc_html( $heading ); ?></h2>
	<?php
	apidae_template_infos_cols_start( false );
	if ( $commerce_et_service_type ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Type de commerce et service', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $commerce_et_service_type ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_commerce_et_service_type_html', $html, $commerce_et_service_type );
	}

	if ( $commerce_et_service_type_detail ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Types détaillés', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $commerce_et_service_type_detail ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_commerce_et_service_type_html', $html, $commerce_et_service_type_detail );
	}
	apidae_template_infos_cols_end( false );
}

do_action( 'apidae_single_content_prestations' );
do_action( 'apidae_single_content_tarifs' );
do_action( 'apidae_single_content_reservation' );
