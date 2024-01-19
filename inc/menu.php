<?php
/**
 * Menu
 *
 * @package luberon-sud
 */

/**
 * Add <a> aria
 *
 * Based on https://www.w3.org/TR/wai-aria-practices/examples/menubar/menubar-1/menubar-1.html
 */
$count_menu = 0;
function elabo_nav_menu_link_aria( $atts, $item, $args, $depth ) {
	global $count_menu;
	if ( is_array( $item->classes ) ) {
		$item_has_children = in_array( 'menu-item-has-children', $item->classes, true );
	}
	if ( isset( $item_has_children ) ) {
		$atts['aria-haspopup'] = 'true';
		$atts['aria-expanded'] = 'false';
	}
	$atts['role'] = 'menuitem';
	if ( $count_menu > 0 ) {
		$atts['tabindex'] = '-1';
	} else {
		$atts['tabindex'] = '0';
	}
	$count_menu ++;
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'elabo_nav_menu_link_aria', 10, 4 );

/**
 * Walker menu
 *
 * Based on https://www.w3.org/TR/wai-aria-practices/examples/menubar/menubar-1/menubar-1.html
 */
require_once 'class/class-elabo-walker-nav-menu.php';

/**
 * Register menu
 */
function elabo_register_menus() {
	$locations = array(
		'header'        => 'Menu entête',
		'footer'        => 'Menu pied de page',
		'footer_all' => 'Menu pied de page complet',
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'elabo_register_menus' );
