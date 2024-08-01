<?php

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "http://localhost/PHP/API/API_SIMPLE/API_GET_POST/DELETE/#",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 10,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'DELETE',
    CURLOPT_POSTFIELDS => '{"id": "22"}',
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json'
    ]
]);

$response = curl_exec($curl);
curl_close($curl);

echo "<pre>";
print_r(json_decode($response, true));
echo "</pre>";
