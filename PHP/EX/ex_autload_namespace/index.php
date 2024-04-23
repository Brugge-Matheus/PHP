<?php 
// use \matematica\Basica as basicMath;
// use matematica\Basica;
// use foto\Upload;
include 'vendor/autoload.php';
use classes\matematica\Basica;

$math = new Basica();
echo $math->sum(10, 50);
