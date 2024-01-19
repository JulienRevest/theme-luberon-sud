<?php
/**
 * The template for results layout.
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
	<div class="global-page entry-content">
		<div class="page-aside">
			<div class="col-page">
				<div class="results-listing">
					<h1><?php esc_html_e( 'Résultats pour :', 'luberon-sud' ); ?> <?php echo get_search_query(); ?></h1>
					<div class="results">
						<?php
						if ( ! have_posts() ) {
							?>
							<p class="txt-no-results"><?php esc_html_e( 'Aucun résultats', 'luberon-sud' ); ?></p>
							<?php
						}
						while ( have_posts() ) :
							the_post();
							?>
							<article class="card-default format-portrait">
								<figure class="result-item-thumbnail">
									<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail( 'apidae_archive_thumbnail' );
									} else {
										$settings      = WPDAE()->plugin_options->get_settings();
										$attachment_id = (int) $settings['images']['placeholder_id'];

										echo wp_get_attachment_image( $attachment_id, 'apidae_archive_thumbnail' );
									}
									?>
								</figure>
								<div class="card-content">
									<div class="card-title">
										<h2>
											<a class="main-link" href="<?php the_permalink(); ?>">
												<?php
												$the_title = wp_strip_all_tags( get_the_title() );
												$the_title = substr( $the_title, 0, 40 );
												$the_title = strlen( $the_title ) > 40 ? substr( $the_title, 0, strrpos( $the_title, ' ' ) ) : $the_title;
												$result    = strlen( $the_title ) < 30 ? $the_title : ( $the_title . ' ...' );
												echo esc_html( $result );
												?>
											</a>
										</h2>
									</div>
									<p>
									<?php
										$excerpt = wp_strip_all_tags( get_the_excerpt() );
									if ( strpos( $excerpt, '[' ) ) {
										echo $excerpt;
									} else {
										$excerpt = substr( $excerpt, 0, 100 );
										$excerpt = strlen( $excerpt ) > 100 ? substr( $excerpt, 0, strrpos( $excerpt, ' ' ) ) : $excerpt;
										$result  = strlen( $excerpt ) < 75 ? $excerpt : ( $excerpt . ' [...]' );
										echo esc_html( $result );
									}
									?>
									</p>
								</div>
							</article>
							<?php
						endwhile;
						?>
					</div>
					
					<nav class="pagination">
						<?php
						$big = 999999999; /* need an unlikely integer */
						echo paginate_links(
							array(
								'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format'    => '?paged=%#%',
								'current'   => max( 1, get_query_var( 'paged' ) ),
								'type'      => 'list',
								'next_text' => '>',
								'prev_text' => '<',
							)
						);
						wp_reset_postdata();
						?>
					</nav>

				</div>
			</div>
			<div class="col-aside">
				<div class="col-aside-content">
				<?php
					dynamic_sidebar( 'newsletter' );
					dynamic_sidebar( 'reservation' );
				?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
