<?php
/**
 * Single entity information équipement
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/informations/informations-equipement.php.
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

if ( apidae_has_( 'informationsEquipement.itineraire' ) ) {

	$duree = '';

	if ( apidae_has_( 'informationsEquipement.itineraire.dureeJournaliere', null ) ) {

		$duree = sprintf(
			'<li><span class="icon-clock" aria-hidden="true"></span>%1$s</li>',
			date( 'G\Hi', mktime( 0, $duree_journaliere ) )
		);
	}

	$distance = '';

	if ( apidae_has_( 'informationsEquipement.itineraire.distance', null ) ) {
		$distance = sprintf(
			'<li><span class="icon-distance" aria-hidden="true"></span>%1$s</li>',
			$itineraire_distance . __( ' KM', 'wp-apidae' )
		);
	}

	// Reccup Altitude maxi dans informationsEquipement.itineraire.altitudeMaximum
	$altitude = '';
	if ( apidae_has_( 'informationsEquipement.itineraire.altitudeMaximum', null ) ) {
		$altitude = sprintf(
			'<li><span class="icon-terrain" aria-hidden="true"></span>%1$s</li>',
			$altitude_maximum . __( ' m', 'wp-apidae' )
		);
	}

	// Reccup du niveau dans type de clientèle (prestations.typesClientele).
	$niveau = '';
	if ( apidae_has_( 'prestations.typesClientele', null ) ) {
		$niv = apidae_get_the_( 'prestations.typesClientele' );
		if ( $niv[0]['id'] === 587 ) {
			$icon_class = esc_attr( 'icon-easy' );
			$niv_text = esc_html( 'Facile', 'luberon-sud' );
		}

		if ( $niv[0]['id'] === 588 ) {
			$icon_class = esc_attr( 'icon-medium' );
			$niv_text = esc_html( 'Modéré', 'luberon-sud' );
		}

		if ( $niv[0]['id'] === 589 ) {
			$icon_class = esc_attr( 'icon-hard' );
			$niv_text = esc_html( 'Difficile', 'luberon-sud' );
		}

		if ( $niv[0]['id'] === 590 ) {
			$icon_class = esc_attr( 'icon-hard' );
			$niv_text = esc_html( 'Très difficile', 'luberon-sud' );
		}

		if ( isset( $icon_class ) && isset( $niv_text ) ) {
			$niveau = sprintf(
				'<li><span class="%1$s"></span>%2$s</li>',
				$icon_class,
				$niv_text
			);
		}
	}

	$resume_rando = '';

	// Affichage du bloc résumé de rando avec pictos
	if ( ! empty( $duree ) || ! empty( $distance ) || ! empty( $altitude ) || ! empty( $niveau ) ) {
		$resume_rando = sprintf(
			'<ul class="resume-rando">%1$s%2$s%3$s%4$s</ul>',
			$duree,
			$distance,
			$altitude,
			$niveau
		);
	}

	$type_it = '';
	if ( apidae_has_( 'informationsEquipement.itineraire.itineraireType', null ) ) {
		$type_it = sprintf(
			'<p><span class="info-rando-title">%1$s :</span> %2$s</p>',
			esc_html( __( 'Type d\'itinéraire', 'wp-apidae' ) ),
			$itineraire_type
		);

	}

	$deniv_pos = '';
	if ( apidae_has_( 'informationsEquipement.itineraire.denivellationPositive', null ) ) {
		$deniv_pos = sprintf(
			'<p><span class="info-rando-title">%1$s :</span> +%2$s</p>',
			esc_html( __( 'Dénivellation positive', 'wp-apidae' ) ),
			$denivellation_positive . __( ' m', 'wp-apidae' )
		);
	}

	$pass_delicat = '';
	if ( apidae_has_( 'informationsEquipement.itineraire.passagesDelicats', null ) ) {
		$pass_delicat = sprintf(
			'<p><span class="info-rando-title">%1$s :</span> %2$s</p>',
			esc_html( __( 'Passages délicats', 'wp-apidae' ) ),
			$passages_delicats
		);
	}

	$ref_carto = '';
	if ( apidae_has_( 'informationsEquipement.itineraire.referencesCartographiques', null ) ) {
		$pass_delicat = sprintf(
			'<p><span class="info-rando-title">%1$s :</span> %2$s</p>',
			esc_html( __( 'Références cartographiques', 'wp-apidae' ) ),
			$references_cartographiques
		);
	}

	$ref_topo = '';
	if ( apidae_has_( 'informationsEquipement.itineraire.referencesTopoguides', null ) ) {
		$pass_delicat = sprintf(
			'<p><span class="info-rando-title">%1$s :</span> %2$s</p>',
			esc_html( __( 'Références topoguides', 'wp-apidae' ) ),
			$references_topoguides
		);
	}

	echo sprintf(
		'<div class="dae-rando">
		<div class="rando-col-main">
		<h2>%1$s</h2>
		%2$s
		%3$s
		%4$s
		%5$s
		%6$s
		%7$s
		</div>',
		esc_html( 'Détail du parcours', 'luberon-sud' ),
		wp_kses_post( $resume_rando ),
		wp_kses_post( $type_it ),
		wp_kses_post( $deniv_pos ),
		wp_kses_post( $pass_delicat ),
		wp_kses_post( $ref_carto ),
		wp_kses_post( $ref_topo ),
	);

	do_action( 'apidae_single_multimedia' );

	echo '</div>';

}

