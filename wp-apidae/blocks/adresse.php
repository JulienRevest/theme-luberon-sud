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
$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
?>
<address <?php echo $class; ?>>
	<p>
	<?php
	if ( isset( $values['adresse1'] ) ) {
		echo esc_html( $values['adresse1'] ) . '<br>';
	}
	if ( isset( $values['adresse2'] ) ) {
		echo esc_html( $values['adresse2'] ) . '<br>';
	}
	if ( isset( $values['adresse3'] ) ) {
		echo esc_html( $values['adresse3'] ) . '<br>';
	}
	if ( isset( $values['codePostal'] ) && ! isset( $values['commune'] ) ) {
		echo esc_html( $values['codePostal'] ) . '<br>';
	} else {
		if ( isset( $values['codePostal'] ) ) {
			echo esc_html( $values['codePostal'] ) . '<br>';
		}
		if ( isset( $values['commune'] ) ) {
			echo esc_html( $values['commune'] ) . '<br>';
		}
	}
	if ( isset( $values['etat'] ) ) {
		echo esc_html( $values['etat'] );
	}
	?>
	</p>
</address>
