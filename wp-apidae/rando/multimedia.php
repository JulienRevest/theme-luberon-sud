<?php
/**
 * Single entity multimedia
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single/multimedia.php.
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

if ( ! empty( $files_list ) ) {
	echo '<div class="rando-aside"><div class="dae-single-col-aside-title">' . esc_html( 'Téléchargements' ) . '</div>';
	foreach ( $files_list as $file_type => $file_data ) {
		switch ( $file_type ) {
			case 'PLAN':
				$count = count( $file_data );
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = __( 'Télécharger le ', 'luberon-sud' ) . ' ' . $file_extension;
					?>
					<p class="dae-coords"><a href="<?php echo esc_attr( $file['file_url'] ); ?>" target="_blank" class="dae-coords-button dae-tk-plan"><?php echo esc_html( $title ); ?></a></p>
					<?php
				}
				?>
				<?php
				break;
			case 'DOCUMENT':
				$count = count( $file_data );
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = __( 'Télécharger le ', 'wp-apidae' ) . ' ' . $file_extension;
					?>
					<p class="dae-coords"><a href="<?php echo esc_attr( $file['file_url'] ); ?>" target="_blank" class="dae-coords-button dae-tk-document"><?php echo esc_html( $title ); ?></a></p>
					<?php
				}
				break;
		}
	}
	echo '</div>';
}
