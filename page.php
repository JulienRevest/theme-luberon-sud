<?php
/**
 * The template for pages.
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
	$post_parent_id = wp_get_post_parent_id( $post );
	?>

		<div class="page-header">
			<?php
				echo get_the_post_thumbnail( $post, 'full' );
			?>
			<div class="global-page">
				<h1><?php the_title(); ?><?php echo 47 === $post_parent_id ? '<em>' . esc_html__( 'Village du Sud Luberon', 'luberon-sud' ) . '</em>' : ''; ?></h1>
				<?php elabo_breadcrumb(); ?>

				<div class="round-button" aria-hidden="true">
					<span class="arrow-bottom"></span>
				</div>

				<?php
					$image_caption = get_the_post_thumbnail_caption();
				if ( ! empty( $image_caption ) ) {
					?>
						<div class="block-copyright" aria-hidden="true">
							<?php
							echo $image_caption;
							?>
							<span class="screen-reader-text"><?php esc_html_e( 'Voir le copyright photo', 'luberon-sud' ); ?></span>
							<span class="icon-camera" aria-hidden="true"></span>
						</div>
					<?php
				}
				?>
			</div>
		</div>

		<div class="global-page">
			<div class="entry-content">
			<?php the_content(); ?>
			</div>
		</div>

	<?php endwhile; ?>
<?php get_footer(); ?>
