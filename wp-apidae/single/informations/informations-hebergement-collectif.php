<?php
/**
 * Single entity information hébergement collectif
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/informations/informations-hebergement-collectif.php.
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

if ( apidae_has_( 'informationsHebergementCollectif.hebergementCollectifType' ) ) {

	$heading = apply_filters( 'apidae_single_informations_hebergement_collectif_title', __( 'Informations sur l\'hébergement', 'wp-apidae' ) );
	?>
	<h2><?php echo esc_html( $heading ); ?></h2>
	<?php
	apidae_template_infos_cols_start( false );
	if ( apidae_has_( 'informationsHebergementCollectif.hebergementCollectifType', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Type d\'hébergement', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $types ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hebergement_collectif_hebergement_collectif_type_html', $html, $types );

	}
	if ( apidae_has_( 'informationsHebergementCollectif.typesHabitation', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Type d\'habitation', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $types_habitation ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hebergement_collectif_types_habitation_html', $html, $types_habitation );

	}
	if ( apidae_has_( 'informationsHebergementCollectif.typesHebergement', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Type d\'hébergement', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $type_hebergement ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hebergement_collectif_types_hebergement_html', $html, $type_hebergement );

	}
	if ( apidae_has_( 'informationsHebergementCollectif.classementPrefectoral', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Classement', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $classement_prefectoral ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hebergement_collectif_classement_prefectoral_html', $html, $classement_prefectoral );

	}
	if ( apidae_has_( 'informationsHebergementCollectif.dateClassement', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Date de classement', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . $date_classement . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hebergement_collectif_date_classement_html', $html, $date_classement );

	}
	if ( apidae_has_( 'informationsHebergementCollectif.numeroClassement', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Numéro de classement', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . $numero_classement . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hebergement_collectif_numero_classement_html', $html, $numero_classement );

	}
	if ( ! empty( $classement_labels ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Classement labels', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $classement_labels ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hebergement_collectif_classement_labels_html', $html, $classement_labels );
	}
	if ( ! empty( $chaines_et_labels ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Chaînes et labels', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . implode( ', ', $chaines_et_labels ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hebergement_collectif_chaines_et_labels_html', $html, $chaines_et_labels );
	}
	apidae_template_infos_cols_end( false );
}

if ( apidae_has_( 'informationsHebergementCollectif.capacite.capaciteTotaleReelle' ) ) {

	$heading_capacite = apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_title', __( 'Capacité d\'hébergements', 'wp-apidae' ) );
	?>
	<h2><?php echo esc_html( $heading_capacite ); ?></h2>
	<?php
	apidae_template_infos_cols_start( false );
	if ( apidae_has_( 'informationsHebergementCollectif.capacite.capaciteTotaleReelle', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Nombre total d\'unités d’hébergements', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . sprintf( _n( '%s hébergement', '%s hébergements', $capacite_totale_reelle, 'wp-apidae' ), $capacite_totale_reelle ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_capacite_totale_reelle_html', $html, $capacite_totale_reelle );

	}
	if ( apidae_has_( 'informationsHebergementCollectif.capacite.nombreChambres', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Nombre de chambres', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . sprintf( _n( '%s chambre', '%s chambres', $nombre_chambres, 'wp-apidae' ), $nombre_chambres ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_nombre_chambres_html', $html, $nombre_chambres );

	}
	if ( apidae_has_( 'informationsHebergementCollectif.capacite.nombreAppartements', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Nombre d\'appartements', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . sprintf( _n( '%s appartement', '%s appartements', $nombre_appartements, 'wp-apidae' ), $nombre_appartements ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_nombre_appartements_html', $html, $nombre_appartements );

	}
	if ( apidae_has_( 'informationsHebergementCollectif.capacite.nombreDortoirs', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Nombre de dortoirs', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . sprintf( _n( '%s dortoir', '%s dortoirs', $nombre_dortoirs, 'wp-apidae' ), $nombre_dortoirs ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_nombre_dortoirs_html', $html, $nombre_dortoirs );

	}
	if ( apidae_has_( 'informationsHebergementCollectif.capacite.nombreVillas', null ) ) {
		$html  = '<div class="dae-single-infos-block">';
		$html .= '<h3>' . esc_html( __( 'Nombre d\'habitations individuelles', 'wp-apidae' ) ) . '</h3>';
		$html .= '<p>' . sprintf( _n( '%s villa', '%s villas', $nombre_villas, 'wp-apidae' ), $nombre_villas ) . '</p>';
		$html .= '</div>';

		echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_nombre_villas_html', $html, $nombre_villas );

	}
	apidae_template_infos_cols_end( false );
}

$heading_other_info = apply_filters( 'apidae_single_informations_hebergement_collectif_autre_info_title', __( 'Autres informations de capacités', 'wp-apidae' ) );
?>
<h2><?php echo esc_html( $heading_other_info ); ?></h2>
<?php
apidae_template_infos_cols_start( false );
if ( apidae_has_( 'informationsHebergementCollectif.capacite.capaciteTotaleClassee', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Capacité totale des unités d\'hébergements classés', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s personne', '%s personnes', $capacite_totale_classee, 'wp-apidae' ), $capacite_totale_classee ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_capacite_totale_classee_html', $html, $capacite_totale_classee );

}
if ( apidae_has_( 'informationsHebergementCollectif.capacite.capaciteTotale', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Capacité totale des unités d\'hébergements', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s personne', '%s personnes', $capacite_totale, 'wp-apidae' ), $capacite_totale ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_capacite_totale_html', $html, $capacite_totale );

}
if ( apidae_has_( 'informationsHebergementCollectif.capacite.capaciteTotaleJeunesseSport', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Capacite totale Direction Départementale de la Cohésion Sociale', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s personne', '%s personnes', $capacite_totale_jeunesse_sport, 'wp-apidae' ), $capacite_totale_jeunesse_sport ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_capacite_totale_jeunesse_sport_html', $html, $capacite_totale_jeunesse_sport );

}
if ( apidae_has_( 'informationsHebergementCollectif.capacite.capaciteTotaleEducationNationale', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Capacité totale Éducation Nationale', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s personne', '%s personnes', $capacite_totale_education_nationale, 'wp-apidae' ), $capacite_totale_education_nationale ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_capacite_totale_education_nationale_html', $html, $capacite_totale_education_nationale );

}
if ( apidae_has_( 'informationsHebergementCollectif.capacite.capaciteCommissionSecurite', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Capacité totale commission sécurité (hors personnel du centre)', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s personne', '%s personnes', $capacite_commission_securite, 'wp-apidae' ), $capacite_commission_securite ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_capacite_commission_securite_html', $html, $capacite_commission_securite );

}
if ( apidae_has_( 'informationsHebergementCollectif.capacite.nombreHebergementsUnePersonne', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre chambres, appart, villas 1 pers', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s hébergement', '%s hébergements', $nombre_hebergements_une_personne, 'wp-apidae' ), $nombre_hebergements_une_personne ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_nombre_hebergements_une_personne_html', $html, $nombre_hebergements_une_personne );

}
if ( apidae_has_( 'informationsHebergementCollectif.capacite.nombreHebergementsDeuxPersonnes', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre chambres, appart, villas 2 pers', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s hébergement', '%s hébergements', $nombre_hebergements_deux_personnes, 'wp-apidae' ), $nombre_hebergements_deux_personnes ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_nombre_hebergements_deux_personnes_html', $html, $nombre_hebergements_deux_personnes );

}
if ( apidae_has_( 'informationsHebergementCollectif.capacite.nombreHebergementsTroisPersonnes', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre chambres, appart, villas 3 pers', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s hébergement', '%s hébergements', $nombre_hebergements_trois_personnes, 'wp-apidae' ), $nombre_hebergements_trois_personnes ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_nombre_hebergements_trois_personnes_html', $html, $nombre_hebergements_trois_personnes );

}
if ( apidae_has_( 'informationsHebergementCollectif.capacite.nombreHebergementsQuatrePersonnes', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre chambres, appart, villas 4 pers', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s hébergement', '%s hébergements', $nombre_hebergements_quatre_personnes, 'wp-apidae' ), $nombre_hebergements_quatre_personnes ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_nombre_hebergements_quatre_personnes_html', $html, $nombre_hebergements_quatre_personnes );

}
if ( apidae_has_( 'informationsHebergementCollectif.capacite.nombreHebergementsCinqPersonnes', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre chambres, appart, villas 5 pers', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s hébergement', '%s hébergements', $nombre_hebergements_cinq_personnes, 'wp-apidae' ), $nombre_hebergements_cinq_personnes ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_nombre_hebergements_cinq_personnes_html', $html, $nombre_hebergements_cinq_personnes );

}
if ( apidae_has_( 'informationsHebergementCollectif.capacite.nombreHebergementsSixPersonnes', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre chambres, appart, villas 6 pers', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s hébergement', '%s hébergements', $nombre_hebergements_six_personnes, 'wp-apidae' ), $nombre_hebergements_six_personnes ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_nombre_hebergements_six_personnes_html', $html, $nombre_hebergements_six_personnes );

}
if ( apidae_has_( 'informationsHebergementCollectif.capacite.nombreHebergementsPlusSixPersonnes', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre chambres, appart, villas + de 6 pers', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s hébergement', '%s hébergements', $nombre_hebergements_plus_six_personnes, 'wp-apidae' ), $nombre_hebergements_plus_six_personnes ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_nombre_hebergements_plus_six_personnes_html', $html, $nombre_hebergements_plus_six_personnes );

}
if ( apidae_has_( 'informationsHebergementCollectif.capacite.nombreDortoirsMoyens', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre dortoirs 4/9 personnes', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s dortoir', '%s dortoirs', $nombre_dortoirs_moyens, 'wp-apidae' ), $nombre_dortoirs_moyens ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_nombre_dortoirs_moyens_html', $html, $nombre_dortoirs_moyens );

}
if ( apidae_has_( 'informationsHebergementCollectif.capacite.nombreDortoirsGrands', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre dortoirs +10 personnes', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s dortoir', '%s dortoirs', $nombre_dortoirs_grands, 'wp-apidae' ), $nombre_dortoirs_grands ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_nombre_dortoirs_grands_html', $html, $nombre_dortoirs_grands );

}
if ( apidae_has_( 'informationsHebergementCollectif.capacite.nombreHebergementsMobiliteReduite', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre d\'hébergements pour personnes à mobilité réduit', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s hébergement', '%s hébergements', $nombre_hebergements_mobilite_reduite, 'wp-apidae' ), $nombre_hebergements_mobilite_reduite ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_nombre_hebergements_mobilite_reduite_html', $html, $nombre_hebergements_mobilite_reduite );

}
apidae_template_infos_cols_end( false );

if ( apidae_has_( 'informationsHebergementCollectif.capacite.descriptifChambres', null ) ) {
	$html  = '<h2>' . esc_html( __( 'Description des chambres', 'wp-apidae' ) ) . '</h2>';
	$html .= '<p>' . $descriptif_chambres . '</p>';
	echo apply_filters( 'apidae_single_informations_hebergement_collectif_capacite_descriptif_chambres_html', $html, $descriptif_chambres );
}


do_action( 'apidae_single_content_prestations' );
do_action( 'apidae_single_content_tourisme_affaire' );
do_action( 'apidae_single_content_tarifs' );
do_action( 'apidae_single_content_reservation' );
