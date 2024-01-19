<?php
/**
 * Single entity information producteur/dégustation
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/informations/informations-degustation.php.
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

$heading = apply_filters( 'apidae_single_informations_degustation_types_produit_title', __( 'Informations complémentaires', 'wp-apidae' ) );
?>
<h2><span class="icon-information" aria-hidden="true"></span><?php echo esc_html( $heading ); ?></h2>
<?php
apidae_template_infos_cols_start( false );
if ( apidae_has_( 'informationsDegustation.typesProduit', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Types de produits', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . implode( ', ', $types_produit ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_degustation_types_produit_html', $html, $types_produit );
}
if ( apidae_has_( 'informationsDegustation.statutsExploitant', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Statut de l\'exploitant', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . implode( ', ', $statuts_exploitant ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_degustation_statuts_exploitant_html', $html, $statuts_exploitant );
}
apidae_template_infos_cols_end( false );

if ( apidae_has_( 'informationsDegustation.aoc', null ) ) {
	$heading_aoc = apply_filters( 'apidae_single_informations_degustation_aop_aoc_igps_title', __( 'Informations AOC / AOP / IGP', 'wp-apidae' ) );
	?>
	<h2><span class="icon-quality-labels" aria-hidden="true"></span><?php echo esc_html( $heading_aoc ); ?></h2>
	<?php
	apidae_template_infos_cols_start( false );
	if ( apidae_has_( 'informationsDegustation.aopAocIgps', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'AOP / AOC / IGP', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $aop_aoc_igps ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_degustation_aop_aoc_igps_html', $html, $aop_aoc_igps );
	}

	if ( apidae_has_( 'informationsDegustation.aocDescriptif', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Descriptif AOC / AOP / IGP', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . $aoc_descriptif . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_degustation_aoc_descriptif_html', $html, $aoc_descriptif );
	}
	apidae_template_infos_cols_end( false );
}
if ( apidae_has_( 'informationsDegustation.labelsChartesQualite', null ) ) {
	$html  = '<h2><span class="icon-high-quality" aria-hidden="true"></span>' . esc_html( __( 'Labels chartes qualite', 'wp-apidae' ) ) . '</h2>';
	$html .= '<div class="dae-single-presta-cols"><div class="dae-single-presta-block"><ul>';
	foreach ( $labels_chartes_qualite as $charte_qual ) {
		$html .= '<li>' . $charte_qual . '</li>';
	}
	$html .= '</ul></div></div>';

	echo apply_filters( 'apidae_single_informations_degustation_labels_chartes_qualite_html', $html, $labels_chartes_qualite );
}
/*
if ( apidae_has_( 'informationsDegustation.charteQualite', null ) ) {
	$html  = '<h2>' . esc_html( __( 'Charte qualité', 'wp-apidae' ) ) . '</h2>';
	$html .= '<div class="dae-single-presta-cols"><div class="dae-single-presta-block"><ul>';
	foreach ( $charte_qualite as $chart ) {
		$html .= '<li>' . $chart . '</li>';
	}
	$html .= '</ul></div></div>';

	echo apply_filters( 'apidae_single_informations_degustation_charte_qualite_html', $html, $charte_qualite );
}*/

do_action( 'apidae_single_content_prestations' );
do_action( 'apidae_single_content_tarifs' );
do_action( 'apidae_single_content_reservation' );
