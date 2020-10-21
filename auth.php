<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Meli\Api\OAuth20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grant_type = 'authorization_code';
$client_id = '4363478170680107'; // Your client_id
$client_secret = 'pH84I1Ko0p7pddgglsH4XzRlXYUXl6ty'; // Your client_secret
$redirect_uri = 'https://ppvcteamml.com/'; // Your redirect_uri
$code = 'TG-5f8f9c20967c430006a6919d-659993463'; // The parameter CODE
//$refresh_token = 'refresh_token_example'; // Your refresh_token

try {
    $result = $apiInstance->getToken($grant_type, $client_id, $client_secret, $redirect_uri, $code, '');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuth20Api->getToken: ', $e->getMessage(), PHP_EOL;
}
?>