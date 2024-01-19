<?php
/**
 * Hooks for Apidae
 *
 * @package   WP-Apidae
 * @author    e-labo
 * @copyright 2020 e-labo
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Archive Hooks
 */

/**
 * Adjust scroll to to after ajax call on Apidae Archive.
 *
 * @param int $value
 * @return int
 */
function elabo_archive_scroll_to_top_adjust( $value ) {
	return -140;
}
add_filter( 'apidae_archive_map_scroll_top_adjust', 'elabo_archive_scroll_to_top_adjust' );

/******************************************************************************************
 *
 */

/**
 * Single HOOKS
 */

 /**
  * Breadcrumb.
  */

/**
 * Show SEOPress breadcumbs.
 *
 * @return void
 */
function elabo_entity_breadcrumbs() {
	if ( function_exists( 'seopress_display_breadcrumbs' ) ) {
		seopress_display_breadcrumbs();
	}
}
add_action( 'apidae_single_header', 'elabo_entity_breadcrumbs', 6 );

/**
 * Show Taxonomy type for entities
 *
 * @return void
 */
function elabo_single_entity_taxonomy_type() {
	global $post;
	$post_type = $post->post_type;
	$terms     = array();

	switch ( $post_type ) {
		case 'ad_fete_et_manifesta':
			$terms = wp_get_post_terms( $post->ID, 'at_feteetmanifestationtype', array( 'fields' => 'all' ) );
			if ( $terms ) {
				$slug_id = explode( '_', $terms[0]->slug )[1];
				switch ( $slug_id ) {
					case 1958:
						$icon = '<span class="icon-culture" aria-hidden="true"></span>';
						break;
					case 1974:
						$icon = '<span class="icon-culture" aria-hidden="true"></span>';
						break;
					case 1962:
						$icon = '<span class="icon-tarifs" aria-hidden="true"></span>';
						break;
					case 1966:
						$icon = '<span class="icon-wellness" aria-hidden="true"></span>';
						break;
					case 1971:
						$icon = '<span class="icon-sport" aria-hidden="true"></span>';
						break;
					default:
						$icon = '<span class="icon-garland" aria-hidden="true"></span>';
						break;
				}
			}
			break;
		case 'ad_equipement':
			$terms = wp_get_post_terms( $post->ID, 'at_equipementactivite', array( 'fields' => 'all' ) );
			$icon  = '';
			break;
		case 'ad_commerce_et_servi':
			$terms = wp_get_post_terms( $post->ID, 'at_commerceetservicetypedetaille', array( 'fields' => 'all' ) );
			$icon  = '';
			break;
		case 'ad_hebergement_locat':
			$terms = wp_get_post_terms( $post->ID, 'at_hebergementlocatiftype', array( 'fields' => 'all' ) );
			$icon  = '<span class="icon-gite" aria-hidden="true"></span>';
			break;
		case 'ad_hotellerie':
			$terms = wp_get_post_terms( $post->ID, 'at_hotellerietype', array( 'fields' => 'all' ) );
			$icon  = '<span class="icon-reception" aria-hidden="true"></span>';
			break;
		case 'ad_hotellerie_plein_':
			$terms = wp_get_post_terms( $post->ID, 'at_hotelleriepleinairtype', array( 'fields' => 'all' ) );
			$icon  = '<span class="icon-camping" aria-hidden="true"></span>';
			break;
		case 'ad_restauration':
			$terms = wp_get_post_terms( $post->ID, 'at_restaurationcategorie', array( 'fields' => 'all' ) );
			$icon  = '<span class="icon-restaurants" aria-hidden="true"></span>';
			break;
	}
	if ( empty( $terms ) ) {
		return;
	}
	echo sprintf(
		'<div class="entity-category">%1$s%2$s</div>',
		$icon,
		esc_html( $terms[0]->name )
	);
}
add_action( 'apidae_single_header', 'elabo_single_entity_taxonomy_type', 4 );
/**
 * Reservation button
 */
function elabo_apidae_reservation_button() {
	$values = apidae_get_the_( 'reservation.organismes', null, array() );

		$values_array = array();
	if ( $values ) {
		foreach ( $values as $value ) {
			$name                     = $value['nom'];
			$organisation_observation = isset( $value['observation'] ) ? ' (' . apidae_resolve_language( $value['observation'] ) . ')' : '';
			if ( ! isset( $value['moyensCommunication'] ) || empty( $value['moyensCommunication'] ) ) {
				continue;
			}
			$moyens = apidae_resolve_moyens_communication( $value['moyensCommunication'] );
			if ( ! isset( $moyens['site-web-url'] ) ) {
				continue;
			}
			foreach ( $moyens['site-web-url'] as $web_sites ) {
				echo sprintf(
					'<p class="dae-coords dae-coords-resa">
						<a class="dae-tk-resa dae-coords-button" href="%1$s" target="_blank">%2$s</a>
						</p>',
					esc_url( $web_sites['coordonnees'] ),
					esc_html__( 'Réserver' )
				);
			}
		}
	}
}
remove_action( 'apidae_single_content_reservation', 'apidae_template_single_content_reservation', 10 );
remove_action( 'apidae_single_summary', 'apidae_template_single_moyens_communication', 10 );
add_action( 'apidae_single_summary', 'elabo_apidae_reservation_button', 11 );
add_action( 'apidae_single_summary', 'apidae_template_single_moyens_communication', 12 );

/**
 * Descriptif thematisée
 */
remove_action( 'apidae_single_header', 'apidae_template_single_descriptifs_thematises', 10 );
add_action( 'apidae_single_header', 'apidae_template_single_descriptifs_thematises', 0 );

/**
 * Card template for related post on entities.
 *
 * @param string  $template_name
 * @param WP_POST $post
 * @return void
 */
function elabo_card_template_single_related( $template_name, $post ) {
	return 'adaptative-template';
}

add_filter( 'wp_apidae/card_template/single/related', 'elabo_card_template_single_related', 10, 2 );


/**
 * Related post hook.
 */

 /**
  * Before render related post.
  *
  * @return void
  */
function elabo_before_apidae_related_post() {
	echo '<div class="dae-single-related alignfull block-info-green">
	<div class="wp-block-group__inner-container">';
}
add_action( 'wp_apidae/single/related/before', 'elabo_before_apidae_related_post' );

/**
 * After render related post.
 *
 * @return void
 */
function elabo_after_apidae_related_post() {
	echo '</div>
	</div>';
}
add_action( 'wp_apidae/single/related/after', 'elabo_after_apidae_related_post' );

/**
 * Add a button for mailling when probleme on entity.
 */
function elabo_last_entity_update() {
	$mails = apidae_get_the_( 'gestion.signalerUnProblemeMails' );
	if ( empty( $mails ) ) {
		return;
	}

	$apidae_id           = get_post_meta( get_the_ID(), 'apidae_id', true );
	$entity_title        = get_the_title();
	$date_modification   = date( 'd/m/Y', strtotime( apidae_get_the_( 'gestion.dateModification' ) ) );
	$membre_proprietaire = apidae_get_the_( 'gestion.membreProprietaire.nom' );
	$mails               = base64_encode( implode( ',', $mails ) );
	$subject             = base64_encode( rawurlencode( 'Problème detecté sur la fiche Apidae ' . $apidae_id . ' - ' . $entity_title ) );
	?>
	<div class="dae-mails-bugs">
		<p><?php echo esc_html( "Mis à jour le {$date_modification}" ); ?><br><?php echo esc_html( "Par {$membre_proprietaire}" ); ?></p>
		<a class="action-button default" href="javascript: void(0)" data-contact="<?php echo $mails; ?>" data-subj="<?php echo $subject; ?>" onclick="location.href = 'mailto:' + atob(this.dataset.contact) + '?subject=' + atob(this.dataset.subj || '')"><?php esc_html_e( 'Signaler une erreur', 'theme-greoux' ); ?></a>
	</div>
	<?php
}
add_action( 'apidae_single_related', 'elabo_last_entity_update', 5 );

/**************************************************************************
 * VARIATIONS THEME
 **************************************************************************/

 /**
  * Title Variation
  *
  * @param [type] $path
  * @return void
  */
function elabo_title_theme_variation( $path ) {
	if ( 'ad_hebergement_locat' === get_post_type( get_the_ID() ) || 'ad_hotellerie' === get_post_type( get_the_ID() ) || 'ad_hotellerie_plein_' === get_post_type( get_the_ID() ) ) {
		$path = 'hebergement/title.php';
	}
	if ( 'ad_restauration' === get_post_type( get_the_ID() ) ) {
		$path = 'restauration/title.php';
	}
	return $path;
}
add_filter( 'wp_apidae/template/single/title', 'elabo_title_theme_variation' );

/**
 * Multimedia variation
 */
function elabo_multimedia_theme_variation( $path ) {
	if ( has_term( 'selectionids_107636', 'at_selectionids' ) || has_term( 'selectionids_110825', 'at_selectionids' ) || has_term( 'selectionids_111424', 'at_selectionids' ) ) {
		$path = 'rando/multimedia.php';
	}
	return $path;
}
add_filter( 'wp_apidae/template/single/multimedia', 'elabo_multimedia_theme_variation' );

/**
 * Informations variation
 *
 * @param string $path
 * @return void
 */
function elabo_informations_theme_variation( $path ) {
	if ( has_term( 'selectionids_107636', 'at_selectionids' ) || has_term( 'selectionids_110825', 'at_selectionids' ) || has_term( 'selectionids_111424', 'at_selectionids' ) || has_term( 'selectionids_111423', 'at_selectionids' ) ) {
		$path = 'rando/informations.php';
	}
	if ( 'ad_hebergement_locat' === get_post_type( get_the_ID() ) ) {
		$path = 'hebergement/informations-hebergement-locatif.php';
	}
	if ( 'ad_hotellerie' === get_post_type( get_the_ID() ) ) {
		$path = 'hebergement/informations-hotellerie.php';
	}
	if ( 'ad_hotellerie_plein_' === get_post_type( get_the_ID() ) ) {
		$path = 'hebergement/informations-hotellerie-plein-air.php';
	}
	if ( 'ad_restauration' === get_post_type( get_the_ID() ) ) {
		$path = 'restauration/informations-restauration.php';
	}
	return $path;
}
add_filter( 'wp_apidae/template/single/informations/informations_equipement', 'elabo_informations_theme_variation' );
add_filter( 'wp_apidae/template/single/informations/informations_hebergement_locatif', 'elabo_informations_theme_variation' );
add_filter( 'wp_apidae/template/single/informations/informations_hotellerie', 'elabo_informations_theme_variation' );
add_filter( 'wp_apidae/template/single/informations/informations_hotellerie_plein_air', 'elabo_informations_theme_variation' );
add_filter( 'wp_apidae/template/single/informations/informations_restauration', 'elabo_informations_theme_variation' );

/**
 * Find Youtube video and render it after descriptif court.
 *
 * @return void
 */
function elabo_youtube_videos() {
	global $entity;

	$videos = $entity->get( "$.multimedias[?(@.type == 'VIDEO')]" );

	if ( empty( $videos ) ) {
		return;
	}

	$host_types = array(
		'youtube' => array( 'www.youtube.com', 'youtube.com', 'youtu.be' ),
	);
	$blocks     = array();
	foreach ( $videos as $video ) {
		$file_url  = apidae_resolve_multimedias_language( $video );
		$file_info = parse_url( $file_url );
		$file_host = $file_info['host'];
		foreach ( $host_types as $name => $values ) {
			if ( in_array( $file_host, $host_types[ $name ] ) ) {
				echo elabo_render_youtube_block( $file_url );
			}
		}
	}
}
add_action( 'elabo_youtube_videos', 'elabo_youtube_videos' );

/**
 * render Youtube videos
 *
 * @param string $link
 * @return void
 * @source https://github.com/WordPress/gutenberg/issues/19114
 */
function elabo_render_youtube_block( $link ) {
	global $wp_embed;
	$content          = '<!-- wp:embed {"url":"' . $link . '","type":"video","providerNameSlug":"youtube","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
		<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
		' . $link . '
		</div></figure>
		<!-- /wp:embed -->
		';
	$rendered_content = $wp_embed->autoembed( do_blocks( $content ) );

	return $rendered_content;
}

/**
 * Hook block editor
 */
add_filter( 'wp-apidae/blocks-views/dynamic-content/custom-callback', 'elabo_custom_callback_apidae_blocks' );
function elabo_custom_callback_apidae_blocks( $array ) {
	$array[] = array(
		'label' => __( 'Liste éléments reference (limit 1)', 'wp-apidae' ),
		'value' => 'elabo_dynamic_content_element_reference_limit',
	);
	$array[] = array(
		'label' => __( '[Rando] Dénivellation', 'wp-apidae' ),
		'value' => 'elabo_rando_denivellation',
	);
	$array[] = array(
		'label' => __( '[Rando] Distance', 'wp-apidae' ),
		'value' => 'elabo_rando_distance',
	);
	$array[] = array(
		'label' => __( '[Rando] Durée', 'wp-apidae' ),
		'value' => 'elabo_rando_duree',
	);
	$array[] = array(
		'label' => __( '[Rando] Distance (single)', 'wp-apidae' ),
		'value' => 'elabo_rando_distance_single',
	);
	$array[] = array(
		'label' => __( '[Rando] Durée (single)', 'wp-apidae' ),
		'value' => 'elabo_rando_duree_single',
	);
	$array[] = array(
		'label' => __( '[Rando] difficulté (single)', 'wp-apidae' ),
		'value' => 'elabo_rando_level',
	);

	return $array;
}
/**
 * Custom function for denivellation render (card)
 *
 * @param [type] $values
 * @return void
 */
function elabo_rando_denivellation( $values ) {
	return sprintf( '<div><span class="dae-icon-denivele"></span>%d m</div>', $values );
}
/**
 * Custom function for denivellation render (card)
 *
 * @param [type] $values
 * @return void
 */
function elabo_rando_distance( $values ) {
	return sprintf( '<div><span class="dae-icon-route"></span>%d km</div>', $values );
}
/**
 * Custom function for denivellation render (single)
 *
 * @param [type] $values
 * @return void
 */
function elabo_rando_distance_single( $values ) {
	return sprintf( '<div><span class="icon-distance"></span>%d km</div>', $values );
}
/**
 * Custom function for denivellation render (card)
 *
 * @param [type] $values
 * @return void
 */
function elabo_rando_duree( $values ) {
	return sprintf( '<div><span class="dae-icon-clock"></span>%s</div>', date( 'G\Hi', mktime( 0, $values ) ) );
}
/**
 * Custom function for denivellation render (single)
 *
 * @param [type] $values
 * @return void
 */
function elabo_rando_duree_single( $values ) {
	return sprintf( '<div><span class="icon-clock"></span>%s</div>', date( 'G\Hi', mktime( 0, $values ) ) );
}

function elabo_rando_level( $values ) {
	if ( empty( $values ) ) {
		return;
	}

	// Check if elements are on an array.
	if ( isset( $values['elementReferenceType'] ) ) {
		$values = array( $values );
	}

	$taxonomies = get_taxonomies();
	$term_html  = '';
	foreach ( $values as $value ) {
		$type = $value['elementReferenceType'];
		$id   = $value['id'];
		$slug = strtolower( $type ) . '_' . $id;
		$slug = apply_filters( 'wp-apidae/dynamic_content_element_reference/slug', $slug );
		$term = '';

		foreach ( $taxonomies as $tax_type_key => $taxonomy ) {
			if ( $term = get_term_by( 'slug', $slug, $taxonomy ) ) {
				break;
			}
		}

		if ( empty( $term ) ) {
			continue;
		}

		$icon_class = '';
		$niv_text   = '';

		if ( $id === 587 ) {
			$icon_class = esc_attr( 'icon-easy' );
			$niv_text   = esc_html( 'Facile', 'luberon-sud' );
		}

		if ( $id === 588 ) {
			$icon_class = esc_attr( 'icon-medium' );
			$niv_text   = esc_html( 'Modéré', 'luberon-sud' );
		}

		if ( $id === 589 ) {
			$icon_class = esc_attr( 'icon-hard' );
			$niv_text   = esc_html( 'Difficile', 'luberon-sud' );
		}

		if ( $id === 590 ) {
			$icon_class = esc_attr( 'icon-hard' );
			$niv_text   = esc_html( 'Très difficile', 'luberon-sud' );
		}

		if ( '' === $icon_class || '' === $niv_text ) {
			continue;
		}

		$term_html .= sprintf( '<span class="%3$s" data-id="%1$d"></span>%2$s', $id, $niv_text, $icon_class );

	}

	return $term_html;

}

function elabo_dynamic_content_element_reference_limit( $values ) {
	if ( empty( $values ) ) {
		return;
	}

	// Check if elements are on an array.
	if ( isset( $values['elementReferenceType'] ) ) {
		$values = array( $values );
	}

	if ( count( $values ) > 1 ) {
		$values = array( $values[0] );
	}

	$taxonomies = get_taxonomies();
	$term_html  = '';
	foreach ( $values as $value ) {
		$type = $value['elementReferenceType'];
		$id   = $value['id'];
		$slug = strtolower( $type ) . '_' . $id;
		$slug = apply_filters( 'wp-apidae/dynamic_content_element_reference/slug', $slug );
		$term = '';

		foreach ( $taxonomies as $tax_type_key => $taxonomy ) {
			if ( $term = get_term_by( 'slug', $slug, $taxonomy ) ) {
				break;
			}
		}

		if ( empty( $term ) ) {
			continue;
		}

		$term_html .= sprintf( '<span class="dae-block-term" data-id="%1$d">%2$s</span>', $id, $term->name );

	}

	return $term_html;

}
