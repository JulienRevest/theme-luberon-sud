<?php
/**
 * Page header template
 *
 * @package WordPress
 * @subpackage theme-luberon-sud
 * @since 1.0
 * @version 1.0
 */

?>

<?php
	$page_button_target     = get_field( 'page_header_button_target' );
	$page_button_text       = get_field( 'page_header_button_text' );
	$page_subtitle          = get_field( 'page_header_subtitle' );
	$page_title             = get_field( 'page_header_title' );
	$page_thumbnail         = get_field( 'page_header_thumbnail' );
	$page_thumbnail_caption = wp_get_attachment_caption( $page_thumbnail );
?>

<?php if ( $page_title ) : ?>
	<div class="page-header">
		<?php echo wp_get_attachment_image( $page_thumbnail, 'full' ); ?>

		<div class="global-page">
			<div class="front-page-header-main">
				<div class="h1"><?php echo esc_html( $page_title ); ?><?php echo '<em>' . esc_html( $page_subtitle ) . '</em>'; ?></div>
				<?php if ( $page_button_text ) : ?>
				<div class="wp-block-buttons is-content-justification-center">
					<!-- wp:button {"className":"is-style-button-white-large"} -->
					<div class="wp-block-button is-style-button-white-large">
						<a class="wp-block-button__link" href="<?php echo esc_html( $page_button_target ); ?>"><?php echo esc_html( $page_button_text ); ?></a>
					</div>
				</div>
				<?php endif; ?>
			</div>
			
			<div class="front-page-header-bottom">
				<div class="round-button" aria-hidden="true">
					<span class="arrow-bottom"></span>
				</div>

				<?php
				if ( ! empty( $page_thumbnail_caption ) ) {
					?>
						<div class="block-copyright" aria-hidden="true">
							<?php
							echo esc_html( $page_thumbnail_caption );
							?>
							<span class="screen-reader-text"><?php esc_html_e( 'Voir le copyright photo', 'luberon-sud' ); ?></span>
							<span class="icon-camera" aria-hidden="true"></span>
						</div>
					<?php
				}
				?>
				</div>
		</div>
	</div>
<?php endif; ?>
