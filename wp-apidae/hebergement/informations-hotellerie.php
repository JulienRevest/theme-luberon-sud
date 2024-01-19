<?php
/**
 * Single entity information hotellerie
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/informations/informations-hotellerie.php.
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

if ( apidae_has_( 'informationsHotellerie.capacite.nombreChambresDeclareesHotelier' ) ) {

	$heading_detail_capacite = apply_filters( 'apidae_single_informations_hotellerie_capacite_detail_title', __( 'Détails capacités', 'wp-apidae' ) );
	?>
	<h2><span class="icon-infos-logement" aria-hidden="true"></span><?php echo esc_html( $heading_detail_capacite ); ?></h2>
	<?php
	apidae_template_infos_cols_start( false );
	if ( apidae_has_( 'informationsHotellerie.capacite.nombreTotalPersonnesReel', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-person" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre total de personnes', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s personne', '%s personnes', $nombre_total_personnes_reel, 'wp-apidae' ), $nombre_total_personnes_reel ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_capacite_nombre_total_personnes_reel_html', $html, $nombre_total_personnes_reel );
	}
	if ( apidae_has_( 'informationsHotellerie.capacite.nombreChambresDeclareesHotelier', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-pillows" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre de chambres', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s chambre', '%s chambres', $nombre_chambres_declarees_hotelier, 'wp-apidae' ), $nombre_chambres_declarees_hotelier ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_capacite_nombre_chambres_declarees_hotelier_html', $html, $nombre_chambres_declarees_hotelier );
	}
	if ( apidae_has_( 'informationsHotellerie.capacite.nombreChambresSimples', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-pillows" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre de chambres simples', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s chambre', '%s chambres', $nombre_chambres_simples, 'wp-apidae' ), $nombre_chambres_simples ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_capacite_nombre_chambres_simples_html', $html, $nombre_chambres_simples );
	}
	if ( apidae_has_( 'informationsHotellerie.capacite.nombreChambresDoubles', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-pillows" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre de chambres doubles', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s chambre', '%s chambres', $nombre_chambres_doubles, 'wp-apidae' ), $nombre_chambres_doubles ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_capacite_nombre_chambres_doubles_html', $html, $nombre_chambres_doubles );
	}
	if ( apidae_has_( 'informationsHotellerie.capacite.nombreChambresTwin', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-pillows" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre de chambres twin', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s chambre', '%s chambres', $nombre_chambres_twin, 'wp-apidae' ), $nombre_chambres_twin ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_capacite_nombre_chambres_twin_html', $html, $nombre_chambres_twin );
	}
	if ( apidae_has_( 'informationsHotellerie.capacite.nombreChambresTriples', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-pillows" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre de chambres triples', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s chambre', '%s chambres', $nombre_chambres_triples, 'wp-apidae' ), $nombre_chambres_triples ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_capacite_nombre_chambres_triples_html', $html, $nombre_chambres_triples );
	}
	if ( apidae_has_( 'informationsHotellerie.capacite.nombreChambresQuadruples', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-pillows" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre de chambres quadruples', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s chambre', '%s chambres', $nombre_chambres_quadruples, 'wp-apidae' ), $nombre_chambres_quadruples ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_capacite_nombre_chambres_quadruples_html', $html, $nombre_chambres_quadruples );
	}
	if ( apidae_has_( 'informationsHotellerie.capacite.nombreChambresFamiliales', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-pillows" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre de chambres familiales', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s chambre', '%s chambres', $nombre_chambres_familiales, 'wp-apidae' ), $nombre_chambres_familiales ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_capacite_nombre_chambres_familiales_html', $html, $nombre_chambres_familiales );
	}
	if ( apidae_has_( 'informationsHotellerie.capacite.nombreChambresCommunicantes', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-pillows" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre de chambres communicantes', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s chambre', '%s chambres', $nombre_chambres_communicantes, 'wp-apidae' ), $nombre_chambres_communicantes ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_capacite_nombre_chambres_communicantes_html', $html, $nombre_chambres_communicantes );
	}
	if ( apidae_has_( 'informationsHotellerie.capacite.nombreSuites', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-pillows" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre de suites', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s suite', '%s suites', $nombre_suites, 'wp-apidae' ), $nombre_suites ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_capacite_nombre_suites_html', $html, $nombre_suites );
	}
	if ( apidae_has_( 'informationsHotellerie.capacite.nombreChambresMobiliteReduite', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-pillows" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre de chambres mobilité réduite', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s chambre', '%s chambres', $nombre_chambres_mobilite_reduite, 'wp-apidae' ), $nombre_chambres_mobilite_reduite ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_capacite_nombre_chambres_mobilite_reduite_html', $html, $nombre_chambres_mobilite_reduite );
	}
	if ( apidae_has_( 'informationsHotellerie.capacite.nombreAppartements', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-pillows" aria-hidden="true"></span><strong>' . esc_html( __( 'Nombre d\'appartements', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s appartement', '%s appartements', $nombre_appartements, 'wp-apidae' ), $nombre_appartements ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_capacite_nombre_appartements_html', $html, $nombre_appartements );
	}
	if ( apidae_has_( 'informationsHotellerie.capacite.capaciteTotaleEducationNationale', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-person" aria-hidden="true"></span><strong>' . esc_html( __( 'Capacite totale Education Nationale', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s personne', '%s personnes', $capacite_totale_education_nationale, 'wp-apidae' ), $capacite_totale_education_nationale ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_capacite_capacite_totale_education_nationale_html', $html, $capacite_totale_education_nationale );
	}
	if ( apidae_has_( 'informationsHotellerie.capacite.capaciteTotaleJeunesseEtCohesionSociale', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<div><span class="icon-person" aria-hidden="true"></span><strong>' . esc_html( __( 'Capacite totale Direction Départementale de la Cohésion Sociale', 'wp-apidae' ) ) . '</strong></div>';
		$html .= '<p>' . sprintf( _n( '%s personne', '%s personnes', $capacite_totale_jeunesse_et_cohesion_sociale, 'wp-apidae' ), $capacite_totale_jeunesse_et_cohesion_sociale ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hotellerie_capacite_capacite_totale_jeunesse_et_cohesion_sociale_html', $html, $capacite_totale_jeunesse_et_cohesion_sociale );
	}
	apidae_template_infos_cols_end( false );
}

do_action( 'apidae_single_content_prestations' );
do_action( 'apidae_single_content_tourisme_affaire' );
do_action( 'apidae_single_content_tarifs' );
do_action( 'apidae_single_content_reservation' );


