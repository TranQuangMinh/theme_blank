<?php
function tags_support_all() {
	register_taxonomy_for_object_type('post_tag', 'page');
}

// ensure all tags are included in queries
//function tags_support_query($wp_query) {
//	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
//}

// tag hooks
add_action('init', 'tags_support_all');
//add_action('pre_get_posts', 'tags_support_query');


// Add custom Fonts to the Fonts list
if ( ! function_exists( 'wpex_mce_google_fonts_array' ) ) {
    function wpex_mce_google_fonts_array( $initArray ) {
        $initArray['font_formats'] = 'Montserrat=Montserrat;Cormorant=Cormorant';
            return $initArray;
    }
}
add_filter( 'tiny_mce_before_init', 'wpex_mce_google_fonts_array' );

if ( ! function_exists( 'wpex_mce_google_fonts_styles' ) ) {
    function wpex_mce_google_fonts_styles() {
       $font_url = 'https://fonts.googleapis.com/css?family=Cormorant:300,400,500,700|Montserrat:300,400,500,600,700';
           add_editor_style( str_replace( ',', '%2C', $font_url ) );
    }
}
add_action( 'init', 'wpex_mce_google_fonts_styles' );


// Enable font size & font family selects in the editor
if ( ! function_exists( 'wpex_mce_buttons' ) ) {
    function wpex_mce_buttons( $buttons ) {
        array_unshift( $buttons, 'fontselect' ); // Add Font Select
        array_unshift( $buttons, 'fontsizeselect' ); // Add Font Size Select
        return $buttons;
    }
}
add_filter( 'mce_buttons_2', 'wpex_mce_buttons' );
