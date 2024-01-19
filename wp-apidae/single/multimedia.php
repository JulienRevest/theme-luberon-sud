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
	foreach ( $files_list as $file_type => $file_data ) {
		switch ( $file_type ) {
			case 'PLAN':
				$count = count( $file_data );
				?>
				<h2><?php echo esc_html( _n( 'Plan et tracé', 'Plans et tracés', number_format_i18n( $count ), 'wp-apidae' ) ); ?></h2>
				<ul>
				<?php
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = ( isset( $file['name'] ) ) ? __( 'Télécharger le tracé', 'wp-apidae' ) . ' ' . $file_extension . ' ( ' . $file['name'] . ' )' : __( 'Télécharger le tracé', 'wp-apidae' ) . ' ' . $file_extension;
					?>
					<li><a href="<?php echo esc_attr( $file['file_url'] ); ?>" class="dae-tk-plan"><?php echo esc_html( $title ); ?></a></li>
					<?php
				}
				?>
				</ul>
				<?php
				break;
			case 'DOCUMENT':
				$count = count( $file_data );
				?>
				<h2><span class="icon-flyer" aria-hidden="true"></span><?php echo esc_html( _n( 'Document', 'Documents', number_format_i18n( $count ), 'wp-apidae' ) ); ?></h2>
				<ul>
				<?php
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = ( isset( $file['name'] ) ) ? __( 'Télécharger le document', 'wp-apidae' ) . ' ' . $file_extension . ' ( ' . $file['name'] . ' )' : __( 'Télécharger le document', 'wp-apidae' ) . ' ' . $file_extension;
					?>
					<li><a href="<?php echo esc_attr( $file['file_url'] ); ?>" class="dae-tk-document"><?php echo esc_html( $title ); ?></a></li>
					<?php
				}
				?>
				</ul>
				<?php
				break;
			case 'LOGO':
				$count = count( $file_data );
				?>
				<h2><?php echo esc_html( _n( 'Logo', 'Logos', number_format_i18n( $count ), 'wp-apidae' ) ); ?></h2>
				<ul>
				<?php
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = ( isset( $file['name'] ) ) ? __( 'Voir le logo', 'wp-apidae' ) . ' ( ' . $file['name'] . ' )' : __( 'Voir le logo', 'wp-apidae' );
					?>
					<li><a href="<?php echo esc_attr( $file['file_url'] ); ?>" target="_blank" class="dae-tk-logo"><?php echo esc_html( $title ); ?></a></li>
					<?php
				}
				?>
				</ul>
				<?php
				break;
			case 'WEBCAM':
				$count = count( $file_data );
				?>
				<h2><?php echo esc_html( _n( 'Webcam', 'Webcams', number_format_i18n( $count ), 'wp-apidae' ) ); ?></h2>
				<ul>
				<?php
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = ( isset( $file['name'] ) ) ? __( 'Accéder à la webcam', 'wp-apidae' ) . ' ( ' . $file['name'] . ' )' : __( 'Accéder à la webcam', 'wp-apidae' );
					?>
					<li><a href="<?php echo esc_attr( $file['file_url'] ); ?>" target="_blank" class="dae-tk-webcam"><?php echo esc_html( $title ); ?></a></li>
					<?php
				}
				?>
				</ul>
				<?php
				break;
			case 'WEBCAM_360':
				$count = count( $file_data );
				?>
				<h2><?php echo esc_html( _n( 'Webcam 360', 'Webcams 360', number_format_i18n( $count ), 'wp-apidae' ) ); ?></h2>
				<ul>
				<?php
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = ( isset( $file['name'] ) ) ? __( 'Accéder à la webcam 360', 'wp-apidae' ) . ' ( ' . $file['name'] . ' )' : __( 'Accéder à la webcam 360', 'wp-apidae' );
					?>
					<li><a href="<?php echo esc_attr( $file['file_url'] ); ?>" target="_blank" class="dae-tk-webcam"><?php echo esc_html( $title ); ?></a></li>
					<?php
				}
				?>
				</ul>
				<?php
				break;
			case 'VISITE_VIRTUELLE':
				$count = count( $file_data );
				?>
				<h2><?php echo esc_html( _n( 'Visite virtuelle', 'Visites virtuelle', number_format_i18n( $count ), 'wp-apidae' ) ); ?></h2>
				<ul>
				<?php
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = ( isset( $file['name'] ) ) ? __( 'Accéder à la visite virtuelle', 'wp-apidae' ) . ' ( ' . $file['name'] . ' )' : __( 'Accéder à la visite virtuelle', 'wp-apidae' );
					?>
					<li><a href="<?php echo esc_attr( $file['file_url'] ); ?>" target="_blank" class="dae-tk-visitev"><?php echo esc_html( $title ); ?></a></li>
					<?php
				}
				?>
				</ul>
				<?php
				break;
			case 'BROCHURE_VIRTUELLE':
				$count = count( $file_data );
				?>
				<h2><?php echo esc_html( _n( 'Brochure en ligne', 'Brochures en ligne', number_format_i18n( $count ), 'wp-apidae' ) ); ?></h2>
				<ul>
				<?php
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = ( isset( $file['name'] ) ) ? __( 'Accéder à la brochure en ligne', 'wp-apidae' ) . ' ( ' . $file['name'] . ' )' : __( 'Accéder à la brochure en ligne', 'wp-apidae' );
					?>
					<li><a href="<?php echo esc_attr( $file['file_url'] ); ?>" target="_blank" class="dae-tk-brochurev"><?php echo esc_html( $title ); ?></a></li>
					<?php
				}
				?>
				</ul>
				<?php
				break;
			case 'BON_PLAN':
				$count = count( $file_data );
				?>
				<h2><?php echo esc_html( _n( 'Bon plan', 'Bons plans', number_format_i18n( $count ), 'wp-apidae' ) ); ?></h2>
				<ul>
				<?php
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = ( isset( $file['name'] ) ) ? __( 'Accéder au bon plan', 'wp-apidae' ) . ' ( ' . $file['name'] . ' )' : __( 'Accéder au bon plan', 'wp-apidae' );
					?>
					<li><a href="<?php echo esc_attr( $file['file_url'] ); ?>" target="_blank" class="dae-tk-bonplan"><?php echo esc_html( $title ); ?></a></li>
					<?php
				}
				?>
				</ul>
				<?php
				break;
			case 'CHAINE_YOUTUBE':
				$count = count( $file_data );
				?>
				<h2><?php echo esc_html( _n( 'Chaine Youtube', 'Chaines Youtube', number_format_i18n( $count ), 'wp-apidae' ) ); ?></h2>
				<ul>
				<?php
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = ( isset( $file['name'] ) ) ? __( 'Accéder à la chaine', 'wp-apidae' ) . ' ( ' . $file['name'] . ' )' : __( 'Accéder à la chaine', 'wp-apidae' );
					?>
					<li><a href="<?php echo esc_attr( $file['file_url'] ); ?>" target="_blank" class="dae-tk-chaineyoutube"><?php echo esc_html( $title ); ?></a></li>
					<?php
				}
				?>
				</ul>
				<?php
				break;
			case 'CHAINE_DAILYMOTION':
				$count = count( $file_data );
				?>
				<h2><?php echo esc_html( _n( 'Chaine Dailymotion', 'Chaines Dailymotion', number_format_i18n( $count ), 'wp-apidae' ) ); ?></h2>
				<ul>
				<?php
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = ( isset( $file['name'] ) ) ? __( 'Accéder à la chaine', 'wp-apidae' ) . ' ( ' . $file['name'] . ' )' : __( 'Accéder à la chaine', 'wp-apidae' );
					?>
					<li><a href="<?php echo esc_attr( $file['file_url'] ); ?>" target="_blank" class="dae-tk-chainedailymotion"><?php echo esc_html( $title ); ?></a></li>
					<?php
				}
				?>
				</ul>
				<?php
				break;
			case 'CHAINE_VIMEO':
				$count = count( $file_data );
				?>
				<h2><?php echo esc_html( _n( 'Chaine Vimeo', 'Chaines Vimeo', number_format_i18n( $count ), 'wp-apidae' ) ); ?></h2>
				<ul>
				<?php
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = ( isset( $file['name'] ) ) ? __( 'Accéder à la chaine', 'wp-apidae' ) . ' ( ' . $file['name'] . ' )' : __( 'Accéder à la chaine', 'wp-apidae' );
					?>
					<li><a href="<?php echo esc_attr( $file['file_url'] ); ?>" target="_blank" class="dae-tk-chainevimeo"><?php echo esc_html( $title ); ?></a></li>
					<?php
				}
				?>
				</ul>
				<?php
				break;
			case 'GALERIE_FLICKR':
				$count = count( $file_data );
				?>
				<h2><?php echo esc_html( _n( 'Gallerie Flickr', 'Galleries Flickr', number_format_i18n( $count ), 'wp-apidae' ) ); ?></h2>
				<ul>
				<?php
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = ( isset( $file['name'] ) ) ? __( 'Accéder à la gallerie', 'wp-apidae' ) . ' ( ' . $file['name'] . ' )' : __( 'Accéder à la gallerie', 'wp-apidae' );
					?>
					<li><a href="<?php echo esc_attr( $file['file_url'] ); ?>" target="_blank" class="dae-tk-fickr"><?php echo esc_html( $title ); ?></a></li>
					<?php
				}
				?>
				</ul>
				<?php
				break;
			case 'PINTEREST':
				$count = count( $file_data );
				?>
				<h2><?php echo esc_html( _n( 'Tableau Pinterest', 'Tableaux Pinterest', number_format_i18n( $count ), 'wp-apidae' ) ); ?></h2>
				<ul>
				<?php
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = ( isset( $file['name'] ) ) ? __( 'Voir le tableau', 'wp-apidae' ) . ' ( ' . $file['name'] . ' )' : __( 'Voir le tableau', 'wp-apidae' );
					?>
					<li><a href="<?php echo esc_attr( $file['file_url'] ); ?>" target="_blank" class="dae-tk-pinterest"><?php echo esc_html( $title ); ?></a></li>
					<?php
				}
				?>
				</ul>
				<?php
				break;
			case 'SNAPCHAT':
				?>
				<h2><?php echo esc_html( __( 'Snapchat', 'wp-apidae' ) ); ?></h2>
				<ul>
				<?php
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = ( isset( $file['name'] ) ) ? __( 'Voir le compte', 'wp-apidae' ) . ' ( ' . $file['name'] . ' )' : __( 'Voir le compte', 'wp-apidae' );
					?>
					<li><a href="<?php echo esc_attr( $file['file_url'] ); ?>" target="_blank" class="dae-tk-snapchat"><?php echo esc_html( $title ); ?></a></li>
					<?php
				}
				?>
				</ul>
				<?php
				break;
			case 'APPLICATION_IPHONE':
				$count = count( $file_data );
				?>
				<h2><?php echo esc_html( _n( 'Application Iphone', 'Applications Iphone', number_format_i18n( $count ), 'wp-apidae' ) ); ?></h2>
				<ul>
				<?php
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = ( isset( $file['name'] ) ) ? __( 'Accéder à l\'application', 'wp-apidae' ) . ' ( ' . $file['name'] . ' )' : __( 'Accéder à l\'application', 'wp-apidae' );
					?>
					<li><a href="<?php echo esc_attr( $file['file_url'] ); ?>" target="_blank" class="dae-tk-appiphone"><?php echo esc_html( $title ); ?></a></li>
					<?php
				}
				?>
				</ul>
				<?php
				break;
			case 'APPLICATION_IPAD':
				$count = count( $file_data );
				?>
				<h2><?php echo esc_html( _n( 'Application Ipad', 'Applications Ipad', number_format_i18n( $count ), 'wp-apidae' ) ); ?></h2>
				<ul>
				<?php
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = ( isset( $file['name'] ) ) ? __( 'Accéder à l\'application', 'wp-apidae' ) . ' ( ' . $file['name'] . ' )' : __( 'Accéder à l\'application', 'wp-apidae' );
					?>
					<li><a href="<?php echo esc_attr( $file['file_url'] ); ?>" target="_blank" class="dae-tk-appipad"><?php echo esc_html( $title ); ?></a></li>
					<?php
				}
				?>
				</ul>
				<?php
				break;
			case 'APPLICATION_ANDROID':
				$count = count( $file_data );
				?>
				<h2><?php echo esc_html( _n( 'Application Android', 'Applications Android', number_format_i18n( $count ), 'wp-apidae' ) ); ?></h2>
				<ul>
				<?php
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = ( isset( $file['name'] ) ) ? __( 'Accéder à l\'application', 'wp-apidae' ) . ' ( ' . $file['name'] . ' )' : __( 'Accéder à l\'application', 'wp-apidae' );
					?>
					<li><a href="<?php echo esc_attr( $file['file_url'] ); ?>" target="_blank" class="dae-tk-appandroid"><?php echo esc_html( $title ); ?></a></li>
					<?php
				}
				?>
				</ul>
				<?php
				break;
			case 'APPLICATION_ANDROID_TABLETTE':
				$count = count( $file_data );
				?>
				<h2><?php echo esc_html( _n( 'Application tablette Android', 'Applications tablette Android', number_format_i18n( $count ), 'wp-apidae' ) ); ?></h2>
				<ul>
				<?php
				foreach ( $file_data as $file ) {
					$file_extension = $file['file_extension'];
					$title          = ( isset( $file['name'] ) ) ? __( 'Accéder à l\'application', 'wp-apidae' ) . ' ( ' . $file['name'] . ' )' : __( 'Accéder à l\'application', 'wp-apidae' );
					?>
					<li><a href="<?php echo esc_attr( $file['file_url'] ); ?>" target="_blank" class="dae-tk-apptablette"><?php echo esc_html( $title ); ?></a></li>
					<?php
				}
				?>
				</ul>
				<?php
				break;
		}
	}
}
