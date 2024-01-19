<?php
/**
 * Single entity adress
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/adresse.php.
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
$nom_lieu = apidae_get_the_( 'localisation.adresse.nomDuLieu' );
?>
<address>
	<p>
	<?php
	if ( ! empty( $nom_lieu ) ) {
		echo esc_html( $nom_lieu ) . '<br>';
	}
	if ( ! empty( $adresse1 ) ) {
		echo $adresse1 . '<br>';
	}
	if ( ! empty( $adresse2 ) ) {
		echo $adresse2 . '<br>';
	}
	if ( ! empty( $adresse3 ) ) {
		echo $adresse3 . '<br>';
	}
	echo $code_postal . ' ' . $commune . '<br>';
	if ( ! empty( $etat ) ) {
		echo $etat;
	}
	?>
	</p>
</address>
