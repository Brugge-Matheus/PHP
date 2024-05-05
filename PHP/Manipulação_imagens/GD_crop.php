<?php
$archive = 'imagem\lil_uzi.jpg';
$width = 400;
$height = 600;

list($originalWidth, $originalHeight) = getimagesize($archive);


$ratio = $originalWidth / $originalHeight;
$ratioDest = $width / $height;

$finalWidth = 0;
$finalHeight = 0;
$finalX = 0;
$finalY = 0;

if($ratioDest > $ratio) {
    $finalWidth = $height * $ratio;
    $finalHeight = $height;

} else {
    $finalHeight = $width / $ratio;
    $finalWidth = $width;
}

if($finalWidth < $width) {
    $finalWidth = $width;
    $finalHeight = $width / $radio;

    $finalY = -(($finalHeight - $height) / 2);
    
} else {
    $finalHeight = $height;
    $finalWidth = $height * $ratio;

    $finalX = -(($finalWidth - $width) / 2);
}


$img = imagecreatetruecolor($width, $height);
$originalImg = imagecreatefromjpeg($archive); // Le a imagem baseado no tipo

imagecopyresampled(
    $img,
    $originalImg,
    $finalX, $finalY, 0, 0,
    $finalWidth, 
    $finalHeight,
    $originalWidth,
    $originalHeight
);

// mostrar imagem na tela
header('Content-Type: image/jpeg');
imagejpeg($img, null, 100);

// salvar imagem
// imagejpeg($img, 'imagem/lil_uzi_vert.jpg', 100);