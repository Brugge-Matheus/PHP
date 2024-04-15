<?php 
$text = file_get_contents('txt.txt');
$text = explode("\n", $text);

echo 'Rows:' .count($text);
