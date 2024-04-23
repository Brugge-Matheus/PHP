<?php 
include 'autoload.php';


$postImg = new PostBase\Picture();
$postImg->setLikes(180);
echo $postImg->getLikes();