<?php 
require 'calculator.php';

$calc = new Calculator();
$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->multiply(3);
$calc->divide(2);
$calc->add(0.5);

$calc->total();

$calc->clear();

echo "<br><br>";
$calc->total();
