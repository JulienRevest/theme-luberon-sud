<?php
/**
 * The template for index layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage theme-luberon-sud
 * @since 1.0
 * @version 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

get_header(); ?>

	<div class="global-page">
		<?php elabo_breadcrumb(); ?>

		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<h1><?php the_title(); ?></h1>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<?php
		endwhile;
		?>

	</div>

<?php get_footer(); ?>
