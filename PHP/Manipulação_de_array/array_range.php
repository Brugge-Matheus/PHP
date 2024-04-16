<?php 
$arrayNum = range(1, 20, 5);
$arrayChar = range('a', 'z', 5);

foreach($arrayNum as $value) {
    echo "$value<br>";
}

foreach($arrayChar as $value) {
    echo "$value<br>";
}