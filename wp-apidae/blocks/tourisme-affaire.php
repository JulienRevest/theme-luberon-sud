<?php
/**
 * block entity Tourisme d'affaire
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/tourisme-affaire.php.
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
	$title = __( 'Tourisme d\'affaire, location de salles', 'wp-apidae' );
	$tag   = $attributes['field_tag'];
	$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
	?>
	<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><span class="icon-business-trip" aria-hidden="true"></span><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
	<?php
endif;
?>
<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
<?php
if ( isset( $values['sallesEquipeesPour'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-tribune" aria-hidden="true"></span><?php echo __( 'Salles équipées pour', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['sallesEquipeesPour'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['sallesEquipement'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-projector" aria-hidden="true"></span><?php echo __( 'Équipement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['sallesEquipement'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['sallesRestauration'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-dinner" aria-hidden="true"></span><?php echo __( 'Restauration', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['sallesRestauration'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['sallesHebergement'] ) ) :
	?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-pillows" aria-hidden="true"></span><?php echo __( 'Hébergement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['sallesHebergement'] ); ?></li>
		</ul>
	</div>
	<?php
endif;
?>
</div>
<?php
if ( isset( $values['sallesReunion'] ) ) :
	$heading_salle_reunion = __( 'Salles de réunion', 'wp-apidae' );
	?>
	<<?php echo esc_attr( $tag ); ?>><span class="icon-meeting-room" aria-hidden="true"></span><?php echo esc_html( $heading_salle_reunion ); ?></<?php echo esc_attr( $tag ); ?>>
	<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
		<?php foreach ( $values['sallesReunion'] as $salle_reunion ) : ?>
			<div class="dae-single-block-list">

				<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-rooms" aria-hidden="true"></span><?php echo esc_html( $salle_reunion['nom'] ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
				<ul>
					<li><?php echo implode( '</li><li>', array_filter( $salle_reunion['elements'] ) ); ?></li>
					<?php
					if ( ! empty( $salle_reunion['dispositions'] ) ) :
						foreach ( $salle_reunion['dispositions'] as $disposition ) :
							?>
					<li><b><?php echo $disposition['nom_disposition']; ?> : </b><?php echo $disposition['capacite'] . __( ' personnes', 'wp-apidae' ); ?></li>
							<?php
					endforeach;
				endif;
					?>
				</ul>

			</div>
		<?php endforeach; ?>
	</div>
	<?php
endif;
?>
