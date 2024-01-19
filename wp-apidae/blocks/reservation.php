<?php
/**
 * Block reservation
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/reservation.php.
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
if ( $attributes['show_title'] ) :
	$heading   = __( 'Information réservation', 'wp-apidae' );
	$field_tag = $attributes['field_tag'];
	?>
	<<?php echo esc_attr( $field_tag ); ?>><?php echo esc_html( $heading ); ?></<?php echo esc_attr( $field_tag ); ?>>
	<?php
endif;

if ( isset( $values['telephone'] ) ) :
	?>
	<p class="dae-coords-tel">
	<?php
	if ( $attributes['show_labels'] ) :
		?>
		<span><?php echo esc_html( __( 'Téléphone', 'wp-apidae' ) ) . ' :'; ?></span>
		<?php
	endif;
	foreach ( $values['telephone'] as $value ) :
		?>
		<a class="dae-tk-tel" href="tel:<?php echo esc_attr( $value['coordonnees'] ); ?>"><?php echo esc_html( $value['coordonnees'] ); ?></a><?php echo ' ' . esc_html( $value['observation'] ); ?>
	<?php endforeach; ?>
	</p>
<?php endif; ?>

<?php if ( isset( $values['fax'] ) ) : ?>
	<p class="dae-coords-fax">
	<?php
	if ( $attributes['show_labels'] ) :
		?>
		<span><?php echo esc_html( __( 'Fax', 'wp-apidae' ) ) . ' :'; ?></span>
		<?php
	endif;
	foreach ( $values['fax'] as $value ) :
		?>
		<?php echo esc_attr( $value['coordonnees'] ) . ' ' . esc_html( $value['observation'] ); ?>
	<?php endforeach; ?>
	</p>
<?php endif; ?>

<?php if ( isset( $values['mel'] ) ) : ?>
	<p class="dae-coords-emel">
	<?php
	if ( $attributes['show_labels'] ) :
		?>
		<span><?php echo esc_html( __( 'Email', 'wp-apidae' ) ) . ' :'; ?></span>
		<?php
	endif;
	foreach ( $values['mel'] as $value ) :
		?>
			<a class="dae-tk-email" href="mailto:<?php echo esc_html( $value['coordonnees'] ); ?>"><?php echo esc_html( $value['coordonnees'] ); ?></a><?php echo ' ' . esc_html( $value['observation'] ); ?>
		<?php endforeach; ?>
	</p>
<?php endif; ?>

<?php if ( isset( $values['site-web-url'] ) ) : ?>
	<p class="dae-coords dae-coords-resa">
	<?php
	if ( $attributes['show_labels'] ) :
		?>
		<span><?php echo esc_html( __( 'Site web', 'wp-apidae' ) ) . ' :'; ?></span>
		<?php
	endif;
	foreach ( $values['site-web-url'] as $value ) :
		?>
			<a class="dae-tk-resa dae-coords-button" href="<?php echo esc_url( $value['coordonnees'] ); ?>" target="_blank"><?php echo esc_html( 'Réserver', 'wp-apidae' ); ?></a>
		<?php endforeach; ?>
	</p>
<?php endif; ?>


<?php if ( isset( $values['page_facebook'] ) ) : ?>
	<p class="dae-coords-facebook">
	<?php
	if ( $attributes['show_labels'] ) :
		?>
		<span><?php echo esc_html( __( 'Facebook', 'wp-apidae' ) ) . ' :'; ?></span>
		<?php
	endif;
	foreach ( $values['page_facebook'] as $value ) :
		?>
			<a class="dae-tk-facebook" href="<?php echo esc_url( $value['coordonnees'] ); ?>"><?php echo esc_html( $value['coordonnees'] ); ?></a><?php echo ' ' . esc_html( $value['observation'] ); ?>
		<?php endforeach; ?>
	</p>
<?php endif; ?>

<?php if ( isset( $values['page_twitter'] ) ) : ?>
	<p class="dae-coords-twitter">
	<?php
	if ( $attributes['show_labels'] ) :
		?>
		<span><?php echo esc_html( __( 'Twitter', 'wp-apidae' ) ) . ' :'; ?></span>
		<?php
	endif;
	foreach ( $values['twitter'] as $value ) :
		?>
			<a class="dae-tk-twitter" href="<?php echo esc_url( $value['coordonnees'] ); ?>"><?php echo esc_html( $value['coordonnees'] ); ?></a><?php echo ' ' . esc_attr( $value['observation'] ); ?>
		<?php endforeach; ?>
	</p>
<?php endif; ?>

<?php if ( isset( $values['tripadvisor'] ) ) : ?>
	<p class="dae-coords-tripadvisor">
		<?php
		if ( $attributes['show_labels'] ) :
			?>
			<span><?php echo esc_html( __( 'Tripadvisor', 'wp-apidae' ) ) . ' :'; ?></span>
			<?php
	endif;
		foreach ( $values['tripadvisor'] as $value ) :
			?>
			<a class="dae-tk-tripadvisor" href="<?php echo esc_url( $value['coordonnees'] ); ?>"><?php echo esc_html( $value['coordonnees'] ); ?></a><?php echo ' ' . esc_html( $value['observation'] ); ?>
		<?php endforeach; ?>
	</p>
	<?php
endif;

