<?php
    function getProducts(){
    global $wpdb;
    $result = $wpdb->get_results ( "SELECT * FROM malav_products" );
    return wp_json_encode($result);
    }
