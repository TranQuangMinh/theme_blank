<?php

if (is_admin()) {
    require_once ('mpanel-ui.php');
    require_once ('mpanel-editor.php');
    require_once ('mpanel-functions.php');
}

function tie_get_option( $name ) {
    $get_options = get_option( 'tie_options' );
    if( !empty( $get_options[$name] ))
        return $get_options[$name];
    return false ;
}

$themename = "Codex4u";
define ('theme_name', $themename );