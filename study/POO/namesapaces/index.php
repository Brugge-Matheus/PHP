<?php

require 'class.php';

use class1\MyClass as Classe1;
use class2\MyClass as Classe2;


$myClass1 = new Classe1();

echo $myClass1->apresentation() . PHP_EOL;
echo Classe2::apresentation() . PHP_EOL;