<?php
/**
 * Single entity information hébergement locatif
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/informations/informations-hebergement-locatif.php.
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


if ( apidae_has_( 'informationsHebergementLocatif.hebergementLocatifType' ) ) {
	// if ( apidae_has_( 'informationsHebergementLocatif.capacite.capaciteMaximumPossible' ) ) {

		$heading_info_logement = apply_filters( 'apidae_single_informations_hebergement_locatif_info_logement_title', __( 'Informations sur le logement', 'wp-apidae' ) );
	?>
		<h2><?php echo esc_html( $heading_info_logement ); ?></h2>
		<?php
		apidae_template_infos_cols_start( false );

		if ( apidae_has_( 'informationsHebergementLocatif.capacite.capaciteMaximumPossible', null ) ) {
			$html  = '<div class="dae-single-infos-block">';
			$html .= '<div><strong>' . esc_html( __( 'Capacité maximum possible', 'wp-apidae' ) ) . '</strong></div>';
			$html .= '<p>' . sprintf( _n( '%s personne', '%s personnes', $capacite_maximum_possible, 'wp-apidae' ), $capacite_maximum_possible ) . '</p>';
			$html .= '</div>';

			echo apply_filters( 'apidae_single_informations_hebergement_locatif_capacite_capacite_maximum_possible_html', $html, $capacite_maximum_possible );

		}
		if ( apidae_has_( 'informationsHebergementLocatif.capacite.nombreChambres', null ) ) {
			$html  = '<div class="dae-single-infos-block">';
			$html .= '<div><strong>' . esc_html( __( 'Nombre de chambres', 'wp-apidae' ) ) . '</strong></div>';
			$html .= '<p>' . sprintf( _n( '%s chambre', '%s chambres', $nombre_chambres, 'wp-apidae' ), $nombre_chambres ) . '</p>';
			$html .= '</div>';

			echo apply_filters( 'apidae_single_informations_hebergement_locatif_capacite_nombre_chambres_html', $html, $nombre_chambres );

		}
		if ( apidae_has_( 'informationsHebergementLocatif.capacite.nombreCabines', null ) ) {
			$html  = '<div class="dae-single-infos-block">';
			$html .= '<div><strong>' . esc_html( __( 'Nombre de cabines', 'wp-apidae' ) ) . '</strong></div>';
			$html .= '<p>' . sprintf( _n( '%s cabine', '%s cabines', $nombre_cabines, 'wp-apidae' ), $nombre_cabines ) . '</p>';
			$html .= '</div>';

			echo apply_filters( 'apidae_single_informations_hebergement_locatif_capacite_nombre_cabines_html', $html, $nombre_cabines );

		}
		if ( apidae_has_( 'informationsHebergementLocatif.capacite.nombreChambresEnMezzanine', null ) ) {
			$html  = '<div class="dae-single-infos-block">';
			$html .= '<div><strong>' . esc_html( __( 'Nombre de chambres en mezzanine', 'wp-apidae' ) ) . '</strong></div>';
			$html .= '<p>' . sprintf( _n( '%s chambre en mezzanine', '%s chambres en mezzanine', $nombre_chambres_en_mezzanine, 'wp-apidae' ), $nombre_chambres_en_mezzanine ) . '</p>';
			$html .= '</div>';

			echo apply_filters( 'apidae_single_informations_hebergement_locatif_capacite_nombre_chambres_en_mezzanine_html', $html, $nombre_chambres_en_mezzanine );

		}
		if ( apidae_has_( 'informationsHebergementLocatif.capacite.nombreLitsDoubles', null ) ) {
			$html  = '<div class="dae-single-infos-block">';
			$html .= '<div><strong>' . esc_html( __( 'Nombre de lits doubles', 'wp-apidae' ) ) . '</strong></div>';
			$html .= '<p>' . sprintf( _n( '%s lit', '%s lits', $nombre_lits_doubles, 'wp-apidae' ), $nombre_lits_doubles ) . '</p>';
			$html .= '</div>';

			echo apply_filters( 'apidae_single_informations_hebergement_locatif_capacite_nombre_lits_doubles_html', $html, $nombre_lits_doubles );

		}
		if ( apidae_has_( 'informationsHebergementLocatif.capacite.nombreLitsSimples', null ) ) {
			$html  = '<div class="dae-single-infos-block">';
			$html .= '<div><strong>' . esc_html( __( 'Nombre de lits simples', 'wp-apidae' ) ) . '</strong></div>';
			$html .= '<p>' . sprintf( _n( '%s lit', '%s lits', $nombre_lits_simples, 'wp-apidae' ), $nombre_lits_simples ) . '</p>';
			$html .= '</div>';

			echo apply_filters( 'apidae_single_informations_hebergement_locatif_capacite_nombre_lits_simples_html', $html, $nombre_lits_simples );

		}
		if ( apidae_has_( 'informationsHebergementLocatif.capacite.surface', null ) ) {
			$html  = '<div class="dae-single-infos-block">';
			$html .= '<div><strong>' . esc_html( __( 'Surface', 'wp-apidae' ) ) . '</strong></div>';
			$html .= '<p>' . $surface . __( ' m²', 'wp-apidae' ) . '</p>';
			$html .= '</div>';

			echo apply_filters( 'apidae_single_informations_hebergement_locatif_capacite_surface_html', $html, $surface );

		}
		if ( apidae_has_( 'informationsHebergementLocatif.capacite.nombreSallesDeBain', null ) ) {
			$html  = '<div class="dae-single-infos-block">';
			$html .= '<div><strong>' . esc_html( __( 'Nombre de salles de bain', 'wp-apidae' ) ) . '</strong></div>';
			$html .= '<p>' . sprintf( _n( '%s salle de bain', '%s salles de bains', $nombre_salles_de_bain, 'wp-apidae' ), $nombre_salles_de_bain ) . '</p>';
			$html .= '</div>';

			echo apply_filters( 'apidae_single_informations_hebergement_locatif_capacite_nombre_salles_de_bain_html', $html, $nombre_salles_de_bain );

		}
		if ( apidae_has_( 'informationsHebergementLocatif.capacite.nombreWC', null ) ) {
			$html  = '<div class="dae-single-infos-block">';
			$html .= '<div><strong>' . esc_html( __( 'Nombre de wc', 'wp-apidae' ) ) . '</strong></div>';
			$html .= '<p>' . $nombre_wc . __( ' wc', 'wp-apidae' ) . '</p>';
			$html .= '</div>';

			echo apply_filters( 'apidae_single_informations_hebergement_locatif_capacite_nombre_wc_html', $html, $nombre_wc );

		}
		if ( apidae_has_( 'informationsHebergementLocatif.capacite.nombrePieces', null ) ) {
			$html  = '<div class="dae-single-infos-block">';
			$html .= '<div><strong>' . esc_html( __( 'Nombre de pièces', 'wp-apidae' ) ) . '</strong></div>';
			$html .= '<p>' . sprintf( _n( '%s pièce', '%s pièces', $nombre_pieces, 'wp-apidae' ), $nombre_pieces ) . '</p>';
			$html .= '</div>';

			echo apply_filters( 'apidae_single_informations_hebergement_locatif_capacite_nombre_pieces_html', $html, $nombre_pieces );

		}
		if ( apidae_has_( 'informationsHebergementLocatif.capacite.nombreEtages', null ) ) {
			$html  = '<div class="dae-single-infos-block">';
			$html .= '<div><strong>' . esc_html( __( 'Nombre d\'étages dans le bâtiment', 'wp-apidae' ) ) . '</strong></div>';
			$html .= '<p>' . sprintf( _n( '%s étage', '%s étages', $nombre_etages, 'wp-apidae' ), $nombre_etages ) . '</p>';
			$html .= '</div>';

			echo apply_filters( 'apidae_single_informations_hebergement_locatif_capacite_nombre_etages_html', $html, $nombre_etages );

		}
		if ( apidae_has_( 'informationsHebergementLocatif.capacite.numeroEtage', null ) ) {
			$html  = '<div class="dae-single-infos-block">';
			$html .= '<div><strong>' . esc_html( __( 'Numéro d\'étage du logement', 'wp-apidae' ) ) . '</strong></div>';
			$html .= '<p>' . $numero_etage . '</p>';
			$html .= '</div>';

			echo apply_filters( 'apidae_single_informations_hebergement_locatif_capacite_numero_etage_html', $html, $numero_etage );

		}
		if ( apidae_has_( 'informationsHebergementLocatif.capacite.typesHabitation', null ) ) {
			$html  = '<div class="dae-single-infos-block">';
			$html .= '<div><strong>' . esc_html( __( 'Type d\'habitation', 'wp-apidae' ) ) . '</strong></div>';
			$html .= '<p>' . implode( ' ,', $types_habitation ) . '</p>';
			$html .= '</div>';

			echo apply_filters( 'apidae_single_informations_hebergement_locatif_capacite_types_habitation_html', $html, $types_habitation );

		}
		apidae_template_infos_cols_end( false );
		// }
}

do_action( 'apidae_single_content_prestations' );
do_action( 'apidae_single_content_tourisme_affaire' );
do_action( 'apidae_single_content_tarifs' );
do_action( 'apidae_single_content_reservation' );
