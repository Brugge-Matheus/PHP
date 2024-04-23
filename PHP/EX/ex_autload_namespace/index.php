<?php 
include 'autoload.php';
// use \matematica\Basica as basicMath;
use matematica\Basica;
use foto\Upload;

$math = new Basica();
echo $math->sum(10, 50);
