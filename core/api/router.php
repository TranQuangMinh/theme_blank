<?php
/*

class RouterTheme
{
    public function initRouter()
    {
        register_rest_route( prefix_api, url_api, array(
            array(
                'methods'  => WP_REST_Server::EDITABLE,
                'callback' => array( 'firstController', 'indexAction' )
            ),
        ) );
    }
}

add_action('rest_api_init', function(){
    $routerTheme = new RouterTheme();
    $routerTheme->initRouter();
});

Default is JSON
header('Content-Type: text/html; charset=utf-8');
header('Content-Type: text/xml; charset=utf-8');

home_url('wp-json');
http://localhost/dulich/wp-json/prefix_api/url_api

*/

