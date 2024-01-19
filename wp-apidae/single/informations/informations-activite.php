<?php
/**
 * Single entity information activité
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/informations/informations-activites.php.
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

if ( apidae_has_( 'informationsActivite.activitesSportives', null ) ) {
	$heading_activite_sportive = apply_filters( 'apidae_single_informations_activite_sportive_title', __( 'Informations complémentaires', 'wp-apidae' ) );
	?>
	<h2><?php echo esc_html( $heading_activite_sportive ); ?></h2>
	<?php
	apidae_template_infos_cols_start( false );

	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Activités proposées', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . implode( ', ', $activites_sportives ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_activite_activites_sportives_html', $html, $activites_sportives );

	if ( apidae_has_( 'informationsActivite.categories', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Catégories d\'activités', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $categories ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_activite_categories_html', $html, $categories );
	}
	if ( apidae_has_( 'informationsActivite.dureeSeance', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Durée de la scéance', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . sprintf( _n( '%s minute', '%s minutes', $duree_seance, 'wp-apidae' ), $duree_seance ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_activite_duree_seance_html', $html, $duree_seance );
	}
	if ( apidae_has_( 'informationsActivite.nombreJours', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Nombre de jours', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . sprintf( _n( '%s jour', '%s jours', $nombre_jours, 'wp-apidae' ), $nombre_jours ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_activite_nombre_jours_html', $html, $nombre_jours );
	}

	apidae_template_infos_cols_end( false );
}

if ( apidae_has_( 'informationsActivite.activitesCulturelles', null ) ) {
	$heading_activite_culturelle = apply_filters( 'apidae_single_informations_activite_sportive_title', __( 'Informations complémentaires', 'wp-apidae' ) );
	?>
	<h2><?php echo esc_html( $heading_activite_culturelle ); ?></h2>
	<?php
	apidae_template_infos_cols_start( false );

	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Activités proposées', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . implode( ', ', $activite_culturelle ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_activite_activites_culturelles_html', $html, $activite_culturelle );

	if ( apidae_has_( 'informationsActivite.categories', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Catégories d\'activités', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $categories ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_activite_categories_html', $html, $categories );

	}
	if ( apidae_has_( 'informationsActivite.dureeSeance', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Durée de la scéance', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . sprintf( _n( '%s minute', '%s minutes', $duree_seance, 'wp-apidae' ), $duree_seance ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_activite_duree_seance_html', $html, $duree_seance );

	}
	if ( apidae_has_( 'informationsActivite.nombreJours', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Nombre de jours', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . sprintf( _n( '%s jour', '%s jours', $nombre_jours, 'wp-apidae' ), $nombre_jours ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_activite_nombre_jours_html', $html, $nombre_jours );

	}

	apidae_template_infos_cols_end( false );
}

do_action( 'apidae_single_content_prestations' );
do_action( 'apidae_single_content_tarifs' );
do_action( 'apidae_single_content_reservation' );
