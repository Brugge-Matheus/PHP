<?php

header("Content-Type: application/json; charset=UTF-8");

$credentials = [
    'myuser' => 'mypasswd'
];

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    $response = [
        'status' => 'error',
        'message' => 'Invalid Access',
        'time_response' => time()
    ];
    echo json_encode($response, JSON_PRETTY_PRINT);
    die();
}

$user = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];

if (!array_key_exists($user, $credentials) or $credentials[$user] != $password) {
    $response = [
        'status' => 'error',
        'message' => 'Invalid credentials',
        'time_response' => time()
    ];
    echo json_encode($response, JSON_PRETTY_PRINT);
    die();
}

$response = [
    'status' => 'success',
    'Message' => 'Acesss for a endpoint using basic HTTP auth',
    'time_response' => time()
];
echo json_encode($response, JSON_PRETTY_PRINT);
