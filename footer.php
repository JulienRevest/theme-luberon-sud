<?php
/**
 * Footer template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package theme-luberon-sud
 */

?>
		</main>

		<div class="footer-top-arrow noprint">
			<div class="return-top" aria-hidden="true">
				<span class="arrow-bottom"></span>
			</div>
		</div>
		
		<footer id="footer" role="contentinfo">
			<div class="global-footer">
				<div class="footer-informations">
					<div class="footer-sociaux">
						<section class="footer-sociaux-contact">
							<header><?php esc_html_e( '#luberonsudtourisme', 'luberon-sud' ); ?></header>
							<p><?php the_field( 'social-textblock', 'option' ); ?></p>
							<div class="footer-sociaux-buttons">
								<?php
								$facebook  = get_field( 'facebook', 'option' );
								$twitter   = get_field( 'twitter', 'option' );
								$instagram = get_field( 'instagram', 'option' );
								?>
								<a href="<?php echo esc_url( $facebook ); ?>" target="_blank"><span class="screen-reader-text"><?php esc_html_e( 'Accéder à la page Facebook', 'luberon-sud' ); ?></span><span class="icon-facebook menu-social-button" aria-hidden="true"></span></a>
								<a href="<?php echo esc_url( $instagram ); ?>" target="_blank"><span class="screen-reader-text"><?php esc_html_e( 'Accéder à la page Instagram', 'luberon-sud' ); ?></span><span class="icon-instagram menu-social-button" aria-hidden="true"></span></a>
								<a href="<?php echo esc_url( $twitter ); ?>" target="_blank"><span class="screen-reader-text"><?php esc_html_e( 'Accéder à la page Twitter', 'luberon-sud' ); ?></span><span class="icon-twitter menu-social-button" aria-hidden="true"></span></a>
							</div>
						</section>
						<div class="footer-sociaux-instagram">
							<?php echo do_shortcode( '[estgrm_feed limit=8 size=150]' ); ?>
						</div>
					</div>
					<div class="footer-info-contact">
						<section class="footer-info-rencontre">
							<header><?php esc_html_e( 'Luberon Sud Tourisme', 'luberon-sud' ); ?></header>
							<p><?php echo nl2br( esc_html( get_field( 'contact-address', 'option' ) ) ); ?>
							<br>
							<?php
							esc_html_e( 'Tel: ', 'luberon-sud' );
							echo nl2br( esc_html( get_field( 'contact-phone', 'option' ) ) );
							?>
							</p>
							<a href="<?php echo esc_html( get_field( 'button_link_LST', 'option' ) ); ?>" class="action-button default"><?php echo esc_html( get_field( 'button_text_LST', 'option' ), 'luberon-sud' ); ?></a>
						</section>
						<section class="footer-info-newsletter">
							<header><?php esc_html_e( 'Newsletter ', 'luberon-sud' ); ?></header>
							<p><?php echo nl2br( esc_html( get_field( 'newsletter-text', 'option' ) ) ); ?></p>
							<a href="<?php echo esc_html( get_field( 'button_link_newsletter', 'option' ) ); ?>" class="action-button default"><?php echo esc_html( get_field( 'button_text_newsletter', 'option' ), 'luberon-sud' ); ?></a>
						</section>
						<div class="footer-info-carte">
							<img src="<?php echo esc_html( get_template_directory_uri() ); ?>/img/luberon/footer/carte-luberon-paca.png" width="386" height="301" alt="<?php esc_html_e( 'Carte de la situation du Luberon en PACA', 'luberon-sud' ); ?>" loading="lazy"></img>
						</div>
					</div>
				</div>
			</div>

			<nav role="navigation">
				<?php
				if ( is_front_page() ) {
					wp_nav_menu(
						array(
							'theme_location' => 'footer_all',
							'luberon-sud'    => 'secondary',
							'walker'         => new Elabo_Walker_Nav_Menu(),
						)
					);
				} else {
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'luberon-sud'    => 'secondary',
							'walker'         => new Elabo_Walker_Nav_Menu(),
						)
					);
				}
				?>
			</nav>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>
