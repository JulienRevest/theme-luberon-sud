<?php
/**
 * Block information equipement
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/informations-equipement.php.
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
if ( isset( $values['equipement_activites'] ) ) :
	if ( $attributes['show_title'] ) :
		$title = __( 'Types d\'activité / équipement', 'wp-apidae' );
		$tag   = $attributes['field_tag'];
		$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
		?>
	<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
		<?php
endif;
	?>
<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
	<?php
	if ( isset( $values['equipement_activites'] ) ) :
		?>
	<div class="dae-single-block-list">
		<ul>
			<li><?php echo implode( '</li><li>', $values['equipement_activites'] ); ?></li>
		</ul>
	</div>
		<?php
	endif;
	?>
</div>
	<?php
endif;

if ( isset( $values['equipement_itineraire'] ) ) :
	if ( $attributes['show_title'] ) :
		$title = __( 'Informations itinéraire', 'wp-apidae' );
		$tag   = $attributes['field_tag'];
		$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
		?>
		<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['equipement_itineraire']['equipement_itineraire_distance'] ) ) :
		?>
			<p><span class="info-rando-title"><?php echo __( 'Distance', 'wp-apidae' ); ?></span><?php echo sprintf( _n( '%s km', '%s km', $values['equipement_itineraire']['equipement_itineraire_distance'], 'wp-apidae' ), $values['equipement_itineraire']['equipement_itineraire_distance'] ); ?></p>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['equipement_itineraire']['equipement_itineraire_type'] ) ) :
		?>
			<p><span class="info-rando-title"><?php echo __( 'Type d\'itinéraire', 'wp-apidae' ); ?></span><?php echo $values['equipement_itineraire']['equipement_itineraire_type']; ?></p>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['equipement_itineraire']['equipement_itineraire_balise'] ) ) :
		?>
			<p><span class="info-rando-title"><?php echo __( 'Iitinéraire balisé', 'wp-apidae' ); ?></span><?php echo $values['equipement_itineraire']['equipement_itineraire_balise']; ?></p>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['equipement_itineraire']['equipement_precisions_balisage'] ) ) :
		?>
			<p><span class="info-rando-title"><?php echo __( 'Précisions de balisage', 'wp-apidae' ); ?></span><?php echo $values['equipement_itineraire']['equipement_precisions_balisage']; ?></p>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['equipement_itineraire']['equipement_denivellation_positive'] ) ) :
		?>
			<p><span class="info-rando-title"><?php echo __( 'Dénivellation positive', 'wp-apidae' ); ?></span><?php echo sprintf( '%s m', $values['equipement_itineraire']['equipement_denivellation_positive'] ); ?></p>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['equipement_itineraire']['equipement_denivellation_negative'] ) ) :
		?>
			<p><span class="info-rando-title"><?php echo __( 'Dénivellation négative', 'wp-apidae' ); ?></span><?php echo sprintf( '%s m', $values['equipement_itineraire']['equipement_denivellation_negative'] ); ?></p>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['equipement_itineraire']['equipement_pente_moyenne'] ) ) :
		?>
			<p><span class="info-rando-title"><?php echo __( 'Pente moyenne', 'wp-apidae' ); ?></span><?php echo sprintf( '%s %%', $values['equipement_itineraire']['equipement_pente_moyenne'] ); ?></p>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['equipement_itineraire']['equipement_altitude_moyenne'] ) ) :
		?>
			<p><span class="info-rando-title"><?php echo __( 'Altitude moyenne', 'wp-apidae' ); ?></span><?php echo sprintf( '%s m', $values['equipement_itineraire']['equipement_altitude_moyenne'] ); ?></p>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['equipement_itineraire']['equipement_altitude_maximum'] ) ) :
		?>
			<p><span class="info-rando-title"><?php echo __( 'Altitude maximum', 'wp-apidae' ); ?></span><?php echo sprintf( '%s m', $values['equipement_itineraire']['equipement_altitude_maximum'] ); ?></p>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['equipement_itineraire']['equipement_duree_journaliere'] ) ) :
		?>
			<p><span class="info-rando-title"><?php echo __( 'Durée journalière', 'wp-apidae' ); ?></span><?php echo sprintf( '%s min', $values['equipement_itineraire']['equipement_duree_journaliere'] ); ?></p>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['equipement_itineraire']['equipement_duree_itinerance'] ) ) :
		?>
			<p><span class="info-rando-title"><?php echo __( 'Durée itinérance', 'wp-apidae' ); ?></span><?php echo sprintf( _n( '%s jour', '%s jours', $values['equipement_itineraire']['equipement_duree_itinerance'], 'wp-apidae' ), $values['equipement_itineraire']['equipement_duree_itinerance'] ); ?></p>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['equipement_itineraire']['equipement_natures_terrain'] ) ) :
		?>
		<p>
			<span class="info-rando-title"><?php echo __( 'Nature du terrain', 'wp-apidae' ); ?></span>
			<?php echo implode( ', ', $values['equipement_itineraire']['equipement_natures_terrain'] ); ?>
	</p>
		<?php
	endif;
	?>
		<?php
		if ( isset( $values['equipement_itineraire']['equipement_passages_delicats'] ) ) :
			?>
			<p><span class="info-rando-title"><?php echo __( 'Passages délicats', 'wp-apidae' ); ?></span><?php echo $values['equipement_itineraire']['equipement_passages_delicats']; ?></p>
			<?php
	endif;
		?>
	<?php
	if ( isset( $values['equipement_itineraire']['equipement_references_cartographiques'] ) ) :
		?>
			<p><span class="info-rando-title"><?php echo __( 'Références cartographiques', 'wp-apidae' ); ?></span><?php echo $values['equipement_itineraire']['equipement_references_cartographiques']; ?></p>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['equipement_itineraire']['equipement_references_topoguides'] ) ) :
		?>
			<p><span class="info-rando-title"><?php echo __( 'Références topoguides', 'wp-apidae' ); ?></span><?php echo $values['equipement_itineraire']['equipement_references_topoguides']; ?></p>
		<?php
	endif;
	?>
	<?php
	endif;


