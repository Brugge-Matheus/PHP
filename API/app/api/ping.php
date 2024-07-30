<?php
require '../../config.php';

$array['result'] = ['pong' => true];
$array['response'] = ['200'];

echo json_encode($array);
exit();
