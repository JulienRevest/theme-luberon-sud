<?php
/**
 * SEO
 *
 * @package luberon-sud
 */

/**
 * Title
 */
function elabo_theme_title_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'elabo_theme_title_setup' );


/**
 * Breadcrumb
 */
function elabo_breadcrumb() {
	if ( function_exists( 'seopress_display_breadcrumbs' ) ) {
		seopress_display_breadcrumbs();
	} elseif ( function_exists( 'yoast_breadcrumb' ) ) {
		yoast_breadcrumb( '<nav class="breadcrumb">', '</nav>' );
	}
}

/**
 * Custom breadcrumb for apidae entities
 */

function elabo_pro_breadcrumbs_crumbs( $crumbs ) {

	global $post;
	$post_type = get_post_type();

	$crumb = array();
	switch ( $post_type ) {
		case 'ad_restauration':
			$locale    = get_locale();
			$parent_id = array(
				'fr_FR' => 1118,
			);
			if ( ! isset( $parent_id[ $locale ] ) ) {
				break;
			}
			$page_link  = get_the_permalink( $parent_id[ $locale ] );
			$page_title = get_the_title( $parent_id[ $locale ] );
			$crumb[]    = array(
				array(
					$page_title,
					$page_link,
				),
			);
			break;
		case 'ad_hotellerie':
			$locale    = get_locale();
			$parent_id = array(
				'fr_FR' => 1106,
			);
			if ( ! isset( $parent_id[ $locale ] ) ) {
				break;
			}
			$page_link    = get_the_permalink( $parent_id[ $locale ] );
			$page_title   = get_the_title( $parent_id[ $locale ] );
			$crumb[]      = array(
				array(
					$page_title,
					$page_link,
				),
			);
			$gd_parent_id = array(
				'fr_FR' => 1099,
			);
			if ( ! isset( $gd_parent_id[ $locale ] ) ) {
				break;
			}
			$gd_page_link  = get_the_permalink( $gd_parent_id[ $locale ] );
			$gd_page_title = get_the_title( $gd_parent_id[ $locale ] );
			$crumb[]       = array(
				array(
					$gd_page_title,
					$gd_page_link,
				),
			);
			break;
		case 'ad_hebergement_locat':
			$locale    = get_locale();
			$parent_id = array(
				'fr_FR' => 1102,
			);
			// Hebergement insolite.
			if ( has_term( 'hebergementlocatiftype_2626', 'at_hebergementlocatiftype' ) ) {
				$parent_id = array(
					'fr_FR' => 37010,
				);
			}
			// Chambres d'hotes.
			if ( has_term( 'hebergementlocatiftype_2619', 'at_hebergementlocatiftype' ) ) {
				$parent_id = array(
					'fr_FR' => 1109,
				);
			}
			if ( ! isset( $parent_id[ $locale ] ) ) {
				break;
			}
			$page_link    = get_the_permalink( $parent_id[ $locale ] );
			$page_title   = get_the_title( $parent_id[ $locale ] );
			$crumb[]      = array(
				array(
					$page_title,
					$page_link,
				),
			);
			$gd_parent_id = array(
				'fr_FR' => 1099,
			);
			if ( ! isset( $gd_parent_id[ $locale ] ) ) {
				break;
			}
			$gd_page_link  = get_the_permalink( $gd_parent_id[ $locale ] );
			$gd_page_title = get_the_title( $gd_parent_id[ $locale ] );
			$crumb[]       = array(
				array(
					$gd_page_title,
					$gd_page_link,
				),
			);
			break;
		case 'ad_hotellerie_plein_':
			$locale    = get_locale();
			$parent_id = array(
				'fr_FR' => 1112,
			);
			if ( ! isset( $parent_id[ $locale ] ) ) {
				break;
			}
			$page_link    = get_the_permalink( $parent_id[ $locale ] );
			$page_title   = get_the_title( $parent_id[ $locale ] );
			$crumb[]      = array(
				array(
					$page_title,
					$page_link,
				),
			);
			$gd_parent_id = array(
				'fr_FR' => 1099,
			);
			if ( ! isset( $gd_parent_id[ $locale ] ) ) {
				break;
			}
			$gd_page_link  = get_the_permalink( $gd_parent_id[ $locale ] );
			$gd_page_title = get_the_title( $gd_parent_id[ $locale ] );
			$crumb[]       = array(
				array(
					$gd_page_title,
					$gd_page_link,
				),
			);
			break;
		case 'ad_hebergement_colle':
			$locale    = get_locale();
			$parent_id = array(
				'fr_FR' => 37021,
			);
			if ( ! isset( $parent_id[ $locale ] ) ) {
				break;
			}
			$page_link    = get_the_permalink( $parent_id[ $locale ] );
			$page_title   = get_the_title( $parent_id[ $locale ] );
			$crumb[]      = array(
				array(
					$page_title,
					$page_link,
				),
			);
			$gd_parent_id = array(
				'fr_FR' => 1099,
			);
			if ( ! isset( $gd_parent_id[ $locale ] ) ) {
				break;
			}
			$gd_page_link  = get_the_permalink( $gd_parent_id[ $locale ] );
			$gd_page_title = get_the_title( $gd_parent_id[ $locale ] );
			$crumb[]       = array(
				array(
					$gd_page_title,
					$gd_page_link,
				),
			);
			break;
		case 'ad_fete_et_manifesta':
			$locale    = get_locale();
			$parent_id = array(
				'fr_FR' => 1072,
			);
			if ( ! isset( $parent_id[ $locale ] ) ) {
				break;
			}
			$page_link  = get_the_permalink( $parent_id[ $locale ] );
			$page_title = get_the_title( $parent_id[ $locale ] );
			$crumb[]    = array(
				array(
					$page_title,
					$page_link,
				),
			);
			break;
		case 'ad_activite':
			$locale    = get_locale();
			$parent_id = array(
				'fr_FR' => 1033,
			);
			if ( ! isset( $parent_id[ $locale ] ) ) {
				break;
			}
			$page_link  = get_the_permalink( $parent_id[ $locale ] );
			$page_title = get_the_title( $parent_id[ $locale ] );
			$crumb[]    = array(
				array(
					$page_title,
					$page_link,
				),
			);
			break;
		case 'ad_equipement':
			$locale    = get_locale();
			$parent_id = array();
			// Randonnée pedestre.
			if ( has_term( 'equipementactivite_3333', 'at_equipementactivite' ) ) {
				$parent_id = array(
					'fr_FR' => 1045,
				);
			}
			// se baigner.
			if ( has_term( 'equipementactivite_5166', 'at_equipementactivite' ) ||
			has_term( 'equipementactivite_3293', 'at_equipementactivite' ) ||
			has_term( 'equipementactivite_3294', 'at_equipementactivite' ) ||
			has_term( 'equipementactivite_3298', 'at_equipementactivite' ) ||
			has_term( 'equipementactivite_3149', 'at_equipementactivite' ) ) {
				$parent_id = array(
					'fr_FR' => 1048,
				);
			}
			// velo et vtt.
			if ( has_term( 'equipementactivite_3113', 'at_equipementactivite' ) ||
			has_term( 'equipementactivite_3283', 'at_equipementactivite' ) ||
			has_term( 'equipementactivite_6225', 'at_equipementactivite' ) ||
			has_term( 'equipementactivite_3284', 'at_equipementactivite' ) ) {
				$parent_id = array(
					'fr_FR' => 1039,
				);
			}
			if ( isset( $parent_id[ $locale ] ) ) {
				$page_link  = get_the_permalink( $parent_id[ $locale ] );
				$page_title = get_the_title( $parent_id[ $locale ] );
				$crumb[]    = array(
					array(
						$page_title,
						$page_link,
					),
				);
			}
			$gd_parent_id = array(
				'fr_FR' => 1033,
			);
			if ( ! isset( $gd_parent_id[ $locale ] ) ) {
				break;
			}
			$gd_page_link  = get_the_permalink( $gd_parent_id[ $locale ] );
			$gd_page_title = get_the_title( $gd_parent_id[ $locale ] );
			$crumb[]       = array(
				array(
					$gd_page_title,
					$gd_page_link,
				),
			);
			break;
		case 'ad_commerce_et_servi':
			$locale       = get_locale();
			$parent_id    = array(
				'fr_FR' => 6550,
			);
			$gd_parent_id = false;

			if ( has_term( 'criteresinternes_20817', 'at_criteresinternes' ) ) {
				// bec sucrée.
				$parent_id = array(
					'fr_FR' => 44452,
				);
				// page produit locaux.
				$gd_parent_id = array(
					'fr_FR' => 43435,
				);
			}
			if ( has_term( 'criteresinternes_20819', 'at_criteresinternes' ) ) {
				// Terroir.
				$parent_id = array(
					'fr_FR' => 44341,
				);
				// page produit locaux.
				$gd_parent_id = array(
					'fr_FR' => 43435,
				);
			}

			if ( ! isset( $parent_id[ $locale ] ) ) {
				break;
			}
			$page_link  = get_the_permalink( $parent_id[ $locale ] );
			$page_title = get_the_title( $parent_id[ $locale ] );
			$crumb[]    = array(
				array(
					$page_title,
					$page_link,
				),
			);
			if ( ! isset( $gd_parent_id[ $locale ] ) ) {
				break;
			}
			$gd_page_link  = get_the_permalink( $gd_parent_id[ $locale ] );
			$gd_page_title = get_the_title( $gd_parent_id[ $locale ] );
			$crumb[]       = array(
				array(
					$gd_page_title,
					$gd_page_link,
				),
			);
			break;
		case 'ad_degustation':
			$locale       = get_locale();
			$parent_id    = array(
				'fr_FR' => 1127,
			);
			$gd_parent_id = array(
				'fr_FR' => 983,
			);
			if ( has_term( 'criteresinternes_20817', 'at_criteresinternes' ) ) {
				// bec sucrée.
				$parent_id = array(
					'fr_FR' => 44452,
				);
				// page produit locaux.
				$gd_parent_id = array(
					'fr_FR' => 43435,
				);
			}
			if ( has_term( 'criteresinternes_20819', 'at_criteresinternes' ) ) {
				// Terroir.
				$parent_id = array(
					'fr_FR' => 44341,
				);
				// page produit locaux.
				$gd_parent_id = array(
					'fr_FR' => 43435,
				);
			}
			if ( ! isset( $parent_id[ $locale ] ) ) {
				break;
			}
			$page_link  = get_the_permalink( $parent_id[ $locale ] );
			$page_title = get_the_title( $parent_id[ $locale ] );
			$crumb[]    = array(
				array(
					$page_title,
					$page_link,
				),
			);

			if ( ! isset( $gd_parent_id[ $locale ] ) ) {
				break;
			}
			$gd_page_link  = get_the_permalink( $gd_parent_id[ $locale ] );
			$gd_page_title = get_the_title( $gd_parent_id[ $locale ] );
			$crumb[]       = array(
				array(
					$gd_page_title,
					$gd_page_link,
				),
			);
			break;
		case 'post':
			$locale    = get_locale();
			$parent_id = array(
				'fr_FR' => 33645,
			);
			if ( ! isset( $parent_id[ $locale ] ) ) {
				break;
			}
			$page_link  = get_the_permalink( $parent_id[ $locale ] );
			$page_title = get_the_title( $parent_id[ $locale ] );
			$crumb[]    = array(
				array(
					$page_title,
					$page_link,
				),
			);
			break;
		case 'ad_patrimoine_cultur':
			$locale    = get_locale();
			$parent_id = array(
				'fr_FR' => 1057,
			);
			if ( ! isset( $parent_id[ $locale ] ) ) {
				break;
			}
			$page_link  = get_the_permalink( $parent_id[ $locale ] );
			$page_title = get_the_title( $parent_id[ $locale ] );
			$crumb[]    = array(
				array(
					$page_title,
					$page_link,
				),
			);
			break;
	}
	if ( ! empty( $crumb ) ) {
		foreach ( $crumb as $new_entry ) {
			array_splice( $crumbs, 1, 0, $new_entry );
		}
	}

	return $crumbs;
}
add_filter( 'seopress_pro_breadcrumbs_crumbs', 'elabo_pro_breadcrumbs_crumbs' );
