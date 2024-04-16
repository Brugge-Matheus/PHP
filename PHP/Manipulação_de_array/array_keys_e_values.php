<?php 
$info = array(
    'name' => 'Matheus',
    'age' => '18',
    'work' => 'developer',
    'FavoriteColor' => 'black'
);

$keys = array_keys($info);
$values = array_values($info);


print_r($info);
echo "<br>";
echo "<br>";
print_r($keys);
echo "<br>";
echo "<br>";
print_r($values);