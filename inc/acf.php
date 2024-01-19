<?php
/**
 * ACF
 *
 * @package luberon-sud
 */

/**
 * Set ACF site options
 */
function elabo_acf_option_init() {
	if ( function_exists( 'acf_add_options_page' ) ) {
		/* parent page */
		acf_add_options_page(
			array(
				'page_title' => 'Options',
				'menu_title' => 'Options du site',
				'menu_slug'  => 'options-du-site',
				'capability' => 'edit_posts',
				'position'   => 3,
				'icon_url'   => 'dashicons-welcome-widgets-menus',
			)
		);
		/* subpage */
		acf_add_options_sub_page(
			array(
				'page_title'  => 'Pied de page',
				'menu_title'  => 'Pied de page',
				'parent_slug' => 'options-du-site',
			)
		);
		/* subpage */
		acf_add_options_sub_page(
			array(
				'page_title'  => 'Réseaux sociaux',
				'menu_title'  => 'Réseaux sociaux',
				'parent_slug' => 'options-du-site',
			)
		);
		/* subpage */
		acf_add_options_sub_page(
			array(
				'page_title'  => 'Bandeaux publicitaires',
				'menu_title'  => 'Bandeaux publicitaires',
				'parent_slug' => 'options-du-site',
			)
		);
		/* subpage */
		acf_add_options_sub_page(
			array(
				'page_title'  => 'Page 404',
				'menu_title'  => 'Page 404',
				'parent_slug' => 'options-du-site',
			)
		);
	}
}
add_action( 'acf/init', 'elabo_acf_option_init' );


/**
 * ACF Card block
 */
function elabo_register_acf_block_types() {
	acf_register_block_type(
		array(
			'name'            => 'card',
			'title'           => __( 'Fiche' ),
			'description'     => __( 'Bloc fiche' ),
			'render_template' => 'template-parts/blocks/card.php',
			'category'        => 'formatting',
			'icon'            => 'dashicons dashicons-text-page',
			'keywords'        => array( 'card' ),
		)
	);
	acf_register_block_type(
		array(
			'name'            => 'page header',
			'title'           => __( 'Bloc en-tête' ),
			'description'     => __( "Bloc d'en-tête de la page d'accueil" ),
			'render_template' => 'template-parts/blocks/page-header.php',
			'category'        => 'formatting',
			'icon'            => 'dashicons dashicons-welcome-widgets-menus',
			'keywords'        => array( 'page', 'header' ),
		)
	);
	acf_register_block_type(
		array(
			'name'            => 'title with icon',
			'title'           => __( 'Titre avec icône' ),
			'description'     => __( 'Titre avec icône personnalisé' ),
			'render_template' => 'template-parts/blocks/custom-title.php',
			'category'        => 'formatting',
			'icon'            => 'dashicons dashicons-heading',
			'keywords'        => array( 'page', 'header' ),
		)
	);
}
add_action( 'acf/init', 'elabo_register_acf_block_types' );

