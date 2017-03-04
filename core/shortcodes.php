<?php

function form_email($atts = [], $content = null, $tag = '')
{
	$wporg_atts = shortcode_atts([
		'emailreceiver' => 'thachphathieng@gmail.com',
		'url_redirect' => get_home_url()
	], $atts, $tag);

	ob_start();
	include PATH_THEME . '/inc_template/template_shortcode_form_email.php';
	return ob_get_clean();
}

add_shortcode('form_email', 'form_email');