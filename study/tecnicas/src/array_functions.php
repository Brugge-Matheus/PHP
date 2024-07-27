<?php

$arr = array('1', '2', '3', '4');

[$num1, $num2, $num3, $num4] = $arr;

var_dump($num4);


$url = parse_url('https://teste.dev.br');

['scheme' => $scheme, 'host' => $host] = $url;

var_dump($scheme, $host);