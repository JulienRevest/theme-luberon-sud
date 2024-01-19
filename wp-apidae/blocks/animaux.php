<?php
/**
 * Block animaux
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/animaux.php.
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
	$title = __( 'Accueil des animaux', 'wp-apidae' );
	$tag   = $attributes['field_tag'];
	$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
	?>
	<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><span class="icon-pets" aria-hidden="true"></span><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
	<?php
endif;
?>
<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
<?php
if ( isset( $values['animauxAcceptes'] ) && ! empty( $values['animauxAcceptes'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Animaux acceptés ?', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['animauxAcceptes']; ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['animauxAcceptesSupplement'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Animaux acceptés avec supplément', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['animauxAcceptesSupplement']; ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['descriptifAnimauxAcceptes'] ) ) :
	?>
	<div class="dae-single-block">
	<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Conditions d\'accueil des animaux', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['descriptifAnimauxAcceptes']; ?></p>
	</div>
	<?php
endif;
?>
</div>

