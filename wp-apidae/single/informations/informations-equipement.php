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

do_action( 'apidae_single_content_ouvertures' );

if ( apidae_has_( 'informationsEquipement.activites' ) ) {

	$heading_equipement_activites = apply_filters( 'apidae_single_informations_equipement_activites_title', __( 'Types d\'activité / équipement', 'wp-apidae' ) );
	?>
	<h2><?php echo esc_html( $heading_equipement_activites ); ?></h2>
	<?php
	apidae_template_infos_cols_start( false );
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<p>' . implode( ', ', $activites ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_equipement_activites_html', $html, $activites );

	apidae_template_infos_cols_end( false );
}

if ( apidae_has_( 'informationsEquipement.itineraire' ) ) {

	$heading_info_itineraire = apply_filters( 'apidae_single_informations_equipement_itineraire_title', __( 'Informations itinéraire', 'wp-apidae' ) );
	?>
	<h2><?php echo esc_html( $heading_info_itineraire ); ?></h2>
	<?php
	apidae_template_infos_cols_start( false );
	if ( apidae_has_( 'informationsEquipement.itineraire.distance', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Distance', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . $itineraire_distance . __( ' km', 'wp-apidae' ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_equipement_itineraire_distance_html', $html, $itineraire_distance );

	}
	if ( apidae_has_( 'informationsEquipement.itineraire.itineraireType', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Type d\'itinéraire', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . $itineraire_type . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_equipement_itineraire_type_html', $html, $itineraire_type );

	}
	if ( apidae_has_( 'informationsEquipement.itineraire.itineraireBalise', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Iitinéraire balisé', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . $itineraire_balise . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_equipement_itineraire_balise_html', $html, $itineraire_balise );

	}
	if ( apidae_has_( 'informationsEquipement.itineraire.precisionsBalisage', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Précisions de balisage', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . $precisions_balisage . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_equipement_precisions_balisage_html', $html, $precisions_balisage );

	}
	if ( apidae_has_( 'informationsEquipement.itineraire.denivellationPositive', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Dénivellation positive', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . $denivellation_positive . __( ' m', 'wp-apidae' ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_equipement_itineraire_denivellation_positive_html', $html, $denivellation_positive );

	}
	if ( apidae_has_( 'informationsEquipement.itineraire.denivellationNegative', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Dénivellation négative', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . $denivellation_negative . __( ' m', 'wp-apidae' ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_equipement_itineraire_denivellation_negative_html', $html, $denivellation_negative );

	}
	if ( apidae_has_( 'informationsEquipement.itineraire.penteMoyenne', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Pente moyenne', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . $pente_moyenne . __( ' %', 'wp-apidae' ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_equipement_itineraire_pente_moyenne_html', $html, $pente_moyenne );

	}
	if ( apidae_has_( 'informationsEquipement.itineraire.altitudeMoyenne', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Altitude moyenne', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . $altitude_moyenne . __( ' m', 'wp-apidae' ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_equipement_itineraire_altitude_moyenne_html', $html, $altitude_moyenne );

	}
	if ( apidae_has_( 'informationsEquipement.itineraire.altitudeMaximum', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Altitude maximum', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . $altitude_maximum . __( ' m', 'wp-apidae' ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_equipement_itineraire_altitude_maximum_html', $html, $altitude_maximum );

	}
	if ( apidae_has_( 'informationsEquipement.itineraire.dureeJournaliere', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Durée journalière', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . $duree_journaliere . __( ' mn', 'wp-apidae' ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_equipement_itineraire_duree_journaliere_html', $html, $duree_journaliere );

	}
	if ( apidae_has_( 'informationsEquipement.itineraire.dureeItinerance', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Durée itinérance', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . sprintf( _n( '%s jour', '%s jours', $duree_itinerance, 'wp-apidae' ), $duree_itinerance ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_equipement_itineraire_duree_itinerance_html', $html, $duree_itinerance );

	}
	if ( apidae_has_( 'informationsEquipement.itineraire.naturesTerrain', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Nature du terrain', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $natures_terrain ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_equipement_itineraire_natures_terrain_html', $html, $natures_terrain );

	}
	apidae_template_infos_cols_end( false );

	if ( apidae_has_( 'informationsEquipement.itineraire.passagesDelicats', null ) ) {
		$html  = '<h2>' . esc_html( __( 'Passages délicats', 'wp-apidae' ) ) . '</h2>';
		$html .= '<p>' . $passages_delicats . '</p>';

		echo apply_filters( 'apidae_single_informations_equipement_itineraire_passages_delicats_html', $html, $passages_delicats );
	}
	if ( apidae_has_( 'informationsEquipement.itineraire.referencesCartographiques', null ) ) {
		$html  = '<h2>' . esc_html( __( 'Références cartographiques', 'wp-apidae' ) ) . '</h2>';
		$html .= '<p>' . $references_cartographiques . '</p>';

		echo apply_filters( 'apidae_single_informations_equipement_itineraire_references_cartographiques_html', $html, $references_cartographiques );
	}
	if ( apidae_has_( 'informationsEquipement.itineraire.referencesTopoguides', null ) ) {
		$html  = '<h2>' . esc_html( __( 'Références topoguides', 'wp-apidae' ) ) . '</h2>';
		$html .= '<p>' . $references_topoguides . '</p>';

		echo apply_filters( 'apidae_single_informations_equipement_itineraire_references_topoguides_html', $html, $references_topoguides );
	}
}

do_action( 'apidae_single_content_prestations' );
do_action( 'apidae_single_content_tarifs' );
do_action( 'apidae_single_content_reservation' );
