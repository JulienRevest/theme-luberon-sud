<?php
/**
 * Block clientele
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/clientele.php.
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
	$title = __( 'Clientèle et groupe', 'wp-apidae' );
	$tag   = $attributes['field_tag'];
	$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
	?>
	<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><span class="icon-group" aria-hidden="true"></span><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
	<?php
endif;
?>
<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
<?php
if ( isset( $values['typesClientele'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-person" aria-hidden="true"></span><?php echo __( 'Types de clientèle', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['typesClientele'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['ageMin'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Age minimum', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo esc_html( $values['ageMin'] . __( ' ans', 'wp-apidae' ) ); ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['ageMax'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Age maximum', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo esc_html( $values['ageMax'] . __( ' ans', 'wp-apidae' ) ); ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['tailleGroupeMax'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-group" aria-hidden="true"></span><?php echo __( 'Taille de groupe maximum', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo esc_html( $values['tailleGroupeMax'] . __( ' personnes', 'wp-apidae' ) ); ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['nombrePersonnesMinimum'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-group" aria-hidden="true"></span><?php echo __( 'Nombre de personne minimum', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo esc_html( $values['nombrePersonnesMinimum'] . __( ' personnes', 'wp-apidae' ) ); ?></p>
	</div>
	<?php
endif;
?>
</div>

