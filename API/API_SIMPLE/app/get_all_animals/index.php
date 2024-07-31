<?php
header("Content_Type: application/json; charset=utf-8");

$array['status'] = 'success';
$array['animals'] = require '../data/data.php';


echo json_encode($array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
