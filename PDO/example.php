<?php

function connect(): PDO
{
    try {
        return new PDO("mysql:host=localhost;dbname=udemy_loja_online", "root", "");

    } catch (PDOException $e) {
        echo "<pre>";
        print_r($e);
    }
}

function insertProduct(string $productName, string|int $price)
{
    $pdo = connect();

    // Remova as aspas dos placeholders
    $prepare = $pdo->prepare("INSERT INTO produtos (id, produto, preco_unidade) VALUES (DEFAULT, :produto, :preco_unidade)");

    // Execute a consulta passando os parâmetros
    return $prepare->execute([
        'produto' => $productName,
        'preco_unidade' => $price
    ]);
}


$values = insertProduct('Notebook', '12000');

//foreach($values as $value) {
//    echo "<pre>";
//    print_r($value);
//}


var_dump($values);