<?php
/**
 * Block handicap
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/handicap.php.
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
	$title = __( 'Accueil des personnes en situation de handicap', 'wp-apidae' );
	$tag   = $attributes['field_tag'];
	$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
	?>
	<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><span class="icon-disability" aria-hidden="true"></span><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
	<?php
endif;
?>
<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
<?php
if ( isset( $values['labelsTourismeHandicap'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Labels tourisme adapté', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['labelsTourismeHandicap'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['tourismesAdaptes'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Tourisme adapté', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['tourismesAdaptes'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['nombrePersonnesEnFauteuilRoulantAccueilliesSimultanement'] ) ) :
	?>
	<div class="dae-single-block">
	<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Personnes en fauteuil roulant accueillies simultanement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['nombrePersonnesEnFauteuilRoulantAccueilliesSimultanement']; ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['descriptifHandicapAuditif'] ) ) :
	?>
	<div class="dae-single-block">
	<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Handicap auditif', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['descriptifHandicapAuditif']; ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['descriptifHandicapMental'] ) ) :
	?>
	<div class="dae-single-block">
	<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Handicap mental', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['descriptifHandicapMental']; ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['descriptifHandicapMoteur'] ) ) :
	?>
	<div class="dae-single-block">
	<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Handicap moteur', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['descriptifHandicapMoteur']; ?></p>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['descriptifHandicapVisuel'] ) ) :
	?>
	<div class="dae-single-block">
	<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Handicap visuel', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['descriptifHandicapVisuel']; ?></p>
	</div>
	<?php
endif;
?>
</div>

