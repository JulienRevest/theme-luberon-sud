<?php
/**
 * Gravityform
 *
 * @package luberon-sud
 */

/**
 * Load script in footer
 */
add_filter( 'gform_init_scripts_footer', '__return_true' );


/**
 * Add header & footer in GF email template
 *
 * @param string $template : The template for the html formatted message. Use {message} and {subject} as placeholders.
 */
function elabo_skin_gf_email( $template ) {
	$url_logo   = get_bloginfo( 'template_directory' ) . '/img/logo.png';
	$color      = '#999999';
	$color_text = '#333333';
	$template   = '
		<html>
			<head>
				<style>p {padding:0;margin:15px 0}</style>
				<title>{subject}</title>
			</head>
			<body style="background: #ffffff">
				<div style="width:640px;max-width:100%;margin:0 auto;">
					<div style="padding: 40px 30px; text-align: left; border-bottom: 10px ' . $color . ' solid; font-size: 20px; font-family: Arial, sans-serif; color: ' . $color . '"><table border="0"><tr><td><a href="' . get_bloginfo( 'url' ) . '"><img src="' . $url_logo . '" alt="' . get_bloginfo( 'name' ) . '" border="0"></a></td></tr></table></div>
					<div style="margin: 30px auto; max-width: 600px; background: #ffffff; padding: 0 20px;">
						<div style="font-size: 16px; font-family: Arial, sans-serif; padding: 0 0 30px 0; color: ' . $color_text . ';">
							{message}
						</div>
					</div>
					 <div style="text-align: center; padding: 20px;font-size: 14px; font-family: Arial, sans-serif; color: #ffffff; background: ' . $color . ';">' . get_bloginfo( 'name' ) . ' <a href="' . get_bloginfo( 'url' ) . '" style="color: #ffffff;">' . get_bloginfo( 'url' ) . '</a></div>
				</div>
			</body>
		</html>';
	return $template;
}
add_filter( 'gform_html_message_template_pre_send_email', 'elabo_skin_gf_email' );

/**
 * Avizi newsletter
 */
function elabo_avizi_signup( $entry, $form ) {
	$mail_list = get_option( 'avizi_mail', array() );
	$mail      = rgar( $entry, '1' );

	if ( ! $mail || isset( $mail_list[ $mail ] ) ) {
		return;
	}

	$request  = 'https://app.avizi.fr/api/services/v2/contact/new/contact';
	$username = '6107a6aa66dfb';
	$password = 'f5d75701e318cf5ecfa0a9511eb9b4c3cf92453d';

	$options = array(
		'firstname'  => rgar( $entry, '2.3' ),
		'lastname'   => rgar( $entry, '2.6' ),
		'mail'       => $mail,
		'campaigns'  => array( 4217 ),
		'optin_mail' => true,
	);

	$response = wp_remote_post(
		$request,
		array(
			'body'        => wp_json_encode( $options ),
			'headers'     => array(
				'Authorization' => 'Basic ' . base64_encode( $username . ':' . $password ),
				'Content-Type'  => 'application/json',
			),
			'data_format' => 'body',
		)
	);

	$api_response = json_decode( wp_remote_retrieve_body( $response ), true );
	if ( $api_response['success'] && 200 === $api_response['code'] ) {
		$mail_list[] = $mail;
		update_option( 'avizi_mail', $mail_list );
	}

	GFCommon::log_debug( 'gform_after_submission_2: response => ' . print_r( $response, true ) );
}
add_filter( 'gform_after_submission_2', 'elabo_avizi_signup', 10, 2 );

/**
 * Avizi contact
 */
function elabo_avizi_contact( $entry, $form ) {

	$mail = rgar( $entry, '2' );

	if ( ! $mail ) {
		return;
	}

	$request  = 'https://app.avizi.fr/api/services/v2/request/new/request';
	$username = '6107a6aa66dfb';
	$password = 'f5d75701e318cf5ecfa0a9511eb9b4c3cf92453d';

	$options = array(
		'contact'                => array(
			'firstname' => rgar( $entry, '1.3' ),
			'lastname'  => rgar( $entry, '1.6' ),
			'mail'      => $mail,
			'phone'     => (int) rgar( $entry, '3' ),
		),
		'private_note'           => rgar( $entry, '5' ), // Message.
		'thematics'              => array( 7 ),             // Demande spécifique.
		'profil_number'          => 42,                 // Blog/web.
		'request_country_number' => 75,        // France.
		'contact_number'         => 6,                 // Web.
		'response_number'        => 2,                // Mail.
		'website_origin'         => get_site_url(),    // Source du site.
	);

	$response = wp_remote_post(
		$request,
		array(
			'body'        => wp_json_encode( $options ),
			'headers'     => array(
				'Authorization' => 'Basic ' . base64_encode( $username . ':' . $password ),
				'Content-Type'  => 'application/json',
			),
			'data_format' => 'body',
		)
	);

	$api_response = json_decode( wp_remote_retrieve_body( $response ), true );

	GFCommon::log_debug( 'gform_after_submission_1: response => ' . print_r( $api_response, true ) );
}
add_filter( 'gform_after_submission_1', 'elabo_avizi_contact', 10, 2 );
