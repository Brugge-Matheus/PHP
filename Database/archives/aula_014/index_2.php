<?php

// dados de ligação
$database = 'nova_base_dados';
$username = 'root';
$password = '';

// ligação
$connect = new PDO("mysql:host=localhost", $username, $password);

// destruir a base de dados, caso ela exista
$connect->exec("DROP DATABASE IF EXISTS `$database`");

// vamos executar o código para criar a base de dados
$connect->exec("CREATE DATABASE IF NOT EXISTS `$database`");

// indicar à ligação qual é a base de dados que vai ser usada
$connect->exec("USE `$database`");

// a base de dados está vazia. Vamos criar uma tabela.
$connect->exec(
    "CREATE TABLE usuarios (" .
    "`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, " .
    "`usuario` VARCHAR(30) NULL DEFAULT NULL, " .
    "`senha` VARCHAR(100) NULL DEFAULT NULL, " .
    "`created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP" .
    ")"
);

// destruir a ligação
$connect = null;

echo 'Terminado';