<?php

function theme_scripts() {
    global $ConfigTheme;

	$listJs = [
		'jsBootstrap' => '/assets/global/js/bootstrap.min.js',
		'jsNivo' => '/assets/desktop/plugins/nivo/jquery.nivo.slider.pack.js',
		'jsOwl' => '/assets/desktop/plugins/dist/owl.carousel.min.js',
		'jsMasonry' => '/assets/desktop/plugins/masonry.js',
		'jsSticky' => '/assets/desktop/plugins/jquery.sticky-kit.min.js',
		'jsApp' => '/assets/desktop/js/app.js',
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
		'googleFontQuicksand' => 'https://fonts.googleapis.com/css?family=Cormorant:300,400,500,700|Montserrat:300,400,500,600,700',
		'styleNivo' => get_template_directory_uri() . '/assets/desktop/plugins/nivo/nivo-slider.css',
		'styleOwl' => get_template_directory_uri() . '/assets/desktop/plugins/dist/assets/owl.carousel.min.css',
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