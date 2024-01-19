<?php
/**
 * Template Name: Page stantdard
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
	<?php
	while ( have_posts() ) :
		the_post();
		?>

		<div class="global-page">
			<h1><?php the_title(); ?></h1>
			<?php elabo_breadcrumb(); ?>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</div>

	<?php endwhile; ?>
<?php get_footer(); ?>
