<?php
/**
 * Template for displaying single entity data
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/content-single-entity.php.
 *
 * IMPORTANT: on occasion WP-Apidae will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. Be safe and maintain your templates up to date.
 *
 * @package WP-Apidae
 * @version 4.0.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Hook: apidae_before_single_entity.
 *
 * @hooked apidae_template_single_rich_snippet - 5
 */
do_action( 'apidae_before_single_entity' );
?>
	<div class="dae-single-cols">
		<div class="dae-single-col-main">
			<?php
			/**
			 * Hook: apidae_single_gallery
			 *
			 * @hooked apidae_template_single_gallery - 5
			 */
			do_action( 'apidae_single_gallery' );
			?>

			<?php
			/**
			 * Hook: apidae_single_header.
			 *
			 * @hooked apidae_template_single_title - 5
			 * @hooked apidae_template_single_descriptifs_thematises - 10
			 */
			do_action( 'apidae_single_header' );
			?>

			<div class="dae-single-content">
				<?php

				/**
				 * Hook : For 3rd party.
				 */
				do_action( 'apidae_before_single_content' );

				/**
				 * Hook: apidae_single_content
				 *
				 * @hooked apidae_template_single_blocks - 10
				 * @hooked apidae_template_single_descriptif_court - 10
				 * @hooked apidae_template_single_descriptif_detaille - 10
				 * @hooked apidae_template_single_informations - 10
				 * @hooked apidae_template_single_content_prestations - 10
				 * @hooked apidae_template_single_content_ouvertures - 10
				 * @hooked apidae_template_single_content_tarifs - 10
				 * @hooked apidae_template_single_content_reservation - 10
				 * @hooked apidae_template_single_content_tourisme_affaire - 10
				 */
				// do_action( 'apidae_single_content' );
				apidae_template_single_descriptif_court();
				apidae_template_single_descriptif_detaille();
				apidae_template_single_informations();
				?>
			</div>
		</div>

		<div class="dae-single-col-aside">
			<div class="dae-single-col-aside-content">
			<?php
			/**
			 * Hook: apidae_single_location
			 *
			 * @hooked apidae_template_single_location - 10
			 */
			do_action( 'apidae_single_location' );
			?>
				<div class="dae-coords-bottom">
					<div class="dae-single-col-aside-title"><?php esc_html_e( 'Contact', 'luberon-sud' ); ?></div>
					
					<?php
					/**
					 * Hook: apidae_single_summary
					 *
					 * @hooked apidae_template_single_adresse - 10
					 * @hooked apidae_template_single_moyens_communication - 10
					 */
					do_action( 'apidae_single_summary' );
					?>
				</div>
			</div>
			<button class="dae-single-contact-open-button">
				<span class="txt-contact"><?php esc_html_e( 'Afficher l\'adresse et les contacts', 'luberon-sud' ); ?></span>
				<span class="txt-close"><?php esc_html_e( 'Fermer', 'luberon-sud' ); ?></span>
			</button>
		</div>
	</div>

	<?php
	/**
	 * Hook: apidae_single_related
	 *
	 * @hooked apidae_template_single_related - 10
	 */
	do_action( 'apidae_single_related' );
	?>

<?php do_action( 'apidae_after_single_entity' ); ?>
