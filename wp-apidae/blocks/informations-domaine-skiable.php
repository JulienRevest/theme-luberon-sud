<?php
/**
 * Block information domaine skiable
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/informations-domaine-skiable.php.
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
if ( isset( $values['domaine_ski_classification'] ) || isset( $values['domaine_ski_types'] ) ) :
	if ( $attributes['show_title'] ) :
		$title = __( 'Informations', 'wp-apidae' );
		$tag   = $attributes['field_tag'];
		$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
		?>
	<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
		<?php
endif;
	?>
<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
	<?php
	if ( isset( $values['domaine_ski_classification'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Classification', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo $values['domaine_ski_classification']; ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_types'] ) ) :
		?>
		<div class="dae-single-block-list">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Type de domaine skiable', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<ul>
				<li><?php echo implode( '</li><li>', $values['domaine_ski_types'] ); ?></li>
			</ul>
		</div>
		<?php
	endif;
	?>
</div>
	<?php
endif;

if ( isset( $values['domaine_ski_informations_pistes'] ) ) :
	if ( $attributes['show_title'] ) :
		$title = __( 'Informations pistes', 'wp-apidae' );
		$tag   = $attributes['field_tag'];
		$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
		?>
		<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
		<?php
	endif;
	?>
	<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_pistes'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre de pistes', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s piste', '%s pistes', $values['domaine_ski_informations_pistes']['nombre_pistes'], 'wp-apidae' ), $values['domaine_ski_informations_pistes']['nombre_pistes'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_pistes_vertes'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre de pistes vertes', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s piste', '%s pistes', $values['domaine_ski_informations_pistes']['nombre_pistes_vertes'], 'wp-apidae' ), $values['domaine_ski_informations_pistes']['nombre_pistes_vertes'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_pistes_bleues'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre de pistes bleues', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s piste', '%s pistes', $values['domaine_ski_informations_pistes']['nombre_pistes_bleues'], 'wp-apidae' ), $values['domaine_ski_informations_pistes']['nombre_pistes_bleues'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_pistes_rouges'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre de pistes rouges', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s piste', '%s pistes', $values['domaine_ski_informations_pistes']['nombre_pistes_rouges'], 'wp-apidae' ), $values['domaine_ski_informations_pistes']['nombre_pistes_rouges'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_pistes_noires'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre de pistes noires', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s piste', '%s pistes', $values['domaine_ski_informations_pistes']['nombre_pistes_noires'], 'wp-apidae' ), $values['domaine_ski_informations_pistes']['nombre_pistes_noires'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_km_piste'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre km de piste', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( '%s km', $values['domaine_ski_informations_pistes']['nombre_km_piste'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_km_piste_verte'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre km de piste verte', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( '%s km', $values['domaine_ski_informations_pistes']['nombre_km_piste_verte'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_km_piste_bleue'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre km de piste bleue', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( '%s km', $values['domaine_ski_informations_pistes']['nombre_km_piste_bleue'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_km_piste_rouge'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre km de piste rouge', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( '%s km', $values['domaine_ski_informations_pistes']['nombre_km_piste_rouge'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_km_piste_noire'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre km de piste noire', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( '%s km', $values['domaine_ski_informations_pistes']['nombre_km_piste_noire'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_km_piste_skating'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre km de piste skating', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( '%s km', $values['domaine_ski_informations_pistes']['nombre_km_piste_skating'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_remontees_mecaniques'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre de remontées mécaniques', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo $values['domaine_ski_informations_pistes']['nombre_remontees_mecaniques']; ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_teleskis'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre de téléskis', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo $values['domaine_ski_informations_pistes']['nombre_teleskis']; ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_telesieges'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre de télésièges', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo $values['domaine_ski_informations_pistes']['nombre_telesieges']; ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_telecabines'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre de télécabines', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo $values['domaine_ski_informations_pistes']['nombre_telecabines']; ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_telepheriques'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre de téléphériques', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo $values['domaine_ski_informations_pistes']['nombre_telepheriques']; ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_autres_remontees'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre autres remontées', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo $values['domaine_ski_informations_pistes']['nombre_autres_remontees']; ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_remontees_accessibles_pietons'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre de remontées pietons', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo $values['domaine_ski_informations_pistes']['nombre_remontees_accessibles_pietons']; ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_handiski'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre handiski', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo $values['domaine_ski_informations_pistes']['nombre_handiski']; ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['nombre_remontees_ski_fond'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nombre remontées ski de fond', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo $values['domaine_ski_informations_pistes']['nombre_remontees_ski_fond']; ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['remontee_gratuite'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Remontées gratuites', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo $values['domaine_ski_informations_pistes']['remontee_gratuite']; ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['neige_culture'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Neige de culture', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo $values['domaine_ski_informations_pistes']['neige_culture']; ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['neige_description'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Description de la neige', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo $values['domaine_ski_informations_pistes']['neige_description']; ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['domaine_ski_informations_pistes']['identifiant_domaine_relie'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nom du plus grand domaine relié', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo $values['domaine_ski_informations_pistes']['identifiant_domaine_relie']; ?></p>
		</div>
		<?php
	endif;
	?>
	<div>
	<?php
	endif;

if ( isset( $values['domaine_ski_informations_forfait'] ) ) :
	if ( $attributes['show_title'] ) :
		$title = __( 'Informations forfait', 'wp-apidae' );
		$tag   = $attributes['field_tag'];
		$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
		?>
		<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
			<?php
	endif;
	?>
	<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
		<?php
		if ( isset( $values['domaine_ski_informations_forfait']['identifiant_forfait'] ) ) :
			?>
			<div class="dae-single-block">
				<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Nom du forfait', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
				<p><?php echo $values['domaine_ski_informations_forfait']['identifiant_forfait']; ?></p>
			</div>
			<?php
		endif;
		?>
		<?php
		if ( isset( $values['domaine_ski_informations_forfait']['condition_forfait_gratuit'] ) ) :
			?>
			<div class="dae-single-block">
				<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Condition du forfait gratuit', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
				<p><?php echo $values['domaine_ski_informations_forfait']['condition_forfait_gratuit']; ?></p>
			</div>
			<?php
		endif;
		?>
		<?php
		if ( isset( $values['domaine_ski_informations_forfait']['validite_tarif_enfant'] ) ) :
			?>
			<div class="dae-single-block">
				<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Validité tarif enfant', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
				<p><?php echo $values['domaine_ski_informations_forfait']['validite_tarif_enfant']; ?></p>
			</div>
			<?php
		endif;
		?>
		<?php
		if ( isset( $values['domaine_ski_informations_forfait']['validite_tarif_senior'] ) ) :
			?>
			<div class="dae-single-block">
				<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Validité tarif senior', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
				<p><?php echo $values['domaine_ski_informations_forfait']['validite_tarif_senior']; ?></p>
			</div>
			<?php
		endif;
		?>
	</div>
		<?php
	endif;

