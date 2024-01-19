<?php
/**
 * Function
 *
 * @package WordPress
 * @subpackage theme-luberon-sud
 */

/**
 * Update Theme Check.
 */

require_once get_stylesheet_directory() . '/lib/wp-package-updater/class-wp-package-updater.php';
$theme_updater = new WP_Package_Updater(
	'https://www.e-labo.biz',
	wp_normalize_path( __FILE__ ),
	get_stylesheet_directory()
);

/**
 * ACF
 */
require_once 'inc/acf.php';


/**
 * Images sizes, thumbnail, load js, css
 */
require_once 'inc/assets.php';


/**
 * Back office
 */
require_once 'inc/back.php';


/**
 * Front office
 */
require_once 'inc/front.php';

/**
 * Gravity Forms
 */
require_once 'inc/gform.php';


/**
 * Menu
 */
require_once 'inc/menu.php';


/**
 * SEO
 */
require_once 'inc/seo.php';


/**
 * CPT
 */
require_once 'inc/cpt/documents.php';


/**
 * Gutenberg overrides
 */
require_once 'inc/gutenberg.php';


/**
 * Compositions
 */
require_once 'inc/compositions.php';


/**
 * Shortcodes
 */
require_once 'inc/shortcodes.php';


/**
 * Apidae card
 */
require_once 'inc/apidae-cards-template.php';


/**
 * Apidae hooks
 */
require_once 'inc/apidae-hooks.php';
