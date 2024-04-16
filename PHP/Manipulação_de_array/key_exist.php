<?php 
$info = array(
    'name' => 'Matheus',
    'age' => '18',
    'work' => 'developer',
    'FavoriteColor' => 'black'
);

if(key_exists('idade', $info)) {
    echo "Item encontrado: " .$info['age'];

} else {
    echo 'Item não identificado';
}