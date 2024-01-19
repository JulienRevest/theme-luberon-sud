<?php
/**
 * Content wrappers
 *
 * This template can be overridden by copying it to yourtheme/wp-apidae/global/wrapper-start.php.
 *
 * IMPORTANT: on occasion WP-Apidae will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. Be safe and maintain your templates up to date.
 *
 * @package WP-Apidae
 * @version 4.0.0
 * @todo Peut-être ne pas utiliser la variable globale de cette façon. Cette partie ne peux pas être utilisée pour rendre le block archive apidae.
 * Il devra être utilisé plus tard pour générer une vrai page archive CPT Apidae.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

echo '<div class="global-page dae-main dae-single">';
echo '<div class="entry-content">';
