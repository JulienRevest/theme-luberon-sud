<?php
/**
 * Single entity information fête et manifestation
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/informations/informations-fete-et-manifestation.php.
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

if (
	apidae_has_( 'informationsFeteEtManifestation.categories' ) ||
	apidae_has_( 'informationsFeteEtManifestation.themes' ) ||
	apidae_has_( 'informationsFeteEtManifestation.evenementGenerique' ) ||
	apidae_has_( 'informationsFeteEtManifestation.portee' ) ||
	apidae_has_( 'informationsFeteEtManifestation.nbParticipantsAttendu' ) ||
	apidae_has_( 'informationsFeteEtManifestation.nbVisiteursAttendu' )
) {
	$heading = apply_filters( 'apidae_single_informations_fete_manifestation_title', __( 'Informations', 'wp-apidae' ) );
	?>
	<h2><span class="icon-information" aria-hidden="true"></span><?php echo esc_html( $heading ); ?></h2>
	<?php
	apidae_template_infos_cols_start( false );
	if ( apidae_has_( 'informationsFeteEtManifestation.categories', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3><span class="icon-flyer" aria-hidden="true"></span>' . esc_html( __( 'Catégorie de manifestation', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $categories ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_fete_manifestation_categories_html', $html, $categories );
	}
	if ( apidae_has_( 'informationsFeteEtManifestation.themes', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3><span class="icon-fireworks" aria-hidden="true"></span>' . esc_html( __( 'Thèmes', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $themes ) . '</p>';
		$html .= '</div>';
		echo apply_filters( 'apidae_single_informations_fete_manifestation_themes_html', $html, $themes );
	}
	if ( apidae_has_( 'informationsFeteEtManifestation.evenementGenerique', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3><span class="icon-cup" aria-hidden="true"></span>' . esc_html( __( 'Evénements génériques et championnats', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . $evenements_generique . '</p>';
		$html .= '</div>';
		echo apply_filters( 'apidae_single_informations_fete_manifestation_evenement_generique_html', $html, $evenements_generique );
	}
	if ( apidae_has_( 'informationsFeteEtManifestation.portee', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3><span class="icon-megaphone" aria-hidden="true"></span>' . esc_html( __( 'Portée de l\'évènement', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . $portee . '</p>';
		$html .= '</div>';
		echo apply_filters( 'apidae_single_informations_fete_manifestation_portee_html', $html, $portee );
	}
	if ( apidae_has_( 'informationsFeteEtManifestation.nbParticipantsAttendu', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3><span class="icon-group" aria-hidden="true"></span>' . esc_html( __( 'Nombre de participants ou exposants attendus', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . sprintf( _n( '%s personne', '%s personnes', $participants_attendu, 'wp-apidae' ), $participants_attendu ) . '</p>';
		$html .= '</div>';
		echo apply_filters( 'apidae_single_informations_fete_manifestation_participants_attendu_html', $html, $participants_attendu );
	}
	if ( apidae_has_( 'informationsFeteEtManifestation.nbVisiteursAttendu', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3><span class="icon-group" aria-hidden="true"></span>' . esc_html( __( 'Nombre de visiteurs / spectateurs attendus', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . sprintf( _n( '%s personne', '%s personnes', $visiteurs_attendu, 'wp-apidae' ), $visiteurs_attendu ) . '</p>';
		$html .= '</div>';
		echo apply_filters( 'apidae_single_informations_fete_manifestation_visiteurs_attendu_html', $html, $visiteurs_attendu );
	}
	apidae_template_infos_cols_end( false );
}
do_action( 'apidae_single_content_tourisme_affaire' );
do_action( 'apidae_single_content_prestations' );
do_action( 'apidae_single_content_tarifs' );
do_action( 'apidae_single_content_reservation' );
