<?php
/**
 * Single entity environement
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/environement.php.
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

$heading = apply_filters( 'apidae_single_environement_title', __( 'Détails environnement', 'wp-apidae' ) );
?>
<h2><span class="icon-eye" aria-hidden="true"></span><?php echo esc_html( $heading ); ?></h2>
<div class="dae-single-presta-cols">
	<div class="dae-single-presta-block">
		<?php if ( ! empty( $environement_complement ) ) : ?>
		<p><?php echo wp_kses_post( $environement_complement ); ?></p>
		<?php endif; ?>
		<ul>
			<?php foreach ( $environements as $environement ) : ?>
			<li><?php echo esc_html( $environement ); ?></li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
