<?php
/**
 * Block information hotellerie
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/informations-hotellerie.php.
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
if ( isset( $values['hotellerie_classement'] ) ) :
	if ( $attributes['show_title'] ) :
		$title = __( 'Informations classement', 'wp-apidae' );
		$tag   = $attributes['field_tag'];
		$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
		?>
	<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
		<?php
endif;
	?>
<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
	<?php
	if ( isset( $values['hotellerie_classement']['classement'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Classement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hotellerie_classement']['classement']; ?></p>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hotellerie_classement']['numeroClassement'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Numéro de classement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hotellerie_classement']['numeroClassement']; ?></p>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hotellerie_classement']['dateClassement'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Date de classement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hotellerie_classement']['dateClassement']; ?></p>
	</div>
		<?php
endif;
	?>
</div>
	<?php
endif;

if ( isset( $values['hotellerie_chaines'] ) ) :
	if ( $attributes['show_title'] ) :
		$title = __( 'Chaînes', 'wp-apidae' );
		$tag   = $attributes['field_tag'];
		$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
		?>
		<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
		<?php
	endif;
	?>
	<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
		<div class="dae-single-block-list">
		<ul>
			<li><?php echo implode( '</li><li>', $values['hotellerie_chaines'] ); ?></li>
		</ul>
		</div>
	</div>
	<?php
endif;

if ( isset( $values['hotellerie_labels'] ) ) :
	if ( $attributes['show_title'] ) :
		$title = apply_filters( 'apidae_single_prestations_clientele_title', __( 'Labels', 'wp-apidae' ) );
		$tag   = $attributes['field_tag'];
		$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
		?>
		<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
		<?php
	endif;
	?>
	<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
		<div class="dae-single-block-list">
		<ul>
			<li><?php echo implode( '</li><li>', $values['hotellerie_labels'] ); ?></li>
		</ul>
		</div>
	</div>
	<?php
endif;

if ( isset( $values['hotellerie_capacite'] ) ) :
	if ( $attributes['show_title'] ) :
		$title = __( 'Capacités', 'wp-apidae' );
		$tag   = $attributes['field_tag'];
		$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
		?>
		<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><span class="icon-group" aria-hidden="true"></span><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
		<?php
	endif;
	?>
	<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
	<?php
	if ( isset( $values['hotellerie_capacite']['nombre_total_personnes'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-person" aria-hidden="true"></span><?php echo __( 'Nombre total de personnes', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s personne', '%s personnes', $values['hotellerie_capacite']['nombre_total_personnes'], 'wp-apidae' ), $values['hotellerie_capacite']['nombre_total_personnes'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_capacite']['capacite_nombre_chambres_classees'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-pillows" aria-hidden="true"></span><?php echo __( 'Nombre total de chambres classées', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s chambre', '%s chambres', $values['hotellerie_capacite']['capacite_nombre_chambres_classees'], 'wp-apidae' ), $values['hotellerie_capacite']['capacite_nombre_chambres_classees'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_capacite']['nombre_total_personnes_reel'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-person" aria-hidden="true"></span><?php echo __( 'Nombre total de personnes réel', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s personne', '%s personnes', $values['hotellerie_capacite']['nombre_total_personnes_reel'], 'wp-apidae' ), $values['hotellerie_capacite']['nombre_total_personnes_reel'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_capacite']['nombre_chambres_declarees_hotelier'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-pillows" aria-hidden="true"></span><?php echo __( 'Nombre de chambres', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s chambre', '%s chambres', $values['hotellerie_capacite']['nombre_chambres_declarees_hotelier'], 'wp-apidae' ), $values['hotellerie_capacite']['nombre_chambres_declarees_hotelier'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_capacite']['nombre_chambres_simples'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-pillows" aria-hidden="true"></span><?php echo __( 'Nombre de chambres simples', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s chambre', '%s chambres', $values['hotellerie_capacite']['nombre_chambres_simples'], 'wp-apidae' ), $values['hotellerie_capacite']['nombre_chambres_simples'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_capacite']['nombre_chambres_doubles'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-pillows" aria-hidden="true"></span><?php echo __( 'Nombre de chambres doubles', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s chambre', '%s chambres', $values['hotellerie_capacite']['nombre_chambres_doubles'], 'wp-apidae' ), $values['hotellerie_capacite']['nombre_chambres_doubles'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_capacite']['nombre_chambres_twin'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-pillows" aria-hidden="true"></span><?php echo __( 'Nombre de chambres twin', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s chambre', '%s chambres', $values['hotellerie_capacite']['nombre_chambres_twin'], 'wp-apidae' ), $values['hotellerie_capacite']['nombre_chambres_twin'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_capacite']['nombre_chambres_triples'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-pillows" aria-hidden="true"></span><?php echo __( 'Nombre de chambres triples', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s chambre', '%s chambres', $values['hotellerie_capacite']['nombre_chambres_triples'], 'wp-apidae' ), $values['hotellerie_capacite']['nombre_chambres_triples'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_capacite']['nombre_chambres_quadruples'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-pillows" aria-hidden="true"></span><?php echo __( 'Nombre de chambres quadruples', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s chambre', '%s chambres', $values['hotellerie_capacite']['nombre_chambres_quadruples'], 'wp-apidae' ), $values['hotellerie_capacite']['nombre_chambres_quadruples'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_capacite']['nombre_chambres_familiales'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-pillows" aria-hidden="true"></span><?php echo __( 'Nombre de chambres familiales', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s chambre', '%s chambres', $values['hotellerie_capacite']['nombre_chambres_familiales'], 'wp-apidae' ), $values['hotellerie_capacite']['nombre_chambres_familiales'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_capacite']['nombre_chambres_communicantes'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-pillows" aria-hidden="true"></span><?php echo __( 'Nombre de chambres communicantes', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s chambre', '%s chambres', $values['hotellerie_capacite']['nombre_chambres_communicantes'], 'wp-apidae' ), $values['hotellerie_capacite']['nombre_chambres_communicantes'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_capacite']['nombre_suites'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-pillows" aria-hidden="true"></span><?php echo __( 'Nombre de chambres communicantes', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s suite', '%s suites', $values['hotellerie_capacite']['nombre_suites'], 'wp-apidae' ), $values['hotellerie_capacite']['nombre_suites'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_capacite']['nombre_chambres_mobilite_reduite'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-disability" aria-hidden="true"></span><?php echo __( 'Nombre de chambres mobilité réduite', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s chambre', '%s chambres', $values['hotellerie_capacite']['nombre_chambres_mobilite_reduite'], 'wp-apidae' ), $values['hotellerie_capacite']['nombre_chambres_mobilite_reduite'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_capacite']['nombre_appartements'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-pillows" aria-hidden="true"></span><?php echo __( 'Nombre de chambres mobilité réduite', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s appartement', '%s appartements', $values['hotellerie_capacite']['nombre_appartements'], 'wp-apidae' ), $values['hotellerie_capacite']['nombre_appartements'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_capacite']['capacite_totale_education_nationale'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-pillows" aria-hidden="true"></span><?php echo __( 'Capacite totale Education Nationale', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s personne', '%s personnes', $values['hotellerie_capacite']['capacite_totale_education_nationale'], 'wp-apidae' ), $values['hotellerie_capacite']['capacite_totale_education_nationale'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hotellerie_capacite']['capacite_totale_jeunesse_et_cohesion_sociale'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-pillows" aria-hidden="true"></span><?php echo __( 'Capacite totale Direction Départementale de la Cohésion Sociale', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s personne', '%s personnes', $values['hotellerie_capacite']['capacite_totale_jeunesse_et_cohesion_sociale'], 'wp-apidae' ), $values['hotellerie_capacite']['capacite_totale_jeunesse_et_cohesion_sociale'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	</div>
	<?php
endif;

