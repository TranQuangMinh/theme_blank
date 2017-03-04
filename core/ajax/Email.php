<?php

add_action( 'wp_ajax_nopriv_sendemail', 'send_order' );
add_action( 'wp_ajax_sendemail', 'send_order' );
function send_order() {
	$post = $_POST;

	$name          = $post['name'];
	$email         = $post['email'];
	$emailReciever = $post['emailreceiver'];
	$phone         = $post['phone'];
	$subject       = $post['subject'];
	$content       = $post['content'];
	$redirect_url  = $post['redirect_url'];

	ob_start();
	include PATH_THEME . '/inc_template/template_email_sendorder.php';
	$html = ob_get_clean();

	function set_html_mail_content_type() {
		return 'text/html';
	}

	add_filter( 'wp_mail_content_type', 'set_html_mail_content_type' );

	$subject = ( $subject != '' ? $subject : 'Thông tin liên hệ từ website' );
	$result  = wp_mail( $emailReciever, $subject, $html );
	if ( $result ) {
		header( 'Location: ' . $redirect_url );
		die;
	} else {
		echo 'No';
	}


}

admin_url( 'admin-ajax.php' );
// http://localhost/dulich/wp-admin/admin-ajax.php?action=action_name


// Cross domain
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: GET, POST');
