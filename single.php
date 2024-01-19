<?php
/**
 * The template for single page.
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
				<?php
				$related = new WP_Query(
					array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'category__in'   => wp_get_post_categories( $post->ID ),
						'posts_per_page' => 4,
						'post__not_in'   => array( $post->ID ),
						'orderby' => 'rand',
					)
				);

				$block = '';

				if ( $related->have_posts() ) :
					?>
					<div class="wp-block-group alignfull block-info-green has-color-white-color has-color-green-background-color has-text-color has-background">
						<div class="wp-block-group__inner-container">
							<h2 id="vous-aimez-cet-article">
								<span class="has-inline-color has-color-white-color"><?php esc_html_e( 'Vous aimez cet article ?', 'luberon-sud' ); ?></span>
							</h2>
							<p class="is-style-resize-text"><?php esc_html_e( 'Découvrez des articles similaires.', 'luberon-sud' ); ?></p>
							<div class="list-articles-cards">
							<?php
							while ( $related->have_posts() ) {
								$related->the_post();
								$permalink     = get_the_permalink( $related->ID );
								$excerpt       = get_the_excerpt( $related->ID );
								$article_title = get_the_title( $related->ID );

								$thumbnail_id = get_post_thumbnail_id( $related->ID );
								$size         = 'width-610';

								if ( has_post_thumbnail( $related->ID ) ) {
									$thumbnail = wp_get_attachment_image( $thumbnail_id, $size );
								} else {
									$settings      = WPDAE()->plugin_options->get_settings();
									$attachment_id = (int) $settings['images']['placeholder_id'];

									$thumbnail = wp_get_attachment_image( $attachment_id, 'apidae_archive_thumbnail' );
								}

								$alt     = isset( get_post_meta( $related->ID, '_wp_attachment_image_alt' )[0] ) ? get_post_meta( $related->ID, '_wp_attachment_image_alt' )[0] : $article_title;
								$caption = wp_get_attachment_caption( $thumbnail_id );

								$block .= sprintf(
									'<article class="card-default">
										<figure>
											%1$s
										</figure>
										<div class="card-content">
											<div class="card-title">
												<h2><a href="%4$s" class="main-link">%2$s</a></h2>
											</div>
											<p>%3$s</p>
										</div>
									</article>',
									$thumbnail,
									esc_html( $article_title ),
									wp_kses_post( $excerpt ),
									esc_url( $permalink )
								);
							}
							wp_reset_postdata();
							echo $block;
							?>
							</div>
							<div class="wp-block-buttons is-content-justification-center">
								<div class="wp-block-button is-style-button-white">
									<a class="wp-block-button__link" href="<?php the_permalink( '33645' ); ?>"><?php esc_html_e( 'Voir tous les articles', 'luberon-sud' ); ?></a>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>

	<?php endwhile; ?>
<?php get_footer(); ?>
