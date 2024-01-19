<?php
/**
 * Template for displaying all single entities
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/single-entity.php.
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

get_header(); ?>

	<?php
		/**
		 * Hook: apidae_before_main_content.
		 *
		 * @hooked apidae_output_content_wrapper - 10
		 */
		do_action( 'apidae_before_main_content' );
	?>


	<?php while ( have_posts() ) : ?>
		<?php
		the_post();
		$template = 'content';

		if ( has_term( 'selectionids_107636', 'at_selectionids' ) || has_term( 'selectionids_110825', 'at_selectionids' ) || has_term( 'selectionids_111424', 'at_selectionids' ) || has_term( 'selectionids_111423', 'at_selectionids' ) ) {
			$template = 'rando';
		}
		wpdae_get_template_part( $template, 'single-entity' );
		?>
	<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * Hook: apidae_after_main_content hook.
		 *
		 * @hooked apidae_output_content_wrapper_end - 10
		 */
		do_action( 'apidae_after_main_content' );
	?>

	<?php
		get_footer();

