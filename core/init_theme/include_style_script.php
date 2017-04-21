<?php

function theme_scripts() {
    global $ConfigTheme;

	$listJs = [
		'jsBootstrap' => '/assets/global/js/bootstrap.min.js',
	];
	foreach ($listJs as $key => $item) {
		wp_enqueue_script(
			$key,
			get_template_directory_uri() . $item,
			array( 'jquery' ),
			$ConfigTheme['style']['version'],
			true
		);
	}

	$listCss = [
		'styleTheme' => get_template_directory_uri() . '/style.css',
		'styleBoostrap' => get_template_directory_uri() . '/assets/global/css/bootstrap.min.css',
		'fontawesome_style' => get_template_directory_uri() . '/assets/global/css/font-awesome.min.css',
		'googleFontQuicksand' => 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700',
		'styleMain' => get_template_directory_uri() . '/assets/desktop/css/style.css',
	];
	foreach ($listCss as $key => $item) {
		wp_enqueue_style(
			$key,
			$item,
			array(),
			$ConfigTheme['style']['version']
		);
	}
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );