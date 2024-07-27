<?php

$info = ['Meu nome é Matheus, tenho 18 anos', 'Eu não tenho 18 anos'];
$info2 = ['Eu definitvamente nao tenho 18 anos e nem , no bolso', '18'];

$info = str_replace([',', '18'], ['$', '20'], $info2);

var_dump($info);