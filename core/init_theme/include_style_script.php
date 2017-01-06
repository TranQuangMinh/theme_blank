<?php

function theme_scripts() {
    global $ConfigTheme;

    wp_enqueue_script(
        'name_script', // Ten thu vien js duy nhat va ko dc trung
        get_template_directory_uri() . '/assets/global/js/bootstrap.min.js', // Link den file
        array( 'jquery' ), // Thu vien bat buoc phai co de thu vien  bootstrap chay dc
        $ConfigTheme['style']['version'], // Them version để quản lý cache
        true // True để chèn file này vào footer, tăng tốc độ load trang dựng nội dung
    );
    wp_enqueue_script(
        'fancybox_script',
        get_template_directory_uri() . '/assets/global/plugins/fancybox/jquery.fancybox.pack.js',
        array( 'jquery' ),
        $ConfigTheme['style']['version'],
        true
    );
    wp_enqueue_script(
        'owl_script',
        get_template_directory_uri() . '/assets/global/plugins/owl2/owl.carousel.min.js',
        array( 'jquery' ),
        $ConfigTheme['style']['version'],
        true
    );

    wp_enqueue_script(
        'app_script',
        get_template_directory_uri() . '/assets/desktop/js/app.js',
        array( 'jquery' ),
        $ConfigTheme['style']['version'],
        true
    );

    wp_enqueue_style(
        'name_style',
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
        'fontawesome_style',
        get_template_directory_uri() . '/assets/global/plugins/fancybox/jquery.fancybox.css',
        array(),
        $ConfigTheme['style']['version']
    );

    wp_enqueue_style(
        'owl_style',
        get_template_directory_uri() . '/assets/global/plugins/owl2/assets/owl.carousel.css',
        array(),
        $ConfigTheme['style']['version']
    );
    wp_enqueue_style(
        'owl_theme_style',
        get_template_directory_uri() . '/assets/global/plugins/owl2/assets/owl.theme.default.min.css',
        array(),
        $ConfigTheme['style']['version']
    );

        wp_enqueue_style(
        'theme_style',
        get_template_directory_uri() . '/assets/desktop/css/style.css',
        array(),
        $ConfigTheme['style']['version']
    );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
