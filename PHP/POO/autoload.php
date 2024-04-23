<?php 
require 'heranca.php';

$postText = new Texto();
$postImg = new Foto();

echo "Likes Text post: " .$postText->getLikes() ."\n";
echo "Likes Img post: " .$postImg->getLikes();

