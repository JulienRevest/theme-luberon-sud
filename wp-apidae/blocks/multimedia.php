<?php
/**
 * Block multimedia
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/blocks/multimedia.php.
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
	$title = __( 'Documents', 'wp-apidae' );
	$tag   = $attributes['field_tag'];
	$class = $attributes['className'] ? 'class="' . esc_attr( $attributes['className'] ) . '"' : '';
	?>
	<<?php echo esc_attr( $tag ); ?> <?php echo $class; ?>><span class="icon-flyer" aria-hidden="true"></span><?php echo esc_html( $title ); ?></<?php echo esc_attr( $tag ); ?>>
	<?php
endif;
?>
<div class="dae-single-cols <?php echo esc_attr( $attributes['className'] ); ?>">
<?php
if ( isset( $values['document'] ) ) :
	?>
		<ul>
			<?php
			foreach ( $values['document'] as $value ) :
				$file_extension = $value['file_extension'];
				$title          = ( isset( $value['name'] ) ) ? __( 'Télécharger le document', 'wp-apidae' ) . ' ' . $file_extension : __( 'Télécharger le document', 'wp-apidae' ) . ' ' . $file_extension;
				?>
			<li><a class="dae-coords-button dae-tk-document" href="<?php echo esc_url( $value['file_url'] ); ?>" target="<?php echo esc_attr( $attributes['open_links'] ); ?>"><?php echo esc_html( $title ); ?></a></li>
			<?php endforeach; ?>
		</ul>
	<?php
endif;
?>
<?php
if ( isset( $values['plan'] ) ) :
	?>
		<ul>
			<?php
			foreach ( $values['plan'] as $value ) :
				$file_extension = $value['file_extension'];
				$title          = ( isset( $value['name'] ) ) ? __( 'Télécharger le tracé', 'wp-apidae' ) . ' ' . $file_extension : __( 'Télécharger le tracé', 'wp-apidae' ) . ' ' . $file_extension;
				?>
			<li><a class="dae-coords-button dae-tk-plan" href="<?php echo esc_url( $value['file_url'] ); ?>" target="<?php echo esc_attr( $attributes['open_links'] ); ?>"><?php echo esc_html( $title ); ?></a></li>
			<?php endforeach; ?>
		</ul>
	<?php
endif;
?>
<?php
if ( isset( $values['video'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Vidéos', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<?php
			foreach ( $values['video'] as $value ) :
				$file_extension = $value['file_extension'];
				$title          = ( isset( $value['name'] ) ) ? __( 'Voir la vidéo', 'wp-apidae' ) . ' ' . $file_extension . ' ( ' . $value['name'] . ' )' : __( 'Voir la vidéo', 'wp-apidae' ) . ' ' . $file_extension;
				?>
			<li><a href="<?php echo esc_url( $value['file_url'] ); ?>" target="<?php echo esc_attr( $attributes['open_links'] ); ?>"><?php echo esc_html( $title ); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['logo'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Logos', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<?php
			foreach ( $values['logo'] as $value ) :
				$file_extension = $value['file_extension'];
				$title          = ( isset( $value['name'] ) ) ? __( 'Voir le logo', 'wp-apidae' ) . ' ' . $file_extension . ' ( ' . $value['name'] . ' )' : __( 'Voir le logo', 'wp-apidae' ) . ' ' . $file_extension;
				?>
			<li><a href="<?php echo esc_url( $value['file_url'] ); ?>" target="<?php echo esc_attr( $attributes['open_links'] ); ?>"><?php echo esc_html( $title ); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['webcam'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Webcams', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<?php
			foreach ( $values['webcam'] as $value ) :
				$file_extension = $value['file_extension'];
				$title          = ( isset( $value['name'] ) ) ? __( 'Accéder à la webcam', 'wp-apidae' ) . ' ' . $file_extension . ' ( ' . $value['name'] . ' )' : __( 'Accéder à la webcam', 'wp-apidae' ) . ' ' . $file_extension;
				?>
			<li><a href="<?php echo esc_url( $value['file_url'] ); ?>" target="<?php echo esc_attr( $attributes['open_links'] ); ?>"><?php echo esc_html( $title ); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['webcam_360'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Webcams 360', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<?php
			foreach ( $values['webcam_360'] as $value ) :
				$file_extension = $value['file_extension'];
				$title          = ( isset( $value['name'] ) ) ? __( 'Accéder à la webcam 360', 'wp-apidae' ) . ' ' . $file_extension . ' ( ' . $value['name'] . ' )' : __( 'Accéder à la webcam 360', 'wp-apidae' ) . ' ' . $file_extension;
				?>
			<li><a href="<?php echo esc_url( $value['file_url'] ); ?>" target="<?php echo esc_attr( $attributes['open_links'] ); ?>"><?php echo esc_html( $title ); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['visite_virtuelle'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Visites virtuelles', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<?php
			foreach ( $values['visite_virtuelle'] as $value ) :
				$file_extension = $value['file_extension'];
				$title          = ( isset( $value['name'] ) ) ? __( 'Accéder à la visite virtuelle', 'wp-apidae' ) . ' ' . $file_extension . ' ( ' . $value['name'] . ' )' : __( 'Accéder à la visite virtuelle', 'wp-apidae' ) . ' ' . $file_extension;
				?>
			<li><a href="<?php echo esc_url( $value['file_url'] ); ?>" target="<?php echo esc_attr( $attributes['open_links'] ); ?>"><?php echo esc_html( $title ); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['brochure_virtuelle'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Brochures en ligne', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<?php
			foreach ( $values['brochure_virtuelle'] as $value ) :
				$file_extension = $value['file_extension'];
				$title          = ( isset( $value['name'] ) ) ? __( 'Brochure en ligne', 'wp-apidae' ) . ' ' . $file_extension . ' ( ' . $value['name'] . ' )' : __( 'Brochure en ligne', 'wp-apidae' ) . ' ' . $file_extension;
				?>
			<li><a href="<?php echo esc_url( $value['file_url'] ); ?>" target="<?php echo esc_attr( $attributes['open_links'] ); ?>"><?php echo esc_html( $title ); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['bon_plan'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Bons plans', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<?php
			foreach ( $values['bon_plan'] as $value ) :
				$file_extension = $value['file_extension'];
				$title          = ( isset( $value['name'] ) ) ? __( 'Accéder au bon plan', 'wp-apidae' ) . ' ' . $file_extension . ' ( ' . $value['name'] . ' )' : __( 'Accéder au bon plan', 'wp-apidae' ) . ' ' . $file_extension;
				?>
			<li><a href="<?php echo esc_url( $value['file_url'] ); ?>" target="<?php echo esc_attr( $attributes['open_links'] ); ?>"><?php echo esc_html( $title ); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['application_iphone'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Applications Iphone', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<?php
			foreach ( $values['application_iphone'] as $value ) :
				$file_extension = $value['file_extension'];
				$title          = ( isset( $value['name'] ) ) ? __( 'Accéder à l\'application', 'wp-apidae' ) . ' ' . $file_extension . ' ( ' . $value['name'] . ' )' : __( 'Accéder à l\'application', 'wp-apidae' ) . ' ' . $file_extension;
				?>
			<li><a href="<?php echo esc_url( $value['file_url'] ); ?>" target="<?php echo esc_attr( $attributes['open_links'] ); ?>"><?php echo esc_html( $title ); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['application_ipad'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Applications Ipad', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<?php
			foreach ( $values['application_ipad'] as $value ) :
				$file_extension = $value['file_extension'];
				$title          = ( isset( $value['name'] ) ) ? __( 'Accéder à l\'application', 'wp-apidae' ) . ' ' . $file_extension . ' ( ' . $value['name'] . ' )' : __( 'Accéder à l\'application', 'wp-apidae' ) . ' ' . $file_extension;
				?>
			<li><a href="<?php echo esc_url( $value['file_url'] ); ?>" target="<?php echo esc_attr( $attributes['open_links'] ); ?>"><?php echo esc_html( $title ); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['application_android'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Applications Android', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<?php
			foreach ( $values['application_android'] as $value ) :
				$file_extension = $value['file_extension'];
				$title          = ( isset( $value['name'] ) ) ? __( 'Accéder à l\'application', 'wp-apidae' ) . ' ' . $file_extension . ' ( ' . $value['name'] . ' )' : __( 'Accéder à l\'application', 'wp-apidae' ) . ' ' . $file_extension;
				?>
			<li><a href="<?php echo esc_url( $value['file_url'] ); ?>" target="<?php echo esc_attr( $attributes['open_links'] ); ?>"><?php echo esc_html( $title ); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php
endif;
?>
<?php
if ( isset( $values['application_android_tablette'] ) ) :
	?>
	<div class="dae-single-block">
		<<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>><?php echo __( 'Applications Android tablette', 'wp-apidae' ); ?></<?php echo esc_attr( $attributes['ss_field_tag'] ); ?>>
		<ul>
			<?php
			foreach ( $values['application_android_tablette'] as $value ) :
				$file_extension = $value['file_extension'];
				$title          = ( isset( $value['name'] ) ) ? __( 'Accéder à l\'application', 'wp-apidae' ) . ' ' . $file_extension . ' ( ' . $value['name'] . ' )' : __( 'Accéder à l\'application', 'wp-apidae' ) . ' ' . $file_extension;
				?>
			<li><a href="<?php echo esc_url( $value['file_url'] ); ?>" target="<?php echo esc_attr( $attributes['open_links'] ); ?>"><?php echo esc_html( $title ); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php
endif;
?>
</div>

