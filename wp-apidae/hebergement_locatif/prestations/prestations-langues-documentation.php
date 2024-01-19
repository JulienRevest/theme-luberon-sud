<?php
/**
 * Single entity prestations langues documentation
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/prestations/prestations-langues-documentation.php.
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

$heading = apply_filters( 'apidae_single_prestation_langue_doc_title', __( 'Langues de la documentation', 'wp-apidae' ) );
?>
<div class="dae-single-presta-block">
<h3><?php echo esc_html( $heading ); ?></h3>
<ul>
	<?php
	foreach ( $values as $value ) {
		?>
		<li><?php echo esc_html( $value ); ?></li>
		<?php
	}
	?>
	</ul>
</div>
