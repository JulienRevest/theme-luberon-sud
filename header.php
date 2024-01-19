<?php
/**
 * Header template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package theme-luberon-sud
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="direct-menu"> 
			<a href="#nav"><?php esc_html_e( 'Aller au menu', 'luberon-sud' ); ?></a> 
			<a href="#main"><?php esc_html_e( 'Aller au contenu', 'luberon-sud' ); ?></a> 
			<a href="#search"><?php esc_html_e( 'Aller à la recherche', 'luberon-sud' ); ?></a>
		</div>
		<header id="header" role="banner">
			<div class="global-header">
				<button class="menu-burger" tabindex="0"><span class="screen-reader-text"><?php esc_html_e( 'Ouvrir le menu', 'elabo' ); ?></span></button>
				<div class="navigation-open">
					<div class="global-page">
						<div class="menu-header-container">
							<button class="submenu-back"><span class="icon-arrow-left-2" aria-hidden="true"></span><?php esc_html_e( 'Retour', 'luberon-sud' ); ?></button>
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'header',
										'items_wrap'     => '<ul id="menu-header-main" class="%1$s" role="menubar" aria-orientation="vertical">%3$s',
										'luberon-sud'    => 'primary',
										'walker'         => new Elabo_Walker_Nav_Menu(),
										'container'      => false,
									)
								);
								echo '</ul>';
								?>
						</div>

						<form role="search" action="/" method="get" class="menu-header-search">
							<input type="text" name="s" placeholder="<?php esc_html_e( 'Rechercher', 'luberon-sud' ); ?>" value="<?php the_search_query(); ?>">
							<button type="submit">
								<span class="screen-reader-text"><?php esc_html_e( 'Effectuer une recherche', 'luberon-sud' ); ?></span>
								<span class="icon-search" aria-hidden="true"></span>
							</button>
						</form>
						<div class="menu-header-socials">
							<?php
								$facebook  = get_field( 'facebook', 'option' );
								$twitter   = get_field( 'twitter', 'option' );
								$instagram = get_field( 'instagram', 'option' );
							?>
							<a href="<?php echo esc_url( $facebook ); ?>" target="_blank">
								<span class="screen-reader-text"><?php esc_html_e( 'Accéder à la page Facebook', 'luberon-sud' ); ?></span>
								<span class="icon-facebook" aria-hidden="true"></span>
							</a>
							<a href="<?php echo esc_url( $instagram ); ?>" target="_blank">
								<span class="screen-reader-text"><?php esc_html_e( 'Accéder à la page Instagram', 'luberon-sud' ); ?></span>
								<span class="icon-instagram" aria-hidden="true"></span>
							</a>
							<a href="<?php echo esc_url( $twitter ); ?>" target="_blank">
								<span class="screen-reader-text"><?php esc_html_e( 'Accéder à la page Twitter', 'luberon-sud' ); ?></span>
								<span class="icon-twitter" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo" id="header-logo">
					<svg class="header-logo-img">
						<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/luberon/logo.svg#logo"/>
					</svg>
				</a>
				<div class="header-options">
					<form role="search" action="/" method="get" id="searchform">
						<input type="text" name="s" id="search" placeholder="<?php esc_html_e( 'Rechercher', 'luberon-sud' ); ?>" value="<?php the_search_query(); ?>">
						<button type="submit">
							<span class="screen-reader-text"><?php esc_html_e( 'Effectuer une recherche', 'luberon-sud' ); ?></span>
							<span class="icon-search" aria-hidden="true"></span>
						</button>
					</form>
					<button class="search-modal-button">
						<span class="screen-reader-text"><?php esc_html_e( 'Effectuer une recherche', 'luberon-sud' ); ?></span>
						<span class="icon-search" aria-hidden="true"></span>
					</button>
					<div class="search-mobile-modal">
						<button class="search-modal-close">
							<span class="screen-reader-text"><?php esc_html_e( 'Fermer', 'luberon-sud' ); ?></span>
							<span class="icon-close" aria-hidden="true"></span>
						</button>
					</div>
					<div class="header-shop-button">
						<a href="https://boutique.luberon-sud-tourisme.fr/" target="_blank">
							<span class="icon-tickets" aria-hidden="true"></span>
							<span class="label-shop"><?php esc_html_e( 'Billetterie en ligne', 'luberon-sud' ); ?></span>
						</a>
					</div>
				</div>
			</div>
		</header>
		<main id="main" role="main">
