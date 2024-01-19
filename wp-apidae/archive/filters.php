<?php
/**
 * Archive filters LTS
 *
 * @package WP-Apidae
 * @version 4.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $wp;
$obj_id      = get_queried_object_id();
$current_url = get_permalink();
$form_url    = preg_replace( '/\/page\/\d+/', '', $current_url );

?>
<div id="dae-filters-shadow" class="dae-filters-shadow"></div>
<div id="dae-filters" class="dae-aside dae-filters dae-overlay">
	<div class="dae-filters-wrapper">
		<h2 class="dae-filters-title"><?php echo __( 'Filtres', 'wp-apidae' ); ?></h2>
		<button class="dae-close-filters wp-block-button__link"><?php echo __( 'Fermer', 'wp-apidae' ); ?><span class="icon-close" aria-hidden="true"></span></button>
		<div class="dae-wrapper-suppress-btn">
			<a href="<?php echo esc_url( get_permalink() ); ?>" class=""><?php echo esc_html__( 'Supprimer les filtres', 'wp-apidae' ); ?></a>
		</div>
		<form id="dae-filters-form" action="#" method="post">
			<input type="hidden" name="action" value="wpapidae_filter_archive">
			<input type="hidden" name="form_url" value="<?php echo esc_url( $form_url ); ?>">
			<input type="hidden" name="post_id" value="<?php the_ID(); ?>">
			
			<?php
			if ( isset( $_GET['page_id'] ) ) {
				echo '<input type="hidden" name="page_id" value="' . esc_attr( $_GET['page_id'] ) . '">';
			} elseif ( isset( $_GET['p'] ) ) {
				echo '<input type="hidden" name="p" value="' . esc_attr( $_GET['p'] ) . '">';
			}
			?>

			<div class="dae-filters-choices dae-col">
			<?php
			/**
			 * Hook: apidae_archive_filters_choices
			 *
			 * @hooked apidae_template_archive_filters_choices - 5
			 */
			do_action( 'apidae_archive_filters_choices' );
			?>
			</div>

		</form>
	</div>
</div>
