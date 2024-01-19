<?php
/**
 * Single entity prestations
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/prestations.php.
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

if ( apidae_has_( 'prestations.equipements' ) || apidae_has_( 'prestations.services' ) || apidae_has_( 'prestations.conforts' ) || apidae_has_( 'prestations.activites' ) ) {
	$title_clientele = apply_filters( 'apidae_single_prestations_clientele_title', __( 'Prestations', 'wp-apidae' ) );
	?>
	<h2><span class="icon-prestations" aria-hidden="true"></span><?php echo esc_html( $title_clientele ); ?></h2>
	<div class="dae-single-presta-cols">
	<?php

	apidae_template_single_content_prestations_equipements();
	apidae_template_single_content_prestations_services();
	apidae_template_single_content_prestations_conforts();
	apidae_template_single_content_prestations_activites();
	?>
	</div>
	<?php
}

if ( apidae_has_( 'prestations.typesClientele' ) || apidae_has_( 'prestations.tailleGroupeMax' ) ) {
	$title_clientele = apply_filters( 'apidae_single_prestations_clientele_title', __( 'Clientèle et groupe', 'wp-apidae' ) );
	?>
	<h2><span class="icon-group" aria-hidden="true"></span><?php echo esc_html( $title_clientele ); ?></h2>
	<div class="dae-single-infos-cols">
	<?php

	apidae_template_single_content_prestations_types_clientele();
	apidae_template_single_content_prestations_age_min();
	apidae_template_single_content_prestations_age_max();
	apidae_template_single_content_prestations_taille_groupe_max();
	apidae_template_single_content_prestations_nombre_personnes_minimum();

	?>
	</div>
	<?php
}

if ( apidae_has_( 'prestations.complementAccueil', null ) ) {
	apidae_template_single_content_prestations_complement_accueil();
}

if ( apidae_has_( 'prestations.languesParlees' ) || apidae_has_( 'prestations.languesDocumentation' ) ) {
	$title_langues_accueil = apply_filters( 'apidae_single_prestations_langue_accueil_title', __( 'Langues d\'accueil', 'wp-apidae' ) );
	?>
	<h2><span class="icon-translate" aria-hidden="true"></span><?php echo esc_html( $title_langues_accueil ); ?></h2>
	<div class="dae-single-presta-cols">
	<?php

	apidae_template_single_content_prestations_langues_parlees();
	apidae_template_single_content_prestations_langues_documentation();

	?>
	</div>
	<?php
}

if ( apidae_resolve_constant_animaux( apidae_get_the_( 'prestations.animauxAcceptes', null, array() ) ) ) {
	$title_animaux = apply_filters( 'apidae_single_prestations_accueil_animaux_title', __( 'Accueil des animaux', 'wp-apidae' ) );
	?>
	<h2><span class="icon-pet-friendly" aria-hidden="true"></span><?php echo esc_html( $title_animaux ); ?></h2>
	<?php

	apidae_template_infos_cols_start( false );

	apidae_template_single_content_prestations_animaux_acceptes();
	apidae_template_single_content_prestations_animaux_acceptes_supplement();
	apidae_template_single_content_prestations_descriptif_animaux_acceptes();

	apidae_template_infos_cols_end( false );
}

if ( apidae_has_( 'prestations.labelsTourismeHandicap' ) || apidae_has_( 'prestations.tourismesAdaptes' ) || apidae_has_( 'prestations.nombrePersonnesEnFauteuilRoulantAccueilliesSimultanement' ) ) {
	$title_handicap = apply_filters( 'apidae_single_prestations_handicap_title', __( 'Accueil des personnes en situation de handicap', 'wp-apidae' ) );
	?>
	<h2><span class="icon-disability" aria-hidden="true"></span><?php echo esc_html( $title_handicap ); ?></h2>

	<?php
	apidae_template_infos_cols_start( false );

	apidae_template_single_content_prestations_labels_tourisme_handicap();
	apidae_template_single_content_prestations_tourismes_adaptes();
	apidae_template_single_content_prestation_descriptif_handicap_auditif();
	apidae_template_single_content_prestation_descriptif_handicap_mental();
	apidae_template_single_content_prestation_descriptif_handicap_moteur();
	apidae_template_single_content_prestation_descriptif_handicap_visuel();
	apidae_template_single_content_prestation_nombre_personnes_en_fauteuil_roulant_accueillies_simultanement();

	apidae_template_infos_cols_end( false );


}
