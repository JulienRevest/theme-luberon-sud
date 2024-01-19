<?php
/**
 * Single entity title
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/title.php.
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

$classements_pref = wp_get_post_terms( get_the_ID(), 'at_hebergementlocatifclassementp' );
$classement_label = wp_get_post_terms( get_the_ID(), 'at_hebergementlocatiflabel' );

$labels = array_merge( $classements_pref, $classement_label );
echo '<pre>';
var_dump( $labels );
echo '</pre>';

the_title( '<h1 class="dae-single-title">', '</h1>' );
