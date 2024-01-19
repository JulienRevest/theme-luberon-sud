<?php
/**
 * Block information hebergement locatif
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/informations-hebergement-locatif.php.
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
if ( isset( $values['hebergement_locatif_informations'] ) ) :
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
	if ( isset( $values['hebergement_locatif_informations']['hebergement_locatif_type'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Type d\'hébergement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hebergement_locatif_informations']['hebergement_locatif_type']; ?></p>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_informations']['hebergement_locatif_classement_prefectoral'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Classement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hebergement_locatif_informations']['hebergement_locatif_classement_prefectoral']; ?></p>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_informations']['hebergement_locatif_date_classement'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Date de classement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hebergement_locatif_informations']['hebergement_locatif_date_classement']; ?></p>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_informations']['hebergement_locatif_numero_classement'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Numéro de classement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hebergement_locatif_informations']['hebergement_locatif_numero_classement']; ?></p>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_informations']['hebergement_locatif_derniere_visite'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Date de dernière visite', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hebergement_locatif_informations']['hebergement_locatif_derniere_visite']; ?></p>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_informations']['hebergement_locatif_types_label'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Type de label et référentiel', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hebergement_locatif_informations']['hebergement_locatif_types_label']; ?></p>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_informations']['hebergement_locatif_numero_agrement_label'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'N° d’agrément ou de référencement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hebergement_locatif_informations']['hebergement_locatif_numero_agrement_label']; ?></p>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_informations']['hebergement_locatif_date_agrement_label'] ) ) :
		?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Date d’agrément ou de référencement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<p><?php echo $values['hebergement_locatif_informations']['hebergement_locatif_date_agrement_label']; ?></p>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_informations']['hebergement_locatif_labels'] ) ) :
		?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Classements et thématiques labels', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['hebergement_locatif_informations']['hebergement_locatif_labels'] ); ?></li>
		</ul>
	</div>
		<?php
endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_informations']['hebergement_locatif_types_habitation'] ) ) :
		?>
	<div class="dae-single-block-list">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Type d\'habitation', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<li><?php echo implode( '</li><li>', $values['hebergement_locatif_informations']['hebergement_locatif_types_habitation'] ); ?></li>
		</ul>
	</div>
		<?php
endif;
	?>
</div>
	<?php
endif;

if ( isset( $values['hebergement_locatif_capacite'] ) ) :
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
	if ( isset( $values['hebergement_locatif_capacite']['capacite_maximum_possible'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-person" aria-hidden="true"></span><?php echo __( 'Capacité maximum possible', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s personne', '%s personnes', $values['hebergement_locatif_capacite']['capacite_maximum_possible'], 'wp-apidae' ), $values['hebergement_locatif_capacite']['capacite_maximum_possible'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_capacite']['nombre_chambres'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-pillows" aria-hidden="true"></span><?php echo __( 'Nombre de chambres', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s chambre', '%s chambres', $values['hebergement_locatif_capacite']['nombre_chambres'], 'wp-apidae' ), $values['hebergement_locatif_capacite']['nombre_chambres'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_capacite']['nombre_cabines'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-pillows" aria-hidden="true"></span><?php echo __( 'Nombre d\'appartements', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s appartement', '%s appartements', $values['hebergement_locatif_capacite']['nombre_cabines'], 'wp-apidae' ), $values['hebergement_locatif_capacite']['nombre_cabines'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_capacite']['nombre_dortoirs'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-pillows" aria-hidden="true"></span><?php echo __( 'Nombre de dortoirs', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s cabine', '%s cabines', $values['hebergement_locatif_capacite']['nombre_dortoirs'], 'wp-apidae' ), $values['hebergement_locatif_capacite']['nombre_dortoirs'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_capacite']['nombre_chambres_en_mezzanine'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-pillows" aria-hidden="true"></span><?php echo __( 'Nombre de chambres en mezzanine', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s chambre en mezzanine', '%s chambres en mezzanine', $values['hebergement_locatif_capacite']['nombre_chambres_en_mezzanine'], 'wp-apidae' ), $values['hebergement_locatif_capacite']['nombre_chambres_en_mezzanine'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_capacite']['nombre_lits_doubles'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-double-bed" aria-hidden="true"></span><?php echo __( 'Nombre de lits doubles', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s lit', '%s lits', $values['hebergement_locatif_capacite']['nombre_lits_doubles'], 'wp-apidae' ), $values['hebergement_locatif_capacite']['nombre_lits_doubles'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_capacite']['nombre_lits_simples'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-single-bed" aria-hidden="true"></span><?php echo __( 'Nombre de lits simples', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s personne', '%s personnes', $values['hebergement_locatif_capacite']['nombre_lits_simples'], 'wp-apidae' ), $values['hebergement_locatif_capacite']['nombre_lits_simples'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_capacite']['surface'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-surface" aria-hidden="true"></span><?php echo __( 'Surface', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s m²', '%s m²', $values['hebergement_locatif_capacite']['surface'], 'wp-apidae' ), $values['hebergement_locatif_capacite']['surface'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_capacite']['nombre_salles_de_bain'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-bathroom" aria-hidden="true"></span><?php echo __( 'Nombre de salles de bain', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s salle de bain', '%s salles de bain', $values['hebergement_locatif_capacite']['nombre_salles_de_bain'], 'wp-apidae' ), $values['hebergement_locatif_capacite']['nombre_salles_de_bain'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_capacite']['nombre_wc'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-toilet" aria-hidden="true"></span><?php echo __( 'Nombre de wc', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s wc', '%s wc', $values['hebergement_locatif_capacite']['nombre_wc'], 'wp-apidae' ), $values['hebergement_locatif_capacite']['nombre_wc'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_capacite']['nombre_pieces'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-rooms" aria-hidden="true"></span><?php echo __( 'Nombre de pièces', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s pièce', '%s pièces', $values['hebergement_locatif_capacite']['nombre_pieces'], 'wp-apidae' ), $values['hebergement_locatif_capacite']['nombre_pieces'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_capacite']['nombre_etages'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-stairs" aria-hidden="true"></span><?php echo __( 'Nombre d\'étages dans le bâtiment', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s étage', '%s étages', $values['hebergement_locatif_capacite']['nombre_etages'], 'wp-apidae' ), $values['hebergement_locatif_capacite']['nombre_etages'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	<?php
	if ( isset( $values['hebergement_locatif_capacite']['numero_etage'] ) ) :
		?>
		<div class="dae-single-block">
			<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><span class="icon-stairs" aria-hidden="true"></span><?php echo __( 'Numéro d\'étage du logement', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
			<p><?php echo sprintf( _n( '%s er étage', '%s ème étage', $values['hebergement_locatif_capacite']['numero_etage'], 'wp-apidae' ), $values['hebergement_locatif_capacite']['numero_etage'] ); ?></p>
		</div>
		<?php
	endif;
	?>
	</div>
	<?php
endif;

