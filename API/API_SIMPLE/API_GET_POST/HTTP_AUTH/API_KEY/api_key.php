<?php

header("Content-Type: application/json; charset=UTF-8");

$validKeys = [
    'key_1' => '92f20dafc5e5ac1c66820903c492cc04',
    'key_2' => '34ae07655b9a94e90556aff79bfd60b0',
    'key_3' => 'f940608acd624f8092bc86353052e734',
];

$headers = getallheaders();

if (!key_exists('api_key', $headers)) {
    $response = [
        'status' => 'error',
        'message' => 'Invalid access',
        'time_response' => time()
    ];
    echo json_encode($response, JSON_PRETTY_PRINT);
    die();
}

if (!in_array($headers['api_key'], $validKeys)) {
    $response = [
        'status' => 'error',
        'message' => 'Acccess denied, invalid token',
        'time_response' => time()
    ];
    echo json_encode($response, JSON_PRETTY_PRINT);
    die();
}

$client = array_search($headers['api_key'], $validKeys);
$response = [
    'status' => 'success',
    'message' => "Token Verifify, API KEY for client ($client)",
    'time_response' => time()
];
echo json_encode($response, JSON_PRETTY_PRINT);
die();
