<?php
/**
 * Block information restauration
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/informations-restauration.php.
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
	$title = __( 'Informations complémentaires', 'wp-apidae' );
	$tag   = $attributes['field_tag'];
	$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
	?>
	<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><span class="icon-service" aria-hidden="true"></span><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
	<?php
endif;
?>
<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
<?php
if ( isset( $values['restauration_categories'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Catégories de restauration', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['restauration_categories'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['restauration_nombre_salles'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-rooms" aria-hidden="true"></span><?php echo __( 'Nombre de salles', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo sprintf( _n( '%s salle', '%s salles', $values['restauration_nombre_salles'], 'wp-apidae' ), $values['restauration_nombre_salles'] ); ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['restauration_nombre_salles_climatisees'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-snowflake" aria-hidden="true"></span><?php echo __( 'Nombre de salles climatisées', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo sprintf( _n( '%s salle', '%s salles', $values['restauration_nombre_salles_climatisees'], 'wp-apidae' ), $values['restauration_nombre_salles_climatisees'] ); ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['restauration_nombre_maximum_couverts'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-dinner" aria-hidden="true"></span><?php echo __( 'Nombre de couverts', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo sprintf( _n( '%s couvert', '%s couverts', $values['restauration_nombre_maximum_couverts'], 'wp-apidae' ), $values['restauration_nombre_maximum_couverts'] ); ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['restauration_nombre_couverts_terrasse'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-terrace" aria-hidden="true"></span><?php echo __( 'Nombre de couverts en terrasse', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo sprintf( _n( '%s couvert', '%s couverts', $values['restauration_nombre_couverts_terrasse'], 'wp-apidae' ), $values['restauration_nombre_couverts_terrasse'] ); ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['restauration_description_salles'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Description des salles', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['restauration_description_salles']; ?></p>
	</div>
	<?php
endif;
?>
</div>

