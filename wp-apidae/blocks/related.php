<?php
/**
 * Block related
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/related.php.
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
<div class="<?php echo esc_attr( $attributes['className'] ); ?>"<?php echo $attributes['style']; ?>>
	<div class="wp-block-group__inner-container">
		<?php
		if ( $attributes['show_title'] ) :
			$title = __( 'A voir aussi', 'wp-apidae' );
			$tag   = $attributes['field_tag'];
			$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
			?>
			<<?php echo esc_attr( $tag ); ?>><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
			<?php
		endif;
		?>
		<div class="dae-related-list dae-grid-col-<?php echo esc_attr( $attributes['columns'] ); ?>">
		<?php echo $cards; ?>
		</div>
	</div>
</div>
<?php
