<?php
/**
 * Single entity ouvertures
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/ouvertures.php.
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
if ( apidae_has_( 'ouverture.periodeEnClair' ) ) {
	$ouverture_title = apply_filters( 'apidae_single_ouverture_title', __( 'Ouvertures', 'wp-apidae' ) );
	?>
	<h2><span class="icon-clock" aria-hidden="true"></span><?php echo esc_html( $ouverture_title ); ?></h2>
	<div class="dae-single-presta-cols">
		<div class="dae-single-presta-block">
			<p><?php echo $values; ?></p>
		</div>
	</div>
	<?php
}

