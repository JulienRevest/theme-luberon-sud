<?php
/**
 * Block entity descriptifs thematises
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/block/descriptif-thematise.php.
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

foreach ( $values as $theme_id => $texts ) :
	?>
	<div class="dae-single-message dae-theme-<?php echo esc_attr( $theme_id ); ?> <?php echo esc_attr( $attributes['className'] ); ?>"<?php echo $attributes['style']; ?>>
	<h2 class="dae-single-message-title"><?php echo esc_html( $labels[ $theme_id ] ); ?></h2>
	<?php
	foreach ( $texts as $text ) :
		?>
	<p><?php echo wp_kses_post( $text ); ?></p>
		<?php
	endforeach;
	?>
	</div>
	<?php
endforeach;

