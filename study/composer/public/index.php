<?php
require __DIR__ . '/../vendor/autoload.php';

use function app\Utils\ddd;

// $files = get_included_files();
// var_dump($files); // Deve listar 'src/Utils/Functions.php'

var_dump(function_exists('app\Utils\ddd')); // Deve retornar true

ddd("Hello World!");