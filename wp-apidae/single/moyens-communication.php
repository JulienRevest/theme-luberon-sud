<?php
/**
 * Single entity moyens communication
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/moyens-communication.php.
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

// Inject Instagram link to moyens communication
$multimedias         = apidae_get_the_( 'multimedias' );
$values['instagram'] = array();
if ( $multimedias ) {
	foreach ( $multimedias as $multimedia ) {
		$type = $multimedia['type'];
		if ( 'INSTAGRAM' !== $type ) {
			continue;
		}
		$values['instagram'][] = array( 'coordonnees' => apidae_resolve_multimedias_language( $multimedia ) );
	}
}
?>
<?php if ( ! empty( $values['site-web-url'] ) ) : ?>
	<p class="dae-coords dae-coords-site">
		<?php foreach ( $values['site-web-url'] as $value ) : ?>
			<a class="dae-tk-site dae-coords-button" href="<?php echo esc_url( $value['coordonnees'] ); ?>" target="_blank"><?php echo esc_html( __( 'Voir le site', 'wp-apidae' ) ); ?></a>
		<?php endforeach; ?>
	</p>
<?php endif; ?>

<?php if ( ! empty( $values['mel'] ) ) : ?>
	<p class="dae-coords dae-coords-emel">
		<?php
		foreach ( $values['mel'] as $value ) :
			$mail = base64_encode( $value['coordonnees'] );
			?>
			<a class="dae-tk-email dae-coords-button" href="javascript: void(0)" data-contact="<?php echo esc_attr( $mail ); ?>" onclick="location.href = 'mailto:' + atob(this.dataset.contact)"><?php echo esc_html( __( 'Envoyer un message', 'wp-apidae' ) ); ?></a>
		<?php endforeach; ?>
	</p>
<?php endif; ?>

<?php if ( ! empty( $values['telephone'] ) ) : ?>
	<p class="dae-coords dae-coords-tel">
	<?php foreach ( $values['telephone'] as $value ) : ?>
		<a class="dae-tk-tel dae-coords-button" href="tel:<?php echo esc_attr( $value['coordonnees'] ); ?>"><?php echo esc_html( $value['coordonnees'] ); ?></a>
	<?php endforeach; ?>
	</p>
<?php endif; ?>

<?php if ( ! empty( $values['fax'] ) ) : ?>
	<p class="dae-coords dae-coords-fax">
	<?php foreach ( $values['fax'] as $value ) : ?>
		<span class="dae-coords-button"><?php echo esc_attr( $value['coordonnees'] ) . ' ' . esc_html( $value['observation'] ); ?></span>
	<?php endforeach; ?>
	</p>
<?php endif; ?>


<?php if ( ! empty( $values['page-facebook'] ) || ! empty( $values['twitter'] ) || ! empty( $values['tripadvisor'] ) || ! empty( $values['instagram'] ) ) : ?>
<ul class="dae-coords-networks">
	<?php if ( ! empty( $values['page-facebook'] ) ) : ?>
		<li class="dae-coords dae-coords-facebook">
			<?php foreach ( $values['page-facebook'] as $value ) : ?>
				<a class="dae-tk-facebook dae-coords-button" href="<?php echo esc_url( $value['coordonnees'] ); ?>" target="_blank"><span class="icon-facebook" aria-hidden="true"></span></a>
			<?php endforeach; ?>
		</li>
	<?php endif; ?>

	<?php if ( ! empty( $values['instagram'] ) ) : ?>
		<li class="dae-coords dae-coords-instagram">
			<?php foreach ( $values['instagram'] as $value ) : ?>
				<a class="dae-tk-instagram dae-coords-button" href="<?php echo esc_url( $value['coordonnees'] ); ?>" target="_blank"><span class="icon-instagram" aria-hidden="true"></span></a>
			<?php endforeach; ?>
		</li>
	<?php endif; ?>

	<?php if ( ! empty( $values['twitter'] ) ) : ?>
		<li class="dae-coords dae-coords-twitter">
			<?php foreach ( $values['twitter'] as $value ) : ?>
				<a class="dae-tk-twitter dae-coords-button" href="<?php echo esc_url( $value['coordonnees'] ); ?>" target="_blank"><span class="icon-twitter" aria-hidden="true"></span></a>
			<?php endforeach; ?>
		</li>
	<?php endif; ?>

	<?php if ( ! empty( $values['tripadvisor'] ) ) : ?>
		<li class="dae-coords dae-coords-tripadvisor">
			<?php foreach ( $values['tripadvisor'] as $value ) : ?>
				<a class="dae-tk-tripadvisor dae-coords-button" href="<?php echo esc_url( $value['coordonnees'] ); ?>" target="_blank"><span class="icon-tripadvisor" aria-hidden="true"></span></a>
			<?php endforeach; ?>
		</li>
		<?php
	endif;
	?>
</ul>
	<?php
endif;
