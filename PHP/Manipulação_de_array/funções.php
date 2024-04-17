<?php 
$list = array('a', 'b', 'c', 'd', 'e');
$list2 = array('a', 'b', 'c', 'd', 'e', 'f');

$newList = array_slice($list, (count($list) - 3), 3);
array_splice($list2, (count($list2) - 1), 1); //remove itens
array_splice($list2, 1, 2, array('Y', 'Z')); //remove itens e adiciona outros no lugar

print_r($newList);
echo "<br><br>";
print_r($list2);