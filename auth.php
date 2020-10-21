<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Meli\Api\OAuth20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grant_type = 'authorization_code';
$client_id = 'client_id_example'; // Your client_id
$client_secret = 'client_secret_example'; // Your client_secret
$redirect_uri = 'redirect_uri_example'; // Your redirect_uri
$code = 'code_example'; // The parameter CODE
$refresh_token = 'refresh_token_example'; // Your refresh_token

try {
    $result = $apiInstance->getToken($grant_type, $client_id, $client_secret, $redirect_uri, $code, $refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuth20Api->getToken: ', $e->getMessage(), PHP_EOL;
}
?>