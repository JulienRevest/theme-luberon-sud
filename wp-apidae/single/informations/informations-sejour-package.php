<?php
/**
 * Single entity information séjour package
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/informations/informations-sejour-package.php.
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
	apidae_has_( 'informationsSejourPackage.activitesSportives' ) ||
	apidae_has_( 'informationsSejourPackage.activitesCulturelles' ) ||
	apidae_has_( 'informationsSejourPackage.activiteCategories' ) ||
	apidae_has_( 'informationsSejourPackage.lieuDePratique' )
	) {
		$heading = apply_filters( 'apidae_single_informations_sejour_package_activites_title', __( 'Activités et prestations', 'wp-apidae' ) );
		?>
		<h2><?php echo esc_html( $heading ); ?></h2>
		<?php
		apidae_template_infos_cols_start( false );
	if ( apidae_has_( 'informationsSejourPackage.activitesSportives', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Activités sportives', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $activites_sportives ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_sejour_package_activites_sportives_html', $html, $activites_sportives );
	}
	if ( apidae_has_( 'informationsSejourPackage.activitesCulturelles', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Activités culturelles', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $activites_culturelles ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_sejour_package_activites_culturelles_html', $html, $activites_culturelles );
	}
	if ( apidae_has_( 'informationsSejourPackage.activiteCategories', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Catégories d\'activité', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $activite_categories ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_sejour_package_activite_categories_html', $html, $activite_categories );
	}
	if ( apidae_has_( 'informationsSejourPackage.lieuDePratique', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Lieu de pratique', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . $lieu_de_pratique . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_sejour_package_lieu_de_pratique_html', $html, $lieu_de_pratique );
	}
	apidae_template_infos_cols_end( false );
}

if (
	apidae_has_( 'informationsSejourPackage.typesHebergement' ) ||
	apidae_has_( 'informationsSejourPackage.formuleHebergement' ) ||
	apidae_has_( 'informationsSejourPackage.transports' ) ||
	apidae_has_( 'informationsSejourPackage.nombreJours' ) ||
	apidae_has_( 'informationsSejourPackage.nombreNuits' )
	) {
		$heading_annexe = apply_filters( 'apidae_single_informations_sejour_package_annexe_title', __( 'Prestations annexes', 'wp-apidae' ) );
		?>
		<h2><?php echo esc_html( $heading_annexe ); ?></h2>
		<?php
		apidae_template_infos_cols_start( false );
	if ( apidae_has_( 'informationsSejourPackage.typesHebergement', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Types d\'hébergement', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $types_hebergement ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_sejour_package_types_hebergement_html', $html, $types_hebergement );
	}
	if ( apidae_has_( 'informationsSejourPackage.formuleHebergement', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Formule d\'hébergement', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . $formule_hebergement . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_sejour_package_formule_hebergement_html', $html, $formule_hebergement );
	}
	if ( apidae_has_( 'informationsSejourPackage.transports', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Transports', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $package_transports ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_sejour_package_transports_html', $html, apidae_get_the_( 'informationsSejourPackage.transports' ) );
	}
	if ( apidae_has_( 'informationsSejourPackage.nombreJours', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Nombre de jours', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . sprintf( _n( '%s jour', '%s jours', $nombre_jours, 'wp-apidae' ), $nombre_jours ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_sejour_package_nombre_jours_html', $html, $nombre_jours );
	}
	if ( apidae_has_( 'informationsSejourPackage.nombreNuits', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Nombre de nuits', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . sprintf( _n( '%s nuit', '%s nuits', $nombre_nuits, 'wp-apidae' ), $nombre_nuits ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_sejour_package_nombre_nuits_html', $html, $nombre_nuits );
	}
	apidae_template_infos_cols_end( false );
}

do_action( 'apidae_single_content_tarifs' );
do_action( 'apidae_single_content_prestations' );
do_action( 'apidae_single_content_reservation' );

