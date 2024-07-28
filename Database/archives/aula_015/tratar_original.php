<?php
require_once("Database.php");
require_once("formulario.php");

// importar a class Database e configurações
use sys4soft\Database as Datalayer;


// instanciação de objeto Database
$config = [
    'host' => 'localhost',
    'database' => 'udemy_loja_online',
    'username' => 'root',
    'password' => ''
];

$config = new Datalayer($config, 'array');

// parametros
$params = [
    ':produto' => $_POST['name'],
    ':preco_unidade' => $_POST['preco']
];

// inserir os dados do produto
$query = $config->execute_non_query("INSERT INTO produtos (id, produto, preco_unidade) values (DEFAULT, :produto, :preco_unidade)", $params);

// voltar ao formulário automaticamente
header('Location: formulario.php');
