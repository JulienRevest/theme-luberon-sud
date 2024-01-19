<?php
/**
 * Block moyens communication
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/moyens-communication.php.
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
?>

<?php if ( isset( $values['site-web-url'] ) ) : ?>
	<p class="dae-coords dae-coords-site">
		<?php
		if ( $attributes['show_labels'] ) {
			echo esc_html( __( 'Site web', 'wp-apidae' ) ) . ' :';
		}
		foreach ( $values['site-web-url'] as $value ) :
			?>
			<a class="dae-tk-site dae-coords-button" href="<?php echo esc_url( $value['coordonnees'] ); ?>" target="_blank"><?php echo esc_html( __( 'Voir le site', 'wp-apidae' ) ); ?></a>
		<?php endforeach; ?>
	</p>
<?php endif; ?>

<?php if ( isset( $values['telephone'] ) ) : ?>
	<p class="dae-coords dae-coords-tel">
	<?php
	if ( $attributes['show_labels'] ) {
		echo esc_html( __( 'Téléphone', 'wp-apidae' ) ) . ' :';
	}
	foreach ( $values['telephone'] as $value ) :
		?>
		<a class="dae-tk-tel dae-coords-button" href="tel:<?php echo esc_attr( $value['coordonnees'] ); ?>"><?php echo esc_html( $value['coordonnees'] ); ?></a>
	<?php endforeach; ?>
	</p>
<?php endif; ?>

<?php if ( isset( $values['fax'] ) ) : ?>
	<p class="dae-coords dae-coords-fax">
		<?php
		if ( $attributes['show_labels'] ) {
			echo esc_html( __( 'Fax', 'wp-apidae' ) ) . ' :';
		}
		foreach ( $values['fax'] as $value ) :
			?>
			<span class="dae-coords-button"><?php echo esc_attr( $value['coordonnees'] ) . ' ' . esc_html( $value['observation'] ); ?></span>
	<?php endforeach; ?>
	</p>
<?php endif; ?>

<?php if ( isset( $values['mel'] ) ) : ?>
	<p class="dae-coords dae-coords-emel">
		<?php
		if ( $attributes['show_labels'] ) {
			echo esc_html( __( 'Email', 'wp-apidae' ) ) . ' :';
		}
		foreach ( $values['mel'] as $value ) :
			$mail = base64_encode( $value['coordonnees'] );
			?>
			<a class="dae-tk-email dae-coords-button" href="javascript: void(0)" data-contact="<?php echo esc_attr( $mail ); ?>" onclick="location.href = 'mailto:' + atob(this.dataset.contact)"><?php echo esc_html( __( 'Envoyer un message', 'wp-apidae' ) ); ?></a>
		<?php endforeach; ?>
	</p>
<?php endif; ?>

<?php if ( isset( $values['page-facebook'] ) ) : ?>
	<p class="dae-coords-facebook">
		<?php
		if ( $attributes['show_labels'] ) {
			echo esc_html( __( 'Facebook', 'wp-apidae' ) ) . ' :';
		}
		foreach ( $values['page-facebook'] as $value ) :
			?>
			<a class="dae-tk-facebook" href="<?php echo esc_url( $value['coordonnees'] ); ?>"><?php echo esc_html( $value['coordonnees'] ); ?></a><?php echo ' ' . esc_html( $value['observation'] ); ?>
		<?php endforeach; ?>
	</p>
<?php endif; ?>

<?php if ( isset( $values['twitter'] ) ) : ?>
	<p class="dae-coords-twitter">
		<?php
		if ( $attributes['show_labels'] ) {
			echo esc_html( __( 'Twitter', 'wp-apidae' ) ) . ' :';
		}
		foreach ( $values['twitter'] as $value ) :
			?>
			<a class="dae-tk-twitter" href="<?php echo esc_url( $value['coordonnees'] ); ?>"><?php echo esc_html( $value['coordonnees'] ); ?></a><?php echo ' ' . esc_attr( $value['observation'] ); ?>
		<?php endforeach; ?>
	</p>
<?php endif; ?>

<?php if ( isset( $values['tripadvisor'] ) ) : ?>
	<p class="dae-coords-tripadvisor">
		<?php
		if ( $attributes['show_labels'] ) {
			echo esc_html( __( 'Tripadvisor', 'wp-apidae' ) ) . ' :';
		}
		foreach ( $values['tripadvisor'] as $value ) :
			?>
			<a class="dae-tk-tripadvisor" href="<?php echo esc_url( $value['coordonnees'] ); ?>"><?php echo esc_html( $value['coordonnees'] ); ?></a><?php echo ' ' . esc_html( $value['observation'] ); ?>
		<?php endforeach; ?>
	</p>
	<?php
endif;
?>

<?php if ( isset( $values['instagram'] ) ) : ?>
	<p class="dae-coords-instagram">
		<?php
		if ( $attributes['show_labels'] ) {
			echo esc_html( __( 'Instagram', 'wp-apidae' ) ) . ' :';
		}
		foreach ( $values['instagram'] as $value ) :
			?>
			<a class="dae-tk-instagram" href="<?php echo esc_url( $value['url'] ); ?>"><?php echo esc_html( $value['url'] ); ?></a>
		<?php endforeach; ?>
	</p>
	<?php
endif;
?>

<?php if ( isset( $values['chaine-youtube'] ) ) : ?>
	<p class="dae-coords-youtube">
		<?php
		if ( $attributes['show_labels'] ) {
			echo esc_html( __( 'Chaine Youtube', 'wp-apidae' ) ) . ' :';
		}
		foreach ( $values['chaine-youtube'] as $value ) :
			?>
			<a class="dae-tk-youtube" href="<?php echo esc_url( $value['url'] ); ?>"><?php echo esc_html( $value['url'] ); ?></a>
		<?php endforeach; ?>
	</p>
	<?php
endif;
?>

<?php if ( isset( $values['chaine-dailymotion'] ) ) : ?>
	<p class="dae-coords-dailymotion">
		<?php
		if ( $attributes['show_labels'] ) {
			echo esc_html( __( 'Chaine Dailymotion', 'wp-apidae' ) ) . ' :';
		}
		foreach ( $values['chaine-dailymotion'] as $value ) :
			?>
			<a class="dae-tk-dailymotion" href="<?php echo esc_url( $value['url'] ); ?>"><?php echo esc_html( $value['url'] ); ?></a>
		<?php endforeach; ?>
	</p>
	<?php
endif;
?>

<?php if ( isset( $values['chaine-vimeo'] ) ) : ?>
	<p class="dae-coords-vimeo">
		<?php
		if ( $attributes['show_labels'] ) {
			echo esc_html( __( 'Chaine Vimeo', 'wp-apidae' ) ) . ' :';
		}
		foreach ( $values['chaine_vimeo'] as $value ) :
			?>
			<a class="dae-tk-vimeo" href="<?php echo esc_url( $value['url'] ); ?>"><?php echo esc_html( $value['url'] ); ?></a>
		<?php endforeach; ?>
	</p>
	<?php
endif;
?>

<?php if ( isset( $values['galerie-flickr'] ) ) : ?>
	<p class="dae-coords-flickr">
		<?php
		if ( $attributes['show_labels'] ) {
			echo esc_html( __( 'Galerie Flickr', 'wp-apidae' ) ) . ' :';
		}
		foreach ( $values['galerie-flickr'] as $value ) :
			?>
			<a class="dae-tk-flickr" href="<?php echo esc_url( $value['url'] ); ?>"><?php echo esc_html( $value['url'] ); ?></a>
		<?php endforeach; ?>
	</p>
	<?php
endif;
?>

<?php if ( isset( $values['pinterest'] ) ) : ?>
	<p class="dae-coords-pinterest">
		<?php
		if ( $attributes['show_labels'] ) {
			echo esc_html( __( 'Tableau Pinterest', 'wp-apidae' ) ) . ' :';
		}
		foreach ( $values['pinterest'] as $value ) :
			?>
			<a class="dae-tk-pinterest" href="<?php echo esc_url( $value['url'] ); ?>"><?php echo esc_html( $value['url'] ); ?></a>
		<?php endforeach; ?>
	</p>
	<?php
endif;
?>

<?php if ( isset( $values['snapchat'] ) ) : ?>
	<p class="dae-coords-snapchat">
		<?php
		if ( $attributes['show_labels'] ) {
			echo esc_html( __( 'Snapchat', 'wp-apidae' ) ) . ' :';
		}
		foreach ( $values['snapchat'] as $value ) :
			?>
			<a class="dae-tk-snapchat" href="<?php echo esc_url( $value['url'] ); ?>"><?php echo esc_html( $value['url'] ); ?></a>
		<?php endforeach; ?>
	</p>
	<?php
endif; ?>
