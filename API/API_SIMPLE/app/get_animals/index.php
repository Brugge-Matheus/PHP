<?php

header("Content-Type: application/json; charset=UTF-8");

$data = require '../data/data.php';

if (!isset($_GET['max']) || $_GET['max'] < 1 || $_GET['max'] > count($data)) {
    $array['status'] = "error";
    $array['message'] = 'Max animals is not currently defined';
    $array['time_response'] = time();

    echo json_encode($array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    die();
}

$max = $_GET["max"];

$array['status'] = "success";
$array['response'] = array_slice($data, 0, $max);
$array['time_response'] = time();

echo json_encode($array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
