<?php

require '../vendor/autoload.php';

$image = new Imagick(__DIR__ . '/image/img.jpg');
header('Content-type: image/jpg');
echo $image;