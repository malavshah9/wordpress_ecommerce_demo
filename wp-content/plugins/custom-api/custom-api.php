<?php
/**
 * Plugin Name: ProdocutsApi
 * Plugin URL: http://localhost/wordpress/
 * Description: Fun
 * Version: 1.0
 * Author: Malav Shah
 * Author URL: http://localhost/wordpress/
 */
function getProducts(){
    global $wpdb;
    $result = $wpdb->get_results ( "SELECT * FROM malav_products" );
    return $result;
    // return wp_json_encode($result);
}
function postProducts(WP_REST_Request $request){
    $request2 = (array)$request;
    foreach($request2 as $r){
        echo $r;
    }
}
add_action('rest_api_init',function(){
    register_rest_route('productsdemo/','itemss',
    array(array(
            'methods'=>'GET',
        'callback'=>'getProducts'
    ),
    array(
        'methods'=>'POST',
        'callback'=>'postProducts'
    )));
});