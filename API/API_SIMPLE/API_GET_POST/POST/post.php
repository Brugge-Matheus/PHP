<?php

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!isset($_POST['number1'], $_POST['number2'])) {
        $response = [
            'status' => 'error',
            'message' => 'Parameters invalid, need number1 and number2'
        ];

        echo json_encode($response, JSON_PRETTY_PRINT);
        die();
    }

    $response = [
        'status' => 'success',
        'multiplication' => $_POST['number1'] * $_POST['number2'],
        'divisor' => $_POST['number1'] / $_POST['number2']
    ];

    echo json_encode($response, JSON_PRETTY_PRINT);
    die();
}

$response = [
    'status' => 'error',
    'message' => 'Request method not allowed, need POST'
];

echo json_encode($response, JSON_PRETTY_PRINT);
