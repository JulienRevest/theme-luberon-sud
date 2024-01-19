<?php
/**
 * Template Name: Actualités
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
						echo esc_html( $image_caption );
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

		<div class="cards">
			<?php
			$current_paged  = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
			$thumbnail_size = 'width-610';

			$args = array(
				'posts_per_page' => 11,
				'post_type'      => 'post',
				'order'          => 'DESC',
				'paged'          => $current_paged,
			);

			$postslist = new WP_Query( $args );
			while ( $postslist->have_posts() ) :
				$postslist->the_post();
				?>
				<?php if ( $current_paged <= 1 && get_the_ID() === $postslist->posts[0]->ID ) : ?>
				<article class="card-default format-landscape">
				<?php else : ?>
				<article class="card-default">
				<?php endif; ?>
					<figure>
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail( $thumbnail_size );
					} else {
						$settings      = WPDAE()->plugin_options->get_settings();
						$attachment_id = (int) $settings['images']['placeholder_id'];

						echo wp_get_attachment_image( $attachment_id, 'apidae_archive_thumbnail' );
					}
					?>
					</figure>
					<div class="card-content">
						<div class="card-title">
							<h2><a href="<?php echo esc_url( get_permalink() ); ?>" class="main-link"><?php echo esc_html( get_the_title() ); ?></a></h2>	
						</div>
						<?php the_excerpt(); ?>
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
					'total'     => $postslist->max_num_pages,
					'type'      => 'list',
					'next_text' => '>',
					'prev_text' => '<',
				)
			);
			wp_reset_postdata();
			?>
		</nav>
	</div>
	<?php endwhile; ?>

<?php get_footer(); ?>
