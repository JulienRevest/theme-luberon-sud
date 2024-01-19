<?php
/**
 * Gutenberg
 *
 * @package luberon-sud
 */

/**
 * H2 Titles custom rendering
 *
 * @param string $block_content Content of the Gutenberg block.
 * @param string $block Gutenberg block infos and parameters.
 */
function elabo_title_render( $block_content, $block ) {
	/**
	 * Display block if it isn't a title
	 */
	if ( 'core/heading' !== $block['blockName'] ) {
		return $block_content;
	}

	if ( isset( $block['attrs']['level'] ) && null != $block['attrs']['level'] ) {
		return $block_content;
	}

	if ( false === strpos( $block_content, 'id=' ) ) {
		preg_match( '/\n*<(?P<level>h[2-6])/si', $block_content, $matches );
		$heading_level = ! empty( $matches['level'] ) ? $matches['level'] : '';
		$inner_content = wp_strip_all_tags( $block_content );
		$heading       = str_replace( '<' . $heading_level, '<' . $heading_level . ' id="' . sanitize_title( $inner_content ) . '" ', $block_content );
		return $heading;
	}

	return $block_content;
}
add_filter( 'render_block', 'elabo_title_render', 10, 3 );

/**
 * Gutenberg scripts and styles
 *
 * @link https://www.billerickson.net/block-styles-in-gutenberg/
 */
function elabo_gutenberg_scripts() {

	wp_enqueue_script(
		'elabo-editor',
		get_stylesheet_directory_uri() . '/js/editor.js',
		array( 'wp-blocks', 'wp-dom' ),
		filemtime( get_stylesheet_directory() . '/js/editor.js' ),
		true
	);

}
add_action( 'enqueue_block_editor_assets', 'elabo_gutenberg_scripts' );
