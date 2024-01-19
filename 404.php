<?php
/**
 * The 404 page
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
		<div class="col-aside">
			<h1 class="title-404"><?php esc_html_e( 'Oups !', 'luberon-sud' ); ?></h1>
			<h2 class="description-404"><?php esc_html_e( 'La page que vous recherchez semble introuvable.', 'luberon-sud' ); ?></h2>
			<div class="error-code"><?php esc_html_e( "Code d'erreur : 404", 'luberon-sud' ); ?></div>
		</div>
		<div class="col-page">
			<div><?php esc_html_e( 'Voici quelques liens pour retrouver votre chemin :', 'luberon-sud' ); ?></div>
			<div>
				<ul>
			<?php
			foreach ( get_field( '404_links', 'option' ) as $a_post ) {
				$a_post_id = isset( $a_post['404_link']->ID ) ? $a_post['404_link']->ID : '';
				$a_post_title = isset( $a_post['404_link']->post_title ) ? $a_post['404_link']->post_title : '';
				echo sprintf(
					'<li><a href="%s">%s</a></li>',
					esc_html( get_permalink( $a_post_id ) ),
					esc_html( $a_post_title )
				);
			}
			?>
				</ul>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
