<?php
/**
 * Block gallery
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/gallery.php.
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
?>
<div class="<?php echo esc_attr( $attributes['className'] ); ?>">
	<?php if ( $main_image ) : ?>
	<div class="dae-gallery-first">
		<?php echo $main_image; ?>
	</div>
	<?php endif; ?>
	<?php if ( $thumbnails ) : ?>
	<div class="dae-gallery-last">
		<?php echo wp_kses_post( implode( '', $thumbnails ) ); ?>
		<?php echo wp_kses_post( implode( '', $gallery ) ); ?>
	</div>
	<?php endif; ?>
</div>
