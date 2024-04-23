<?php 
include 'vendor/autoload.php';
use includes\Picture;
use includes\Video;


$postImg = new Picture(730, 410, 'https://b7web.com.br/');
$postVideo = new Video(180, 38, 'https://www.youtube.com/');

echo "Video Post:<br> Likes: " .$postVideo->getLikes() ."<br>Comments: " .$postVideo->getNumComments() ."<br>Url Video: " .$postVideo->getUrlVideo() ."<br><br>";
echo "Image Post: " ."<br>Likes:" .$postImg->getLikes() ."<br>Comments: " .$postImg->getNumComments() ."<br>Url Video: " .$postImg->getUrlImg();