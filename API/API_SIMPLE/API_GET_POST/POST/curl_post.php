<?php

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "http://localhost/PHP/API/API_SIMPLE/API_GET_POST/POST/get_all.php?names=Matheus",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => ['new_client' => 'Jon'],
    CURLOPT_HTTPHEADER => [
        'Content-Type: applicaton/json'
    ]
]);

$data = curl_exec($curl);
curl_close($curl);

echo "<pre>";
print_r($data);
echo "</pre>";


// $curl = curl_init();

// $curlFields = ['number1' => '10', 'number2' => '5',];

// curl_setopt_array($curl, array(
//     CURLOPT_URL => "http://localhost/PHP/API/API_SIMPLE/API_GET_POST/POST/post.php",
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_CUSTOMREQUEST => "POST",
//     CURLOPT_POSTFIELDS => $curlFields
// ));

// $response = curl_exec($curl);
// curl_close($curl);

// $data = json_decode($response, true);