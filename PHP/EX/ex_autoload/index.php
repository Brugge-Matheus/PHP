<?php 
spl_autoload_register(function ($class) {
    if(file_exists('includes/'.$class.'.php')) {
        include 'includes/'.$class.'.php';
    }
});

$postImg = new Picture();
$postImg->setLikes(180);
echo $postImg->getLikes();