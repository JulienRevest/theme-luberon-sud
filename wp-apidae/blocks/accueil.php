<?php
/**
 * Block accueil
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/accueil.php.
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
	$title = __( 'Accueil', 'wp-apidae' );
	$tag   = $attributes['field_tag'];
	$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
	?>
	<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><span class="icon-translate" aria-hidden="true"></span><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
	<?php
endif;
?>
<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
<?php
if ( isset( $values['languesParlees'] ) ) :
	?>
	<div class="dae-single-block-list dae-wide">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-translation-bubble" aria-hidden="true"></span><?php echo __( 'Langues parlées', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['languesParlees'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['languesDocumentation'] ) ) :
	?>
	<div class="dae-single-block-list dae-wide">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-flyer" aria-hidden="true"></span><?php echo __( 'Langues de la documentation', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['languesDocumentation'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['complementAccueil'] ) ) :
	?>
	<div class="dae-single-block">
		<p><?php echo $values['complementAccueil']; ?></p>
	</div>
	<?php
endif;
?>
</div>

