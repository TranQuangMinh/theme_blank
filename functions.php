<?php

define('PATH_THEME', get_template_directory());
define('URL_THEME', get_template_directory_uri());

if ( ! function_exists( 'theme_setup' ) ) :
	function theme_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
		) );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu',      'Lilya' ),
			'social'  => __( 'Social Links Menu', 'Lilya' ),
			'footer_left'  => __( 'Footer trái', 'Lilya' ),
			'footer_right'  => __( 'Footer phải', 'Lilya' ),
		) );
	}
endif; // theme_setup
add_action( 'after_setup_theme', 'theme_setup' );

function twentyfifteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'twentyfifteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'Lilya' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyfifteen_widgets_init' );


require_once get_template_directory() . '/core/autoload.php';
require_once get_template_directory() . '/hook/template.php';
