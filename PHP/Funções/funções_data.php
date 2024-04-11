<?php 

$date =  date('d/m/Y');

$time = strtotime($date); // retorna a equivalência em milisegundos da data

echo date('d/m/y', strtotime($date));
