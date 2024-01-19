<?php
/**
 * block tarifs
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/tarifs.php.
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
if ( $attributes['show_title'] ) :
	$heading_tarifs = __( 'Tarifs', 'wp-apidae' );
	$tag            = $attributes['field_tag'];
	?>
	<<?php echo esc_attr( $tag ); ?>><span class="icon-tarifs" aria-hidden="true"></span><?php echo esc_html( $heading_tarifs ); ?></<?php echo esc_attr( $tag ); ?>>
	<?php
	endif;
?>
<div class="dae-single-presta-cols">
	<div class="dae-single-presta-block">
		<?php
		if ( isset( $values['indication_tarif'] ) ) :
			?>
		<p><?php echo $values['indication_tarif']; ?></p>
		<?php	endif; ?>
		<?php if ( isset( $values['tarifs_en_clair'] ) ) : ?>
			<p><?php echo $values['tarifs_en_clair']; ?></p>
		<?php endif; ?>

		<?php if ( isset( $values['tarif_comprend'] ) ) : ?>
			<p><?php echo $values['tarif_comprend']; ?></p>
		<?php endif; ?>

		<?php if ( isset( $values['tarif_comprend_pas'] ) ) : ?>
			<p><?php echo $values['tarif_comprend_pas']; ?></p>
		<?php endif; ?>

		<?php if ( isset( $values['modes_paiements'] ) ) : ?>
			<p><?php echo implode( ', ', $values['modes_paiements'] ); ?></p>
			<?php
		endif;
		?>
	</div>
</div>
<?php
