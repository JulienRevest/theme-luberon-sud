<?php
/**
 * Block information hotellerie plein air
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/informations-hotellerie-plein-air.php.
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
if ( isset( $values['hotellerie_p_air_informations'] ) ) :
	if ( $attributes['show_title'] ) :
		$title = __( 'Informations classification', 'wp-apidae' );
		$tag   = $attributes['field_tag'];
		$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
		?>
	<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
		<?php
endif;
	?>
<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
	<?php
	if ( isset( $values['hotellerie_p_air_informations']['hotellerie_p_air_type'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Type d\'hôtellerie de plein air', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hotellerie_p_air_informations']['hotellerie_p_air_type']; ?></p>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_informations']['hotellerie_p_air_classement'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Classement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hotellerie_p_air_informations']['hotellerie_p_air_classement']; ?></p>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_informations']['hotellerie_p_air_date_classement'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Date de classement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hotellerie_p_air_informations']['hotellerie_p_air_date_classement']; ?></p>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_informations']['hotellerie_p_air_numero_classement'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Numéro de classement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hotellerie_p_air_informations']['hotellerie_p_air_numero_classement']; ?></p>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_informations']['hotellerie_p_air_chaines'] ) ) :
		?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Chaînes', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['hotellerie_p_air_informations']['hotellerie_p_air_chaines'] ); ?></li>
		</ul>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_informations']['hotellerie_p_air_labels'] ) ) :
		?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Labels', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['hotellerie_p_air_informations']['hotellerie_p_air_labels'] ); ?></li>
		</ul>
	</div>
		<?php
endif;
	?>
</div>
	<?php
endif;

if ( isset( $values['hotellerie_p_air_capacite'] ) ) :
	if ( $attributes['show_title'] ) :
		$title = __( 'Capacités', 'wp-apidae' );
		$tag   = $attributes['field_tag'];
		$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
		?>
		<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><span class="icon-camping" aria-hidden="true"></span><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
		<?php
	endif;
	?>
	<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['superficie'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-surface" aria-hidden="true"></span><?php echo __( 'Superficie', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s m²', '%s m²', $values['hotellerie_p_air_capacite']['superficie'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['superficie'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['caravaneige'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-caravan" aria-hidden="true"></span><?php echo __( 'Caravaneigne', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo __( 'oui', 'wp-apidae' ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['nombre_emplacements_classes'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-camping-area" aria-hidden="true"></span><?php echo __( 'Nombre d\'emplacements classés', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s emplacement', '%s emplacements', $values['hotellerie_p_air_capacite']['nombre_emplacements_classes'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['nombre_emplacements_classes'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['nombre_emplacements_declares'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-tent-zone" aria-hidden="true"></span><?php echo __( 'Nombre réel total d\'emplacements', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s emplacement', '%s emplacements', $values['hotellerie_p_air_capacite']['nombre_emplacements_declares'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['nombre_emplacements_declares'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['nombre_emplacements_nus'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-tent-zone" aria-hidden="true"></span><?php echo __( 'Nombre réel d\'emplacements nus', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s emplacement', '%s emplacements', $values['hotellerie_p_air_capacite']['nombre_emplacements_nus'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['nombre_emplacements_nus'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['nombre_emplacements_passages_nus'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-tent-zone" aria-hidden="true"></span><?php echo __( 'Nombre d\'emplacements de passage nus (tourisme)', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s emplacement', '%s emplacements', $values['hotellerie_p_air_capacite']['nombre_emplacements_passages_nus'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['nombre_emplacements_passages_nus'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['nombre_emplacements_residentiels_nus'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-tent-zone" aria-hidden="true"></span><?php echo __( 'Nombre d\'emplacements résidentiels nus (loisirs)', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s emplacement', '%s emplacements', $values['hotellerie_p_air_capacite']['nombre_emplacements_residentiels_nus'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['nombre_emplacements_residentiels_nus'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['nombre_emplacements_locatifs'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-tent-zone" aria-hidden="true"></span><?php echo __( 'Nombre réel d\'emplacements avec locatifs', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s emplacement', '%s emplacements', $values['hotellerie_p_air_capacite']['nombre_emplacements_locatifs'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['nombre_emplacements_locatifs'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['nombre_emplacements_passages_locatifs'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-tent-zone" aria-hidden="true"></span><?php echo __( 'Nombre d\'emplacements de passage locatifs (tourisme)', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s emplacement', '%s emplacements', $values['hotellerie_p_air_capacite']['nombre_emplacements_passages_locatifs'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['nombre_emplacements_passages_locatifs'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['nombre_emplacements_residentiels'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-tent-zone" aria-hidden="true"></span><?php echo __( 'Nombre d\'emplacements résidentiels (loisirs)', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s emplacement', '%s emplacements', $values['hotellerie_p_air_capacite']['nombre_emplacements_residentiels'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['nombre_emplacements_residentiels'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['nombre_emplacements_caravaneiges'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-caravan" aria-hidden="true"></span><?php echo __( 'Nombre d\'emplacements caravaneiges', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s emplacement', '%s emplacements', $values['hotellerie_p_air_capacite']['nombre_emplacements_caravaneiges'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['nombre_emplacements_caravaneiges'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['nombre_location_mobilhomes'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-infos-logement" aria-hidden="true"></span><?php echo __( 'Nombre de mobilhomes en location', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s location', '%s locations', $values['hotellerie_p_air_capacite']['nombre_location_mobilhomes'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['nombre_location_mobilhomes'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['nombre_location_bungalows'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-infos-logement" aria-hidden="true"></span><?php echo __( 'Nombre de bungalows/HLL en location', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s location', '%s locations', $values['hotellerie_p_air_capacite']['nombre_location_bungalows'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['nombre_location_bungalows'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['nombre_location_tentes'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-tent" aria-hidden="true"></span><?php echo __( 'Nombre de tentes en location', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s location', '%s locations', $values['hotellerie_p_air_capacite']['nombre_location_tentes'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['nombre_location_tentes'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['nombre_location_caravanes'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-caravan" aria-hidden="true"></span><?php echo __( 'Nombre de caravanes en location', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s location', '%s locations', $values['hotellerie_p_air_capacite']['nombre_location_caravanes'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['nombre_location_caravanes'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['nombre_hebergements_insolites'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-diamond" aria-hidden="true"></span><?php echo __( 'Nombre d\'hébergements insolites', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s hébergement', '%s hébergements', $values['hotellerie_p_air_capacite']['nombre_hebergements_insolites'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['nombre_hebergements_insolites'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['capacite_hebergements_insolites'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-person" aria-hidden="true"></span><?php echo __( 'Capacité totale en hébergements insolites', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s personne', '%s personnes', $values['hotellerie_p_air_capacite']['capacite_hebergements_insolites'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['capacite_hebergements_insolites'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['nombre_hebergements_mobilite_reduite'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-disability" aria-hidden="true"></span><?php echo __( 'Nombre d\'hébergements pour personnes à mobilité réduite', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s hébergement', '%s hébergements', $values['hotellerie_p_air_capacite']['nombre_hebergements_mobilite_reduite'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['nombre_hebergements_mobilite_reduite'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['nombre_emplacements_camping_cars'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-caravan" aria-hidden="true"></span><?php echo __( 'Nombre d\'emplacements camping cars', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s emplacement', '%s emplacements', $values['hotellerie_p_air_capacite']['nombre_emplacements_camping_cars'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['nombre_emplacements_camping_cars'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['nombre_emplacements_caravanes'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-caravan" aria-hidden="true"></span><?php echo __( 'Nombre d\'emplacements caravanes', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s emplacement', '%s emplacements', $values['hotellerie_p_air_capacite']['nombre_emplacements_caravanes'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['nombre_emplacements_caravanes'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['nombre_emplacements_tentes'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-tent-zone" aria-hidden="true"></span><?php echo __( 'Nombre d\'emplacements tentes', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s emplacement', '%s emplacements', $values['hotellerie_p_air_capacite']['nombre_emplacements_tentes'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['nombre_emplacements_tentes'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_p_air_capacite']['nombre_emplacements_passages'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-tent-zone" aria-hidden="true"></span><?php echo __( 'Nombre d\'emplacements de passage (tourisme)', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s emplacement', '%s emplacements', $values['hotellerie_p_air_capacite']['nombre_emplacements_passages'], 'wp-apidae' ), $values['hotellerie_p_air_capacite']['nombre_emplacements_passages'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	</div>
	<?php
endif;

