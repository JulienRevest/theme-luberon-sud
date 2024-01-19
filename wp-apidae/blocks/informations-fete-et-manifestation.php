<?php
/**
 * Block information fête et manifestation
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/informations-fete-et-manifestation.php.
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
if ( isset( $values['fma_categories'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-flyer" aria-hidden="true"></span><?php echo __( 'Catégories de manifestation', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['fma_categories'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['fma_themes'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-fireworks" aria-hidden="true"></span><?php echo __( 'Thèmes', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['fma_themes'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['fma_evenements_generique'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-cup" aria-hidden="true"></span><?php echo __( 'Événements génériques et championnats', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['fma_evenements_generique']; ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['fma_portee'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-megaphone" aria-hidden="true"></span><?php echo __( 'Portée de l\'évènements', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['fma_portee']; ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['fma_participants_attendu'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-group" aria-hidden="true"></span><?php echo __( 'Nombre de participants ou exposants attendus', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo sprintf( _n( '%s personne', '%s personnes', $values['fma_participants_attendu'], 'wp-apidae' ), $values['fma_participants_attendu'] ); ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['fma_visiteurs_attendu'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-group" aria-hidden="true"></span><?php echo __( 'Nombre de visiteurs / spectateurs attendus', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo sprintf( _n( '%s personne', '%s personnes', $values['fma_visiteurs_attendu'], 'wp-apidae' ), $values['fma_visiteurs_attendu'] ); ?></p>
	</div>
	<?php
endif;
?>
</div>

