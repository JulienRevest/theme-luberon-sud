<?php
/**
 * Single entity information domaine skiable
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/informations/informations-domaine-skiable.php.
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

$heading = apply_filters( 'apidae_single_informations_domaine_skiable_classification_title', __( 'Informations complémentaires', 'wp-apidae' ) );
?>
<h2><?php echo esc_html( $heading ); ?></h2>
<?php
apidae_template_infos_cols_start( false );
if ( apidae_has_( 'informationsDomaineSkiable.classification', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Classification', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . $classification . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_classification_html', $html, $classification );
}
if ( apidae_has_( 'informationsDomaineSkiable.domaineSkiableTypes', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Type de domaine skiable', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . implode( ', ', $types ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_domaine_skiable_types_html', $html, $types );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombrePistes', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre de pistes', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s piste', '%s pistes', $nombre_pistes, 'wp-apidae' ), $nombre_pistes ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_pistes_html', $html, $nombre_pistes );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombrePistesVertes', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre de pistes vertes', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s piste', '%s pistes', $nombre_pistes_vertes, 'wp-apidae' ), $nombre_pistes_vertes ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_pistes_vertes_html', $html, $nombre_pistes_vertes );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombrePistesBleues', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre de pistes bleues', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s piste', '%s pistes', $nombre_pistes_bleues, 'wp-apidae' ), $nombre_pistes_bleues ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_pistes_bleues_html', $html, $nombre_pistes_bleues );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombrePistesRouges', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre de pistes rouges', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s piste', '%s pistes', $nombre_pistes_rouges, 'wp-apidae' ), $nombre_pistes_rouges ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_pistes_rouges_html', $html, $nombre_pistes_rouges );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombrePistesNoires', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre de pistes noires', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . sprintf( _n( '%s piste', '%s pistes', $nombre_pistes_noires, 'wp-apidae' ), $nombre_pistes_noires ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_pistes_noires_html', $html, $nombre_pistes_noires );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombreKmPiste', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre km de piste', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . $nombre_km_piste . __( ' km', 'wp-apidae' ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_km_piste_html', $html, $nombre_km_piste );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombreKmPisteVerte', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre km de piste verte', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . $nombre_km_piste_verte . __( ' km', 'wp-apidae' ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_km_piste_verte_html', $html, $nombre_km_piste_verte );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombreKmPisteBleue', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre km de piste bleue', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . $nombre_km_piste_bleue . __( ' km', 'wp-apidae' ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_km_piste_bleue_html', $html, $nombre_km_piste_bleue );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombreKmPisteRouge', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre km de piste rouge', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . $nombre_km_piste_rouge . __( ' km', 'wp-apidae' ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_km_piste_rouge_html', $html, $nombre_km_piste_rouge );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombreKmPisteNoire', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre km de piste noire', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . $nombre_km_piste_noire . __( ' km', 'wp-apidae' ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_km_piste_noire_html', $html, $nombre_km_piste_noire );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombreKmPisteSkating', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre km de piste skating', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . $nombre_km_piste_skating . __( ' km', 'wp-apidae' ) . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_km_piste_skating_html', $html, $nombre_km_piste_skating );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombreRemonteesMecaniques', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre de remontées mécaniques', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . $nombre_remontees_mecaniques . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_remontees_mecaniques_html', $html, $nombre_remontees_mecaniques );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombreTeleskis', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre de téléskis', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . $nombre_teleskis . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_teleskis_html', $html, $nombre_teleskis );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombreTelesieges', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre de télésièges', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . $nombre_telesieges . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_telesieges_html', $html, $nombre_telesieges );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombreTelecabines', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre de télécabines', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . $nombre_telecabines . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_telecabines_html', $html, $nombre_telecabines );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombreTelepheriques', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre de téléfériques', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . $nombre_telepheriques . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_telepheriques_html', $html, $nombre_telepheriques );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombreAutresRemontees', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre d\'autres remontées', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . $nombre_autres_remontees . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_autres_remontees_html', $html, $nombre_autres_remontees );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombreRemonteesAccessiblesPietons', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre remontées accessibles piétons', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . $nombre_remontees_accessibles_pietons . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_remontees_accessibles_pietons_html', $html, $nombre_remontees_accessibles_pietons );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombreHandiski', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre handiski', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . $nombre_handiski . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_handiski_html', $html, $nombre_handiski );
}
if ( apidae_has_( 'informationsDomaineSkiable.nombreRemonteesSkiFond', null ) ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Nombre remontées ski de fond', 'wp-apidae' ) ) . '</h3>';
	$html .= '<p>' . $nombre_remontees_ski_fond . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_nombre_remontees_ski_fond_html', $html, $nombre_remontees_ski_fond );
}
if ( $remontee_gratuite ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Remontées gratuites', 'wp-apidae' ) ) . '</h3>';
	$html .= apply_filters(
		'apidae_single_informations_domaine_skiable_remontee_gratuite',
		'<p>' . __( 'Oui', 'wp-apidae' ) . '</p>'
	);
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_remontee_gratuite_html', $html, $remontee_gratuite );
}
if ( $neige_culture ) {
	$html  = '<div class="dae-single-infos-block">';
	$html .= '<h3>' . esc_html( __( 'Neige de culture', 'wp-apidae' ) ) . '</h3>';
	$html .= apply_filters(
		'apidae_single_informations_domaine_skiable_neige_culture',
		'<p>' . __( 'Oui', 'wp-apidae' ) . '</p>'
	);
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_neige_culture_html', $html, $neige_culture );
}
apidae_template_infos_cols_end( false );

if ( apidae_has_( 'informationsDomaineSkiable.neigeDescription', null ) ) {
	$html  = '<h2>' . esc_html( __( 'Description de la neige', 'wp-apidae' ) ) . '</h2>';
	$html .= '<p>' . $neige_description . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_neige_description_html', $html, $neige_description );
}

if ( apidae_has_( 'informationsDomaineSkiable.identifiantDomaineRelie', null ) ) {
	$html  = '<h2>' . esc_html( __( 'Nom du plus grand domaine relié', 'wp-apidae' ) ) . '</h2>';
	$html .= '<p>' . $identifiant_domaine_relie . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_identifiant_domaine_relie_html', $html, $identifiant_domaine_relie );
}

do_action( 'apidae_single_content_tarifs' );

if ( apidae_has_( 'informationsDomaineSkiable.identifiantForfait', null ) ) {
	$html  = '<h2>' . esc_html( __( 'Nom du forfait', 'wp-apidae' ) ) . '</h2>';
	$html .= '<p>' . $identifiant_forfait . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_identifiant_forfait_html', $html, $identifiant_forfait );
}
if ( apidae_has_( 'informationsDomaineSkiable.conditionForfaitGratuit', null ) ) {
	$html  = '<h2>' . esc_html( __( 'Condition du forfait gratuit', 'wp-apidae' ) ) . '</h2>';
	$html .= '<p>' . $condition_forfait_gratuit . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_condition_forfait_gratuit_html', $html, $condition_forfait_gratuit );
}
if ( apidae_has_( 'informationsDomaineSkiable.validiteTarifEnfant', null ) ) {
	$html  = '<h2>' . esc_html( __( 'Validité tarif enfant', 'wp-apidae' ) ) . '</h2>';
	$html .= '<p>' . $validite_tarif_enfant . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_validite_tarif_enfant_html', $html, apidae_get_the_( 'informationsDomaineSkiable.validiteTarifEnfant' ) );
}
if ( apidae_has_( 'informationsDomaineSkiable.validiteTarifSenior', null ) ) {
	$html  = '<h2>' . esc_html( __( 'Validité tarif sénior', 'wp-apidae' ) ) . '</h2>';
	$html .= '<p>' . $validite_tarif_senior . '</p>';
	$html .= '</div>';

	echo apply_filters( 'apidae_single_informations_domaine_skiable_validite_tarif_senior_html', $html, $validite_tarif_senior );
}

do_action( 'apidae_single_content_prestations' );


