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

$labels = array();

if ( 'ad_hebergement_locat' === get_post_type( get_the_ID() ) ) {
	$classements_pref = wp_get_post_terms( get_the_ID(), 'at_hebergementlocatifclassementp' );
	$classement_label = wp_get_post_terms( get_the_ID(), 'at_hebergementlocatiflabel' );
	$labels           = array_merge( $classements_pref, $classement_label );
}

if ( 'ad_hotellerie' === get_post_type( get_the_ID() ) ) {
	$labels = wp_get_post_terms( get_the_ID(), 'at_hotellerieclassement' );
}

if ( 'ad_hotellerie_plein_' === get_post_type( get_the_ID() ) ) {
	$labels = wp_get_post_terms( get_the_ID(), 'at_hotelleriepleinairclassement' );
}

$labels_span = '';
foreach ( $labels as $label ) {
	$label_id = explode( '_', $label->slug );
	$label_id = (int) $label_id[1];
	$class    = '';

	switch ( $label_id ) {
		case 2627:
			$class = '1star';
			break;
		case 2628:
			$class = '2star';
			break;
		case 2629:
			$class = '3star';
			break;
		case 2630:
			$class = '4star';
			break;
		case 2631:
			$class = '5star';
			break;
		case 2748:
			$class = '1star';
			break;
		case 2749:
			$class = '2star';
			break;
		case 2750:
			$class = '3star';
			break;
		case 2751:
			$class = '4star';
			break;
		case 2752:
			$class = '5star';
			break;
		case 2541:
			$class = '1star';
			break;
		case 2543:
			$class = '2star';
			break;
		case 2546:
			$class = '3star';
			break;
		case 2548:
			$class = '4star';
			break;
		case 2561:
			$class = '5star';
			break;
		case 3584:
			$class = '1epi';
			break;
		case 3585:
			$class = '2epi';
			break;
		case 3586:
			$class = '3epi';
			break;
		case 3587:
			$class = '4epi';
			break;
		case 3588:
			$class = '5epi';
			break;
		case 3612:
			$class = '1key';
			break;
		case 3613:
			$class = '2key';
			break;
		case 3614:
			$class = '3key';
			break;
		case 3615:
			$class = '4key';
			break;
		case 3616:
			$class = '5key';
			break;
	}
	$labels_span .= '<span class="icon-' . $class . '" aria-hidden="true"></span>';
}

the_title( '<h1 class="dae-single-title">', $labels_span . '</h1>' );
