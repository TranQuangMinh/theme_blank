<?php

add_action('wp_ajax_nopriv_send_email','send_email');
add_action('wp_ajax_send_email','send_email');
function send_email(){
	$post = $_POST;
	global $phpmailer;

	function set_html_mail_content_type() {
	    return 'text/html';
	}
	add_filter( 'wp_mail_content_type', 'set_html_mail_content_type' );


	$to = tie_get_option('contact_email_receive');
	$subject = 'Khách hàng liên hệ ' . date("Y-m-d");
	
	ob_start();
	include 'theme_email.php';
	$message = ob_get_clean();
	
	$result = wp_mail($to, $subject, $message);

	wp_redirect( get_permalink(tie_get_option('page_thank')) );
	exit;
}
// admin_url( 'admin-ajax.php' );
// http://localhost/dulich/wp-admin/admin-ajax.php?action=action_name


// Cross domain
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: GET, POST');
