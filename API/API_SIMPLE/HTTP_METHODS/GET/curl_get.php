<?php

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "http://localhost/PHP/API/API_SIMPLE/API_GET_POST/POST/get_all.php?names=Matheus",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
]);

$response = curl_exec($curl);
curl_close($curl);

echo $response;