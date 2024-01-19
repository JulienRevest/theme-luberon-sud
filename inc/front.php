<?php
/**
 * Front
 *
 * @package luberon-sud
 */

/**
 * HTML5 theme support
 */
add_theme_support(
	'html5',
	array(
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption',
	)
);


/**
 * Embed responsive
 */
add_theme_support( 'responsive-embeds' );


/**
 * Remove WordPress version
 */
function elabo_remove_version() {
	return '';
}
add_filter( 'the_generator', 'elabo_remove_version' );

/**
 * Filter the except length to n words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function elabo_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'elabo_custom_excerpt_length', 999 );

/**
 * Add class for apidae single post
 *
 * @param array $classes
 * @return array
 */
function elabo_body_class( $classes ) {
	$classes_list = array_flip( $classes );
	if ( isset( $classes_list['search'] ) || isset( $classes_list['search-results'] ) ) {
		return $classes;
	}
	global $post;
	$apidae_post_types = array_flip( WPDAE_Post_Types::get_registered_post_type() );
	if ( isset( $post->post_type ) && isset( $apidae_post_types[ $post->post_type ] ) ) {
		$classes = array_merge( $classes, array( 'apidae-single' ) );
	}
	return $classes;
}
add_filter( 'body_class', 'elabo_body_class' );
