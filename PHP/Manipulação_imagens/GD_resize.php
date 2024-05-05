<?php
$archive = 'imagem\lil_uzi.jpg';
$maxWidth = 400;
$maxHeight = 600;

list($originalWidth, $originalHeight) = getimagesize($archive);


$ratio = $originalWidth / $originalHeight;
$ratioDest = $maxWidth / $maxHeight;

$finalWidth = 0;
$finalHeight = 0;

if($ratioDest > $ratio) {
    $finalWidth = $maxHeight * $ratio;
    $finalHeight = $maxHeight;

} else {
    $finalHeight = $maxWidth / $ratio;
    $finalWidth = $maxWidth;
}


$img = imagecreatetruecolor($finalWidth, $finalHeight);
$originalImg = imagecreatefromjpeg($archive); // Le a imagem baseado no tipo

imagecopyresampled(
    $img,
    $originalImg,
    0, 0, 0, 0,
    $finalWidth, 
    $finalHeight,
    $originalWidth,
    $originalHeight
);

// mostrar imagem na tela
// header('Content-Type: image/jpeg');
// imagejpeg($img, null, 100);

// salvar imagem
imagejpeg($img, 'imagem/lil_uzi_vert.jpg', 100);