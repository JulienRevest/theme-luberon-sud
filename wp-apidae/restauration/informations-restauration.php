<?php
/**
 * Single entity information restauration
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/informations/informations-restauration.php.
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

if ( apidae_has_( 'informationsRestauration.capacite', null ) ) {
	$html  = '<h2><span class="icon-service" aria-hidden="true"></span>' . esc_html( __( 'Capacité', 'wp-apidae' ) ) . '</h2>';
	$html .= '<div class="dae-single-infos-cols">';
	if ( apidae_has_( 'informationsRestauration.capacite.nombreSalles', null ) ) {
		$html .= '<div class="dae-single-infos-block"><div><span class="icon-rooms" aria-hidden="true"></span><strong>' . __( 'Nombre de salle : ', 'wp-apidae' ) . '</strong><p>' . $nombre_salles . '</p></div></div>';
	}
	if ( apidae_has_( 'informationsRestauration.capacite.nombreSallesClimatisees', null ) ) {
		$html .= '<div class="dae-single-infos-block"><div><span class="icon-snowflake" aria-hidden="true"></span><strong>' . __( 'Nombre de salle climatisées : ', 'wp-apidae' ) . '</strong><p>' . $nombre_salles_climatisees . '</p></div></div>';
	}
	if ( apidae_has_( 'informationsRestauration.capacite.nombreMaximumCouverts', null ) ) {
		$html .= '<div class="dae-single-infos-block"><div><span class="icon-dinner" aria-hidden="true"></span><strong>' . __( 'Nombre de couverts : ', 'wp-apidae' ) . '</strong><p>' . $nombre_maximum_couverts . '</p></div></div>';
	}
	if ( apidae_has_( 'informationsRestauration.capacite.nombreCouvertsTerrasse', null ) ) {
		$html .= '<div class="dae-single-infos-block"><div><span class="icon-terrace" aria-hidden="true"></span><strong>' . __( 'Nombre de couverts en terrasse : ', 'wp-apidae' ) . '</strong><p>' . $nombre_couverts_terrasse . '</p></div></div>';
	}
	$html .= '</div>';
	echo apply_filters( 'apidae_single_informations_restauration_capacite_html', $html, $categories, $nombre_salles, $nombre_salles_climatisees, $nombre_maximum_couverts, $nombre_couverts_terrasse );
}
if ( apidae_has_( 'informationsRestauration.capacite.descriptionSalles', null ) ) {
	$html  = '<h2>' . esc_html( __( 'Description salles', 'wp-apidae' ) ) . '</h2>';
	$html .= '<div class="dae-single-presta-cols">';
	$html .= '<div class="dae-single-presta-block">';
	$html .= '<p>' . $description_salles . '</p>';
	$html .= '</div>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_restauration_capacite_description_salles_html', $html, $description_salles );
}

do_action( 'apidae_single_content_tourisme_affaire' );
do_action( 'apidae_single_content_prestations' );
do_action( 'apidae_single_content_tarifs' );
do_action( 'apidae_single_content_reservation' );
