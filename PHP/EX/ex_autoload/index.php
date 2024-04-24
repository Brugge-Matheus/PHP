<?php 
include 'vendor/autoload.php';
use includes\Picture as Foto;
use includes\Video as Video;


$postImg = new Foto(730, 410, 'https://b7web.com.br/');
$postVideo = new Video(180, 38, 'https://www.youtube.com/');

// echo "Video Post:<br> Likes: " .$postVideo->getLikes() ."<br>Comments: " .$postVideo->getNumComments() ."<br>Url Video: " .$postVideo->getUrlVideo() ."<br><br>";
// echo "Image Post: " ."<br>Likes: " .$postImg->getLikes() ."<br>Comments: " .$postImg->getNumComments() ."<br>Url Image: " .$postImg->getUrlImg();

echo "Video Post:\n Likes: " .$postVideo->getLikes() ."\nComments: " .$postVideo->getNumComments() ."\nUrl Video: " .$postVideo->getUrlVideo() ."\n\n";
echo "Image Post: " ."\nLikes: " .$postImg->getLikes() ."\nComments: " .$postImg->getNumComments() ."\nUrl Image: " .$postImg->getUrlImg();