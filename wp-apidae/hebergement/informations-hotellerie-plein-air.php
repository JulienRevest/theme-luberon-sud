<?php
/**
 * Single entity information hôtellerie plein air
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/informations/informations-hotellerie-plein-air.php.
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
	apidae_has_( 'informationsHotelleriePleinAir.capacite.superficie' ) ||
	apidae_has_( 'informationsHotelleriePleinAir.capacite.caravaneige' ) ||
	apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreEmplacementsClasses' ) ||
	apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreEmplacementsDeclares' ) ||
	apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreEmplacementsNus' ) ||
	apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreEmplacementsPassagesNus' ) ||
	apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreEmplacementsResidentielsNus' ) ||
	apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreEmplacementsResidentielsNus' )
	) {
	$heading_capacite = apply_filters( 'apidae_single_informations_hotellerie_plein_air_capacite_title', __( 'Capacités', 'wp-apidae' ) );
	?>
	<h2><span class="icon-camping" aria-hidden="true"></span><?php echo esc_html( $heading_capacite ); ?></h2>
	<?php
	apidae_template_infos_cols_start( false );
	if ( apidae_has_( 'informationsHotelleriePleinAir.capacite.superficie' ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-surface" aria-hidden="true"></span><strong>' . esc_html( __( 'Superficie', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . $superficie . __( ' m²', 'wp-apidae' ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_plein_air_capacite_superficie_html', $html, $superficie );

	}
	if ( apidae_has_( 'informationsHotelleriePleinAir.capacite.caravaneige', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-caravan" aria-hidden="true"></span><strong>' . esc_html( __( 'Caravaneigne', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . __( 'Oui', 'wp-apidae' ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_plein_air_capacite_caravaneige_html', $html, $caravaneige );

	}
	if ( apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreEmplacementsClasses', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-camping-area" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre d\'emplacements classés', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s emplacement', '%s emplacements', $nombre_emplacements_classes, 'wp-apidae' ), $nombre_emplacements_classes ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_plein_air_capacite_nombre_emplacements_classes_html', $html, $nombre_emplacements_classes );

	}
	if ( apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreEmplacementsDeclares', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-tent-zone" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre réel total d\'emplacements', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s emplacement', '%s emplacements', $nombre_emplacements_declares, 'wp-apidae' ), $nombre_emplacements_declares ) . '</p>';
		$html .= '</div>';
		echo apply_filters( 'apidae_single_informations_hotellerie_plein_air_capacite_nombre_emplacements_declares_html', $html, $nombre_emplacements_declares );
	}
	apidae_template_infos_cols_end( false );
}

if (
	apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreEmplacementsCaravaneiges' ) ||
	apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreLocationMobilhomes' ) ||
	apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreLocationBungalows' ) ||
	apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreLocationTentes' ) ||
	apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreLocationCaravanes' ) ||
	apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreHebergementsInsolites' ) ||
	apidae_has_( 'informationsHotelleriePleinAir.capacite.capaciteHebergementsInsolites' ) ||
	apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreHebergementsMobiliteReduite' )
	) {
	$heading_emplacement = apply_filters( 'apidae_single_informations_hotellerie_plein_air_capacite_detail_title', __( 'Détails emplacements', 'wp-apidae' ) );
	?>
	<h2><span class="icon-camping-area" aria-hidden="true"></span><?php echo esc_html( $heading_emplacement ); ?></h2>
	<?php
	apidae_template_infos_cols_start( false );
	if ( apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreEmplacementsCaravaneiges', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-caravan" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre d\'emplacements caravaneiges', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s emplacement', '%s emplacements', $nombre_emplacements_caravaneiges, 'wp-apidae' ), $nombre_emplacements_caravaneiges ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_plein_air_capacite_nombre_emplacements_caravaneiges_html', $html, $nombre_emplacements_caravaneiges );

	}
	if ( apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreLocationMobilhomes', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-infos-logement" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre de mobilhomes en location', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s location', '%s locations', $nombre_location_mobilhomes, 'wp-apidae' ), $nombre_location_mobilhomes ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_plein_air_capacite_nombre_location_mobilhomes_html', $html, $nombre_location_mobilhomes );

	}
	if ( apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreLocationBungalows', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-infos-logement" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre de bungalows/HLL en location', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s location', '%s locations', $nombre_location_bungalows, 'wp-apidae' ), $nombre_location_bungalows ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_plein_air_capacite_nombre_location_bungalows_html', $html, $nombre_location_bungalows );

	}
	if ( apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreLocationTentes', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-tent" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre de tentes en location', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s location', '%s locations', $nombre_location_tentes, 'wp-apidae' ), $nombre_location_tentes ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_plein_air_capacite_nombre_location_tentes_html', $html, $nombre_location_tentes );

	}
	if ( apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreLocationCaravanes', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-caravan" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre de caravanes en location', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s location', '%s locations', $nombre_location_caravanes, 'wp-apidae' ), $nombre_location_caravanes ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_plein_air_capacite_nombre_location_caravanes_html', $html, $nombre_location_caravanes );

	}
	if ( apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreHebergementsInsolites', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-diamond" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre d\'hébergements insolites', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s hébergement', '%s hébergements', $nombre_hebergements_insolites, 'wp-apidae' ), $nombre_hebergements_insolites ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_plein_air_capacite_nombre_hebergements_insolites_html', $html, $nombre_hebergements_insolites );

	}
	if ( apidae_has_( 'informationsHotelleriePleinAir.capacite.capaciteHebergementsInsolites', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-person" aria-hidden="true"></span><strong>' . esc_html( __( 'Capacité totale en hébergements insolites', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s personne', '%s personnes', $capacite_hebergements_insolites, 'wp-apidae' ), $capacite_hebergements_insolites ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_plein_air_capacite_capacite_hebergements_insolites_html', $html, $capacite_hebergements_insolites );

	}
	if ( apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreHebergementsMobiliteReduite', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-disability" aria-hidden="true"></span><strong>' . esc_html( __( 'Capacité totale en hébergements insolites', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s hébergement', '%s hébergements', $nombre_hebergements_mobilite_reduite, 'wp-apidae' ), $nombre_hebergements_mobilite_reduite ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_plein_air_capacite_nombre_hebergements_mobilite_reduite_html', $html, $nombre_hebergements_mobilite_reduite );
	}
	apidae_template_infos_cols_end( false );
}
if (
	apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreEmplacementsCampingCars' ) ||
	apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreEmplacementsCaravanes' ) ||
	apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreEmplacementsTentes' ) ||
	apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreEmplacementsPassages' )
) {
	$heading_capacite_autre = apply_filters( 'apidae_single_informations_hotellerie_plein_air_capacite_autre_title', __( 'Autres capacités', 'wp-apidae' ) );
	?>
	<h2><?php echo esc_html( $heading_capacite_autre ); ?></h2>
	<?php
	apidae_template_infos_cols_start( false );
	if ( apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreEmplacementsCampingCars', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-caravan" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre d\'emplacements camping cars', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s emplacement', '%s emplacements', $nombre_emplacements_camping_cars, 'wp-apidae' ), $nombre_emplacements_camping_cars ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_plein_air_capacite_nombre_emplacements_camping_cars_html', $html, $nombre_emplacements_camping_cars );

	}
	if ( apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreEmplacementsCaravanes', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-caravan-zone" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre d\'emplacements caravanes', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s emplacement', '%s emplacements', $nombre_emplacements_caravanes, 'wp-apidae' ), $nombre_emplacements_caravanes ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_plein_air_capacite_nombre_emplacements_caravanes_html', $html, $nombre_emplacements_caravanes );

	}
	if ( apidae_has_( 'informationsHotelleriePleinAir.capacite.nombreEmplacementsTentes', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-tent-zone" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre d\'emplacements tentes', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s emplacement', '%s emplacements', $nombre_emplacements_tentes, 'wp-apidae' ), $nombre_emplacements_tentes ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_plein_air_capacite_nombre_emplacements_tentes_html', $html, $nombre_emplacements_tentes );

	}
	apidae_template_infos_cols_end( false );
}

do_action( 'apidae_single_content_prestations' );
do_action( 'apidae_single_content_tourisme_affaire' );
do_action( 'apidae_single_content_tarifs' );
do_action( 'apidae_single_content_reservation' );
