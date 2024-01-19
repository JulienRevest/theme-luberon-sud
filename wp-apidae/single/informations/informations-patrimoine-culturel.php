<?php
/**
 * Single entity information patrimoine culturel
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/informations/informations-patrimoine-culturel.php.
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

if ( apidae_has_( 'informationsPatrimoineCulturel.patrimoineCulturelType' ) ) {
	$heading = apply_filters( 'apidae_single_informations_patrimoine_culturel_patrimoine_title', __( 'Informations', 'wp-apidae' ) );
	?>
	<h2><?php echo esc_html( $heading ); ?></h2>
	<?php
	apidae_template_infos_cols_start( false );
	if ( apidae_has_( 'informationsPatrimoineCulturel.patrimoineCulturelType', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Type de patrimoine culturel', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . $patrimoine_culturel_type . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_patrimoine_culturel_patrimoine_culturel_type_html', $html, $patrimoine_culturel_type );

	}
	if ( apidae_has_( 'informationsPatrimoineCulturel.themes', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Thèmes', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $themes ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_patrimoine_culturel_themes_html', $html, $themes );

	}
	if ( apidae_has_( 'informationsPatrimoineCulturel.categories', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Catégories', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $categories ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_patrimoine_culturel_categories_html', $html, $categories );

	}
	apidae_template_infos_cols_end( false );
}

do_action( 'apidae_single_content_prestations' );
do_action( 'apidae_single_content_tarifs' );
do_action( 'apidae_single_content_reservation' );
