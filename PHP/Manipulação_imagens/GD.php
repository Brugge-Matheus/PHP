<?php 
$img = imagecreatetruecolor(300,300);
$color = imagecolorallocate($img, 255, 0, 0);

imagefill($img, 0, 0, $color);

// header("Content-Type: image/jpeg");

imagepng($img, 'imagem/new_img.png');

// imagejpeg($img, null, 100);
// imagejpeg($img, 'imagem/new_img.jpg', 100);