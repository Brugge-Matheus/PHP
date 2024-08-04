<?php

header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (!isset($_GET['value1']) and !isset($_GET['value2'])) {
        $array = array(
            'status' => 'error',
            'message' => 'Invalid parameters, must have at least one (value1, value2) ',
            'time_response' => time()
        );

        echo json_encode($array);
        die();

    }

    $array = array(
        'status' => 'success',
        'reponse' => [
            'value1' => $_GET['value1'] ?? '',
            'value2' => $_GET['value2'] ?? ''
        ],
        'time_response' => time()
    );

    echo json_encode($array);
    die();

}

$array = array(
    'status' => 'error',
    'message' => 'The invalid method must be GET',
    'time_response' => time()
);

echo json_encode($array);
die();





