<?php
/**
 * Single entity information patrimoine naturel
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/informations/informations-patrimoine-naturel.php.
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

if ( apidae_has_( 'informationsPatrimoineNaturel.classements' ) ) {
	$html  = '<h2>' . esc_html( __( 'Classement patrimoine naturel', 'wp-apidae' ) ) . '</h2>';
	$html .= '<p>' . implode( ', ', $classements ) . '</p>';

	echo apply_filters( 'apidae_single_informations_patrimoine_naturel_classements_html', $html, $classements );
}
if ( apidae_has_( 'informationsPatrimoineNaturel.categories' ) ) {
	$html  = '<h2>' . esc_html( __( 'Catégorie patrimoine naturel', 'wp-apidae' ) ) . '</h2>';
	$html .= '<p>' . implode( ', ', $categories ) . '</p>';

	echo apply_filters( 'apidae_single_informations_patrimoine_naturel_categories_html', $html, $categories );
}

do_action( 'apidae_single_content_prestations' );
do_action( 'apidae_single_content_tarifs' );
do_action( 'apidae_single_content_reservation' );
