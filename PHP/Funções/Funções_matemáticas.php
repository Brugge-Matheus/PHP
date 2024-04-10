<?php 

//Funções matemáticas em php

$num = 10.5;
$lista = array(1, 5 ,7 ,8);

abs($num); // Retorna o valor absoluto de um número

pi(); // Retorna valor de pi

floor($num); // Arredonda um número para baixo
ceil($num); // Arredonda um número para cima
round($num, 2); // Arredonda baseado no valor, pode tambem adicionar a quantidade de casas decimais que deseja

rand($min, $max); // Gera um valor aleatório, passando o valor minimo e o máximo

max($lista); // Retorna o maior valor 
min($lista); // Retorna o menor valor

