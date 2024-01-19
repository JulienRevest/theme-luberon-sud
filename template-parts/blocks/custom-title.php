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
	$icon_class = get_field( 'icon_class' );
	$title_text = get_field( 'custom_title_text' );
	$title_color = get_field( 'custom_title_color' );
?>

<?php
if ( $title_text ) {
	echo sprintf(
		'<div class="custom-homepage-title">%s<h2 class="homepage-title">%s</h2></div>',
		isset( $icon_class ) ? '<span class="icon-' . esc_html( $icon_class ) . ' homepage-title aria-hidden="true""></span>' : '',
		esc_html( $title_text ),
	);
}
