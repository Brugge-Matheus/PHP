<?php

// importar a class Database e configurações
require_once 'Database.php';

use sys4soft\Database as Datalayer;

// instanciação de objeto Database
$config = array(
    'host' => 'localhost',
    'database' => 'udemy_loja_online',
    'username' => 'root',
    'password' => ''
);

$pdo = new Datalayer($config, 'array');

// resultados
$results = $pdo->execute_query("SELECT * FROM produtos");
$results = $results->results;


//var_dump($results);
//die();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PDO - Apresentar dados</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            padding: 20px;
        }

        .caixa-cliente {
            border: 1px solid gray;
            margin: 5px;
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>

<body>

<h3>DADOS DOS MEUS CLIENTES</h3>
<?php if (count($results) == 0): ?>
    <p> Não foram encontrados dados para apresentar</p>
<?php endif ?>

<?php foreach($results as $result): ?>

    <p>Nome: <strong><?=$result['produto']?></strong> <br> Preço: <strong><?=$result['preco_unidade']?></strong></p>
    <hr>
<?php endforeach; ?>



</body>

</html>