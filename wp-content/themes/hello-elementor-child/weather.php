<?php
/*
Template Name: Custom Template
*/
get_header(); 

$location = "Ahmedabad";
$current_date = date('Y-m-d');
$API_KEY = "4VT43X4NY5EELSZVJ2UJ69KCP";

$response = wp_remote_get( 'https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/"'.$location.'"/"'.$current_date.'"/?unitGroup=metric&key="'.$API_KEY.'"&contentType=json' );

if ( is_wp_error( $response ) ) {
    $error_message = $response->get_error_message();
    echo "Something went wrong: $error_message";
} else {
    $body = wp_remote_retrieve_body( $response );
    $data = json_decode($body, true);
    echo $localtion = isset($data['resolvedAddress']) ? $data['resolvedAddress'] : '';
    $temperature = isset($data['currentConditions']['temp']) ? $data['currentConditions']['temp'] : '';  
}

get_footer();
?>
