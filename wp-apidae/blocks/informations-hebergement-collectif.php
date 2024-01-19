<?php
/**
 * Block information hebergement collectif
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/informations-hebergement-collectif.php.
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
if ( isset( $values['hebergement_collectif_informations'] ) ) :
	if ( $attributes['show_title'] ) :
		$title = __( 'Informations sur l\'hébergement', 'wp-apidae' );
		$tag   = $attributes['field_tag'];
		$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
		?>
	<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><span class="icon-infos-logement" aria-hidden="true"></span><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
		<?php
endif;
	?>
<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
	<?php
	if ( isset( $values['hebergement_collectif_informations']['hebergement_collectif_type'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Type d\'hébergement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hebergement_collectif_informations']['hebergement_collectif_type']; ?></p>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_informations']['hebergement_collectif_types_habitation'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Type d\'habitation', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['hebergement_collectif_informations']['hebergement_collectif_types_habitation'] ); ?></li>
		</ul>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_informations']['hebergement_collectif_types_hebergement'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Type d\'hébergement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['hebergement_collectif_informations']['hebergement_collectif_types_hebergement'] ); ?></li>
		</ul>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_informations']['hebergement_collectif_classement_prefectoral'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Classement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hebergement_collectif_informations']['hebergement_collectif_classement_prefectoral']; ?></p>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_informations']['hebergement_collectif_date_classement'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Date de classement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hebergement_collectif_informations']['hebergement_collectif_date_classement']; ?></p>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_informations']['hebergement_collectif_numero_classement'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Numéro de classement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hebergement_collectif_informations']['hebergement_collectif_numero_classement']; ?></p>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_informations']['hebergement_collectif_classement_labels'] ) ) :
		?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Classement labels', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['hebergement_collectif_informations']['hebergement_collectif_classement_labels'] ); ?></li>
		</ul>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_informations']['hebergement_collectif_chaines_et_labels'] ) ) :
		?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Chaînes et labels', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hebergement_collectif_informations']['hebergement_collectif_chaines_et_labels']; ?></p>
	</div>
		<?php
endif;
	?>
</div>
	<?php
endif;

if ( isset( $values['hebergement_collectif_capacite'] ) ) :
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
	if ( isset( $values['hebergement_collectif_capacite']['capacite_totale_reelle'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-infos-logement" aria-hidden="true"></span><?php echo __( 'Nombre total d’hébergements', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s hébergement', '%s hébergements', $values['hebergement_collectif_capacite']['capacite_totale_reelle'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['capacite_totale_reelle'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['nombre_chambres'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-pillows" aria-hidden="true"></span><?php echo __( 'Nombre de chambres', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s chambre', '%s chambres', $values['hebergement_collectif_capacite']['nombre_chambres'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['nombre_chambres'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['nombre_appartements'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-surface" aria-hidden="true"></span><?php echo __( 'Nombre d\'appartements', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s appartement', '%s appartements', $values['hebergement_collectif_capacite']['nombre_appartements'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['nombre_appartements'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['nombre_dortoirs'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-surface" aria-hidden="true"></span><?php echo __( 'Nombre de dortoirs', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s dortoir', '%s dortoirs', $values['hebergement_collectif_capacite']['nombre_dortoirs'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['nombre_dortoirs'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['nombre_villas'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-infos-logement" aria-hidden="true"></span><?php echo __( 'Nombre d\'habitations individuelles', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s villa', '%s villas', $values['hebergement_collectif_capacite']['nombre_villas'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['nombre_villas'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['capacite_totale_classee'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-person" aria-hidden="true"></span><?php echo __( 'Capacité totale des unités d\'hébergements classés', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s personne', '%s personnes', $values['hebergement_collectif_capacite']['capacite_totale_classee'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['capacite_totale_classee'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['capacite_totale'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-person" aria-hidden="true"></span><?php echo __( 'Capacité totale des unités d\'hébergements', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s personne', '%s personnes', $values['hebergement_collectif_capacite']['capacite_totale'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['capacite_totale'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['capacite_totale_jeunesse_sport'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-person" aria-hidden="true"></span><?php echo __( 'Capacite totale Direction Départementale de la Cohésion Sociale', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s personne', '%s personnes', $values['hebergement_collectif_capacite']['capacite_totale_jeunesse_sport'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['capacite_totale_jeunesse_sport'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['capacite_totale_education_nationale'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-person" aria-hidden="true"></span><?php echo __( 'Capacité totale Éducation Nationale', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s personne', '%s personnes', $values['hebergement_collectif_capacite']['capacite_totale_education_nationale'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['capacite_totale_education_nationale'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['capacite_commission_securite'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-person" aria-hidden="true"></span><?php echo __( 'Capacité totale commission sécurité (hors personnel du centre)', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s personne', '%s personnes', $values['hebergement_collectif_capacite']['capacite_commission_securite'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['capacite_commission_securite'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['nombre_hebergements_une_personne'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-infos-logement" aria-hidden="true"></span><?php echo __( 'Nombre chambres, appart, villas 1 pers', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s hébergement', '%s hébergements', $values['hebergement_collectif_capacite']['nombre_hebergements_une_personne'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['nombre_hebergements_une_personne'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['nombre_hebergements_deux_personnes'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-infos-logement" aria-hidden="true"></span><?php echo __( 'Nombre chambres, appart, villas 2 pers', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s hébergement', '%s hébergements', $values['hebergement_collectif_capacite']['nombre_hebergements_deux_personnes'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['nombre_hebergements_deux_personnes'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['nombre_hebergements_trois_personnes'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-infos-logement" aria-hidden="true"></span><?php echo __( 'Nombre chambres, appart, villas 3 pers', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s hébergement', '%s hébergements', $values['hebergement_collectif_capacite']['nombre_hebergements_trois_personnes'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['nombre_hebergements_trois_personnes'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['nombre_hebergements_quatre_personnes'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-infos-logement" aria-hidden="true"></span><?php echo __( 'Nombre chambres, appart, villas 4 pers', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s hébergement', '%s hébergements', $values['hebergement_collectif_capacite']['nombre_hebergements_quatre_personnes'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['nombre_hebergements_quatre_personnes'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['nombre_hebergements_cinq_personnes'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-infos-logement" aria-hidden="true"></span><?php echo __( 'Nombre chambres, appart, villas 5 pers', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s hébergement', '%s hébergements', $values['hebergement_collectif_capacite']['nombre_hebergements_cinq_personnes'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['nombre_hebergements_cinq_personnes'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['nombre_hebergements_six_personnes'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-infos-logement" aria-hidden="true"></span><?php echo __( 'Nombre chambres, appart, villas 6 pers', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s hébergement', '%s hébergements', $values['hebergement_collectif_capacite']['nombre_hebergements_six_personnes'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['nombre_hebergements_six_personnes'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['nombre_hebergements_plus_six_personnes'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-infos-logement" aria-hidden="true"></span><?php echo __( 'Nombre chambres, appart, villas plus de 6 pers', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s hébergement', '%s hébergements', $values['hebergement_collectif_capacite']['nombre_hebergements_plus_six_personnes'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['nombre_hebergements_plus_six_personnes'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['nombre_dortoirs_moyens'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-surface" aria-hidden="true"></span><?php echo __( 'Nombre dortoirs 4/9 personnes', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s dortoir', '%s dortoirs', $values['hebergement_collectif_capacite']['nombre_dortoirs_moyens'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['nombre_dortoirs_moyens'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['nombre_dortoirs_grands'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-surface" aria-hidden="true"></span><?php echo __( 'Nombre dortoirs +10 personnes', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s dortoir', '%s dortoirs', $values['hebergement_collectif_capacite']['nombre_dortoirs_grands'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['nombre_dortoirs_grands'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['nombre_hebergements_mobilite_reduite'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-disability" aria-hidden="true"></span><?php echo __( 'Nombre d\'hébergements pour personnes à mobilité réduit', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s hébergement', '%s hébergements', $values['hebergement_collectif_capacite']['nombre_hebergements_mobilite_reduite'], 'wp-apidae' ), $values['hebergement_collectif_capacite']['nombre_hebergements_mobilite_reduite'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_collectif_capacite']['descriptif_chambres'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-disability" aria-hidden="true"></span><?php echo __( 'Nombre d\'hébergements pour personnes à mobilité réduit', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo $values['hebergement_collectif_capacite']['descriptif_chambres']; ?></p>
		</div>
		<?php
	endif;
	?>
	</div>
	<?php
endif;

