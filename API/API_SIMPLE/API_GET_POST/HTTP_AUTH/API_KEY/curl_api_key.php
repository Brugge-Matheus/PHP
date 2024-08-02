<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "http://localhost/PHP/API/API_SIMPLE/API_GET_POST/HTTP_AUTH/API_KEY/api_key.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => ['api_key: 92f20dafc5e5ac1c66820903c492cc04'],
));

$response = curl_exec($curl);

echo "<pre>";
print_r(json_decode($response, true));
echo "</pre>";
