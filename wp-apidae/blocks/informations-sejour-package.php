<?php
/**
 * Block information sejour package
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/informations-sejour-package.php.
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
	<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><span class="icon-information" aria-hidden="true"></span><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
	<?php
endif;
?>
<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
<?php
if ( isset( $values['sejour_lieu_de_pratique'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Lieu de pratique', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['sejour_lieu_de_pratique']; ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['sejour_nombre_jours'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre de jours', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo sprintf( _n( '%s jour', '%s jours', $values['sejour_nombre_jours'], 'wp-apidae' ), $values['sejour_nombre_jours'] ); ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['sejour_nombre_nuits'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre de jours', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo sprintf( _n( '%s nuit', '%s nuits', $values['sejour_nombre_nuits'], 'wp-apidae' ), $values['sejour_nombre_nuits'] ); ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['sejour_activites_sportives'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Activités sportives', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['sejour_activites_sportives'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['sejour_activites_culturelles'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Activités culturelles', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['sejour_activites_culturelles'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['sejour_activite_categories'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Catégories d\'activité', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['sejour_activite_categories'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['sejour_types_hebergement'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Types d\'hébergement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['sejour_types_hebergement'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['sejour_formule_hebergement'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Formule d\'hébergement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['sejour_formule_hebergement']; ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['sejour_package_transports'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Transports', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['sejour_package_transports'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
</div>

