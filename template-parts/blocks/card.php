<?php
/**
 * Card template
 *
 * @package WordPress
 * @subpackage theme-luberon-sud
 * @since 1.0
 * @version 1.0
 */

?>

<?php
	$cards             = get_field( 'card_page' );
	$format_card       = get_field_object( 'card_format' );
	$format_card_value = $format_card['value'];
?>

<?php if ( $cards ) : ?>
	<?php foreach ( $cards as $card ) : ?>
		<article class="card-default format-<?php echo esc_attr( $format_card_value ); ?>">
			<figure>
				<?php if ( get_field( 'card_format' ) == 'portrait' ) { ?>
					<?php echo get_the_post_thumbnail( $card->ID, 'width-300' ); ?>
				<?php } ?>
				<?php if ( get_field( 'card_format' ) == 'landscape' ) { ?>
					<?php echo get_the_post_thumbnail( $card->ID, 'width-610' ); ?>
				<?php } ?>
			</figure>

			<div class="card-content">
				<div class="card-title">
					<?php
						$icon_card = get_field( 'card_icon' );
					if ( $icon_card ) :

						$icon_card_object = get_field_object( 'card_icon' );
						$icon_card_value  = $icon_card_object['value'];
						?>
						<span class="icon-<?php echo esc_attr( $icon_card_value ); ?>" aria-hidden="true"></span>
					<?php endif; ?>
					<h2><a href="<?php echo esc_url( get_permalink( $card->ID ) ); ?>" class="main-link"><?php echo esc_html( get_the_title( $card->ID ) ); ?></a></h2>	
				</div>

				<p><?php echo esc_html( get_the_excerpt( $card->ID ) ); ?></p>
			</div>
		</article>
	<?php endforeach; ?>
<?php endif; ?>
