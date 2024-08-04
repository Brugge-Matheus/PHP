<?php

$username = 'myuser';
$password = 'mypasswd';

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "http://localhost/PHP/API/API_SIMPLE/API_GET_POST/HTTP_AUTH/BASIC_AUTH/basic.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 10,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_USERPWD => "$username:$password"
    // CURLOPT_HTTPHEADER => ["Authorization: {Basic user e passwd criptografados} "]
]);

$response = curl_exec($curl);
curl_close($curl);

echo "<pre>";
// print_r(json_decode($response, true));
var_dump($response);
echo "</pre>";
