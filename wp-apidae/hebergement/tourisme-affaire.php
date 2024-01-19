<?php
/**
 * Single entity Tourisme d'affaire
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/tourisme-affaire.php.
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

$heading_tourisme_affaire = apply_filters( 'apidae_single_tourisme_affaire_title', __( "Tourisme d'affaire, location de salles", 'wp-apidae' ) );
?>
<h2><span class="icon-business-trip" aria-hidden="true"></span><?php echo esc_html( $heading_tourisme_affaire ); ?></h2>
<div class="dae-single-presta-cols">
<?php

if ( apidae_has_( 'tourismeAffaires.sallesEquipeesPour', null ) ) {
	$html  = '<div class="dae-single-presta-block">';
	$html .= '<h3><span class="icon-tribune" aria-hidden="true"></span>' . esc_html( __( 'Salles équipées pour', 'wp-apidae' ) ) . '</h3>';
	$html .= '<ul>';
	foreach ( $salles_equipees_pour as $value ) {
		$html .= '<li>' . $value . '</li>';
	}
	$html .= '</ul>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_tourisme_affaire_salles_equipees_pour_html', $html, $salles_equipees_pour );
}

if ( apidae_has_( 'tourismeAffaires.sallesEquipement', null ) ) {
	$html  = '<div class="dae-single-presta-block">';
	$html .= '<h3><span class="icon-projector" aria-hidden="true"></span>' . esc_html( __( 'Équipement', 'wp-apidae' ) ) . '</h3>';
	$html .= '<ul>';
	foreach ( $salles_equipement as $value ) {
		$html .= '<li>' . $value . '</li>';
	}
	$html .= '</ul>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_tourisme_affaire_salles_equipement_html', $html, $salles_equipement );
}

if ( apidae_has_( 'tourismeAffaires.sallesRestauration', null ) ) {
	$html  = '<div class="dae-single-presta-block">';
	$html .= '<h3><span class="icon-dinner" aria-hidden="true"></span>' . esc_html( __( 'Restauration', 'wp-apidae' ) ) . '</h3>';
	$html .= '<ul>';
	foreach ( $salles_restauration as $value ) {
		$html .= '<li>' . $value . '</li>';
	}
	$html .= '</ul>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_tourisme_affaire_salles_restauration_html', $html, $salles_restauration );
}

if ( apidae_has_( 'tourismeAffaires.sallesHebergement', null ) ) {
	$html  = '<div class="dae-single-presta-block">';
	$html .= '<h3><span class="icon-pillows" aria-hidden="true"></span>' . esc_html( __( 'Hébergement', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . implode( ', ', $salles_hebergement ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_tourisme_affaire_salles_hebergement_html', $html, $salles_hebergement );
}
?>
</div>
<?php

if ( apidae_has_( 'tourismeAffaires.sallesReunion' ) ) {
	$heading_salle_reunion = apply_filters( 'apidae_single_salle_reunion_title', __( 'Salles de réunion', 'wp-apidae' ) );
	?>
	<h2><span class="icon-meeting-room" aria-hidden="true"></span><?php echo esc_html( $heading_salle_reunion ); ?></h2>
	<div class="dae-single-presta-cols">
	<?php

	foreach ( $salles_reunion as $salle_reunion ) {
		$html    = '<div class="dae-single-presta-block">';
		$html   .= '<h3>' . $salle_reunion['nom'] . '</h3>';
		$el_list = array();
		if ( $salle_reunion['description'] ) {
			$el_list[] = '<li>' . $salle_reunion['description'] . '</li>';
		}
		if ( $salle_reunion['capacite_max'] ) {
			$el_list[] = '<li>' . $salle_reunion['capacite_max'] . __( ' personnes maximum', 'wp-apidae' ) . '</li>';
		}
		if ( $salle_reunion['superficie'] ) {
			$el_list[] = '<li>' . $salle_reunion['superficie'] . __( ' m²', 'wp-apidae' ) . '</li>';
		}
		if ( $salle_reunion['hauteur'] ) {
			$el_list[] = '<li>' . $salle_reunion['hauteur'] . __( ' mètres de hauteur', 'wp-apidae' ) . '</li>';
		}
		if ( $salle_reunion['lumiere_naturelle'] ) {
			$el_list[] = '<li>' . $salle_reunion['lumiere_naturelle'] . '</li>';
		}
		if ( $salle_reunion['tarif_salle_minimum'] ) {
			$el_list[] = '<li>' . __( 'Tarif salle minimum : ', 'wp-apidae' ) . $salle_reunion['tarif_salle_minimum'] . '</li>';
		}
		if ( $salle_reunion['tarif_salle_maximum'] ) {
			$el_list[] = '<li>' . __( 'Tarif salle maximum : ', 'wp-apidae' ) . $salle_reunion['tarif_salle_maximum'] . '</li>';
		}
		if ( $salle_reunion['tarif_journee_minimum'] ) {
			$el_list[] = '<li>' . __( 'Tarif journée minimum : ', 'wp-apidae' ) . $salle_reunion['tarif_journee_minimum'] . '</li>';
		}
		if ( $salle_reunion['tarif_journee_maximum'] ) {
			$el_list[] = '<li>' . __( 'Tarif journée maximum : ', 'wp-apidae' ) . $salle_reunion['tarif_journee_maximum'] . '</li>';
		}
		if ( $salle_reunion['tarif_resident_minimum'] ) {
			$el_list[] = '<li>' . __( 'Tarif résident minimum : ', 'wp-apidae' ) . $salle_reunion['tarif_resident_minimum'] . '</li>';
		}
		if ( $salle_reunion['tarif_resident_minimum'] ) {
			$el_list[] = '<li>' . __( 'Tarif résident maximum : ', 'wp-apidae' ) . $salle_reunion['tarif_resident_minimum'] . '</li>';
		}

		if ( ! empty( $salle_reunion['dispositions'] ) ) {
			foreach ( $salle_reunion['dispositions'] as $disposition ) {
				$el_list[] = '<li><strong>' . $disposition['nom_disposition'] . '</strong> : ' . $disposition['capacite'] . __( ' personnes', 'wp-apidae' ) . '</li>';
			}
		}
		$list = '';
		if ( ! empty( $el_list ) ) {
			$list = '<ul>';
			foreach ( $el_list as $el ) {
				$list .= $el;
			}
			$list .= '</ul>';
		}

		echo sprintf(
			'<div class="dae-single-presta-block">
				<h3><span class="icon-rooms" aria-hidden="true"></span>%1$s</h3>
				%2$s
			</div>',
			$salle_reunion['nom'],
			$list
		);
	}
	?>
</div>
	<?php
}


