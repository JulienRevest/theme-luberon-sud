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


$labels = wp_get_post_terms( get_the_ID(), 'at_restaurationclassementguide' );

$labels_span = '';
foreach ( $labels as $label ) {
	$label_id = explode( '_', $label->slug );
	$label_id = (int) $label_id[1];
	$class    = '';

	switch ( $label_id ) {
		case 2971:
			$class = '1mstar';
			break;
		case 2972:
			$class = '2mstar';
			break;
		case 2973:
			$class = '3mstar';
			break;
		case 5172:
			$class = '1toque';
			break;
		case 5173:
			$class = '2toque';
			break;
		case 5174:
			$class = '3toque';
			break;
		case 5175:
			$class = '4toque';
			break;
		case 5176:
			$class = '5toque';
			break;
		case 4617:
			$class = 'asiette-michelin';
			break;
		case 2974:
			$class = 'bib-gourmand-michelin';
			break;
		case 6009:
			$class = 'etoile-verte-michelin';
			break;
	}
	if ( empty( $class ) ) {
		continue;
	}
	$labels_span .= '<span class="icon-' . $class . '" aria-hidden="true"></span>';
}

the_title( '<h1 class="dae-single-title">', $labels_span . '</h1>' );
