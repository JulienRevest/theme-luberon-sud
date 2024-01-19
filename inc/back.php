<?php
/**
 * Back
 *
 * @package luberon-sud
 */

/**
 * CSS editor
 */
add_theme_support( 'editor-styles' );
add_editor_style( 'css/admin-editor.min.css' );


/**
 * Delete Gutenberg Styles BO
 */
add_theme_support( 'editor-font-sizes', array() );
add_theme_support( 'editor-gradient-presets', array() );
add_theme_support( 'disable-custom-font-sizes' );
add_theme_support( 'disable-custom-colors' );
add_theme_support( 'disable-custom-gradients' );


/**
 * CSS admin
 */
function elabo_admin_style() {
	wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/css/icomoon.min.css' );
}
add_action( 'admin_enqueue_scripts', 'elabo_admin_style' );


/**
 * Block full width
 */
function elabo_block_full_width() {
	add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'elabo_block_full_width' );


/**
 * Custom login
 *
 * @linked https://codex.wordpress.org/Customizing_the_Login_Form
 */
function elabo_custom_login() {
	?>
	<style type="text/css">
		html, body.login {
			height: auto;
		}
		body.login {
			background: url( <?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/paysage-luberon-paca.jpg ); /* bg color or image */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
		#login h1 a, .login h1 a {
			background-image: url( <?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/logo-luberon-sud-tourisme.png ); /* logo img */
			height: 180px; /* logo height */
			width: 300px; /* logo width */
			background-color: #3E3E92;
			background-repeat: no-repeat;
			background-position: 50% 50%;
			background-size: contain;
			width: 100%;
		}
		.login #backtoblog,
		.login #nav{
			text-align: center;
		}
		.language-switcher {
			width: 320px;
		}
		.login #login {
			box-shadow: 0 0 15px rgba(0,0,0,.8);
			border-radius: 10px;
			padding: 15px;
			margin: 2% auto 0;
			background: #fff;
		}
		.login.wp-core-ui .button.button-large,
		.login input[type="submit"] {
			background: #FFF;
			border: 4px solid #3E3E92;
			color: #3E3E92;
			font-size: 18px;
			font-weight: bold;
			height: auto;
			margin-top: 15px;
			padding: 5px;
			transition: all 0.3s ease;
			text-transform: uppercase;
			width: 100%;
		}
		.login.wp-core-ui .button.button-large:hover,
		.login input[type="submit"]:hover {
			background: #3E3E92;
			color: #FFF;
		}
		body.login form {
			box-shadow: 0 0 0;
		}
	</style>
	<?php
}
add_action( 'login_enqueue_scripts', 'elabo_custom_login' );

/**
 * Modifier l'URL du logo de connexion sur la page d'administration
 */

function elabo_custom_login_url( $url ) {
	// On définit la nouvelle URL du lien ici
	return get_site_url();
}
add_filter( 'login_headerurl', 'elabo_custom_login_url' );


/**
 * Admin menu, hidde tags
 */
function elabo_unregister_tags_for_posts() {
	unregister_taxonomy_for_object_type( 'post_tag', 'post' );
}
add_action( 'init', 'elabo_unregister_tags_for_posts' );


/**
 * Admin menu, hidde comments
 * $restricted = array( __( 'Links' ), __( 'Comments' ), __( 'Media' ), __( 'Plugins' ), __( 'Tools' ), __( 'Users' ) );
 */
function elabo_remove_menu_items() {
	global $menu;
	$restricted = array( __( 'Comments' ) );
	end( $menu );
	while ( prev( $menu ) ) {
		$value = explode( ' ', $menu[ key( $menu ) ][0] );
		if ( in_array( null !== $value[0] ? $value[0] : '', $restricted, true ) ) {
			unset( $menu[ key( $menu ) ] );
		}
	}
}
add_action( 'admin_menu', 'elabo_remove_menu_items' );


/**
 * Block palette colors
 *
 * Set the colors in : scss/abstracts/_variables.scss
 */
function elabo_theme_block_colors() {
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => 'Noir',
				'slug'  => 'color-black',
				'color' => '#000',
			),
			array(
				'name'  => 'Blanc',
				'slug'  => 'color-white',
				'color' => '#fff',
			),
			array(
				'name'  => 'Fond gris',
				'slug'  => 'color-bg',
				'color' => '#e5e5e5',
			),
			array(
				'name'  => 'Violet',
				'slug'  => 'color-purple',
				'color' => '#3E3E92',
			),
			array(
				'name'  => 'Rouge',
				'slug'  => 'color-red',
				'color' => '#ED6955',
			),
			array(
				'name'  => 'Gris foncé',
				'slug'  => 'color-grey-dark',
				'color' => '#3D3935',
			),
			array(
				'name'  => 'Orange',
				'slug'  => 'color-orange',
				'color' => '#F7A418',
			),
			array(
				'name'  => 'Marron',
				'slug'  => 'color-brown',
				'color' => '#866015',
			),
			array(
				'name'  => 'Vert',
				'slug'  => 'color-green',
				'color' => '#118471',
			),
		)
	);
}
add_action( 'after_setup_theme', 'elabo_theme_block_colors' );



/**
 *  Page excerpt
 */
add_post_type_support( 'page', 'excerpt' );


/**
 * Widget
 */
function elabo_widgets_init() {
	register_sidebar(
		array(
			'name'           => __( 'Newsletter', 'elabo' ),
			'id'             => 'newsletter',
			'description'    => __( 'Ajouter du contenu à votre Newsletter', 'elabo' ),
			'before_widget'  => '',
			'after_widget'   => '',
			'before_title'   => '<div class="widget-title h5"><span class="icon-mail" aria-hidden="true"></span>',
			'after_title'    => '</div>',
			'before_sidebar' => '<div class="newsletter-info-content">',
			'after_sidebar'  => '</div>',
		)
	);

	register_sidebar(
		array(
			'name'           => __( 'Réservez en ligne', 'elabo' ),
			'id'             => 'reservation',
			'description'    => __( 'Ajouter du contenu à votre bloc de réservation', 'elabo' ),
			'before_widget'  => '',
			'after_widget'   => '',
			'before_title'   => '<div class="widget-title h5"><span class="icon-tickets" aria-hidden="true"></span>',
			'after_title'    => '</div>',
			'before_sidebar' => '<div class="reservation-info-content">',
			'after_sidebar'  => '</div>',
		)
	);
}
add_action( 'widgets_init', 'elabo_widgets_init' );
