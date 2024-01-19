<?php
/**
 * Single entity tarifs
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/tarifs.php.
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
	$heading_tarifs = apply_filters( 'apidae_single_description_tarif_title', __( 'Tarifs', 'wp-apidae' ) );
?>
	<h2><span class="icon-tarifs" aria-hidden="true"></span><?php echo esc_html( $heading_tarifs ); ?></h2>
	<div class="dae-single-presta-cols">
		<div class="dae-single-presta-block">
			<?php if ( ! empty( $tarifs_en_clair ) ) : ?>
				<p><?php echo $tarifs_en_clair; ?></p>
			<?php endif; ?>

			<?php if ( ! empty( $tarif_comprend ) ) : ?>
				<p><?php echo $tarif_comprend; ?></p>
			<?php endif; ?>

			<?php if ( ! empty( $tarif_comprend_pas ) ) : ?>
				<p><?php echo $tarif_comprend_pas; ?></p>
			<?php endif; ?>

			<?php if ( ! empty( $tarif_comprend_pas ) ) : ?>
				<p><?php echo implode( ', ', $modes_paiements ); ?></p>
				<?php
			endif;
			?>
		</div>
	</div>

