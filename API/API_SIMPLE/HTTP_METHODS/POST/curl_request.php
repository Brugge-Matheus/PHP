<?php

$curl = curl_init();

$curlFields = ['number1' => '10', 'number2' => '5',];

curl_setopt_array($curl, array(
    CURLOPT_URL => "http://localhost/PHP/API/API_SIMPLE/API_GET_POST/POST/post.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $curlFields
));

$response = curl_exec($curl);
curl_close($curl);

$data = json_decode($response, true);


echo "<pre>";
print_r($data);
echo "</pre>";