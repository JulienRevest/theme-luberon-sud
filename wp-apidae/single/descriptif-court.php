<?php
/**
 * Single entity short description
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/descriptif-court.php.
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

if ( apidae_has_( 'presentation.descriptifCourt', null ) ) {

	$html = '<p class="dae-single-short-text">' . $descriptif_court . '</p>';

	echo apply_filters( 'apidae_single_descriptif_court_html', $html, $descriptif_court );

}
do_action( 'elabo_youtube_videos' );
