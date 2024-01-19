<?php
/**
 * Block information patrimoine culturel
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/informations-patrimoine-culturel.php.
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
	$title = __( 'Informations', 'wp-apidae' );
	$tag   = $attributes['field_tag'];
	$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
	?>
	<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
	<?php
endif;
?>
<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
<?php
if ( isset( $values['patrimoine_cult_type'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Type de patrimoine culturel', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['patrimoine_cult_type']; ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['patrimoine_cult_themes'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Thèmes', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['patrimoine_cult_themes'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['patrimoine_cult_categories'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Catégories', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['patrimoine_cult_categories'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
</div>

