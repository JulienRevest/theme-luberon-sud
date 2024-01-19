<?php
/**
 * Block information degustation
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/informations-degustation.php.
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
if ( isset( $values['degustation_types_produit'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Types de produits', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['degustation_types_produit'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['degustation_statuts_exploitant'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Statut de l\'exploitant', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['degustation_statuts_exploitant'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['degustation_aop_aoc_igps'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-quality-labels" aria-hidden="true"></span><?php echo __( 'AOP / AOC / IGP', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['degustation_aop_aoc_igps'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['degustation_aoc_descriptif'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Descriptif AOC / AOP / IGP', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['degustation_aoc_descriptif']; ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['degustation_labels_chartes_qualite'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-high-quality" aria-hidden="true"></span><?php echo __( 'Labels chartes qualite', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['degustation_labels_chartes_qualite'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['degustation_chartes_qualite'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Charte qualité', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['degustation_chartes_qualite'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
</div>

