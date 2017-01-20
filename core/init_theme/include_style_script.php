<?php
if (is_admin()) {
    add_editor_style(get_template_directory_uri() . '/assets/desktop/css/style.css');
}
function theme_scripts() {
    global $ConfigTheme;

    wp_enqueue_script(
        'bootstrap_script', // Ten thu vien js duy nhat va ko dc trung
        get_template_directory_uri() . '/assets/global/js/bootstrap.min.js', // Link den file
        array( 'jquery' ), // Thu vien bat buoc phai co de thu vien  bootstrap chay dc
        $ConfigTheme['style']['version'], // Them version để quản lý cache
        true // True để chèn file này vào footer, tăng tốc độ load trang dựng nội dung
    );
    wp_enqueue_script(
        'app_script',
        get_template_directory_uri() . '/assets/desktop/js/app.js',
        array( 'jquery', 'bootstrap_script' ),
        $ConfigTheme['style']['version'],
        true
    );

    wp_enqueue_style(
        'bootstrap_style',
        get_template_directory_uri() . '/assets/global/css/bootstrap.min.css',
        array(),
        $ConfigTheme['style']['version']
    );

    wp_enqueue_style(
        'fontawesome_style',
        get_template_directory_uri() . '/assets/global/css/font-awesome.min.css',
        array(),
        $ConfigTheme['style']['version']
    );
    wp_enqueue_style(
        'theme_style',
        get_template_directory_uri() . '/assets/desktop/css/style.css',
        array(),
        $ConfigTheme['style']['version']
    );
    wp_enqueue_style(
        'theme_main_style',
        get_stylesheet_uri(),
        array(),
        $ConfigTheme['style']['version']
    );

	registerScriptThem::enableFancybox($ConfigTheme['style']['version']);
	registerScriptThem::enableOwl($ConfigTheme['style']['version']);

	if (is_page('9')) {
		registerScriptThem::enableDatepicker($ConfigTheme['style']['version']);
	}
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );


class registerScriptThem  {
	public static function enableFancybox($ver)
	{
		wp_enqueue_script(
			'fancybox_script',
			get_template_directory_uri() . '/assets/global/plugins/fancybox/jquery.fancybox.pack.js',
			array( 'jquery' ),
			$ver,
			true
		);

		wp_enqueue_style(
			'fancybox_style',
			get_template_directory_uri() . '/assets/global/plugins/fancybox/jquery.fancybox.css',
			array(),
			$ver
		);
	}

	public static function enableOwl($ver)
	{
		wp_enqueue_style(
			'owl_style',
			get_template_directory_uri() . '/assets/global/plugins/owl2/assets/owl.carousel.css',
			array(),
			$ver
		);
		wp_enqueue_style(
			'owl_theme_style',
			get_template_directory_uri() . '/assets/global/plugins/owl2/assets/owl.theme.default.min.css',
			array(),
			$ver
		);

		wp_enqueue_script(
			'owl_script',
			get_template_directory_uri() . '/assets/global/plugins/owl2/owl.carousel.min.js',
			array( 'jquery' ),
			$ver,
			true
		);
	}

	public static function enableDatepicker($ver)
	{
		wp_enqueue_style(
			'datepicker_style',
			get_template_directory_uri() . '/assets/global/plugins/datepicker/jquery.datetimepicker.min.css',
			array(),
			$ver
		);
		wp_enqueue_script(
			'datepicker_script',
			get_template_directory_uri() . '/assets/global/plugins/datepicker/jquery.datetimepicker.full.min.js',
			array( 'jquery' ),
			$ver,
			true
		);
	}
}