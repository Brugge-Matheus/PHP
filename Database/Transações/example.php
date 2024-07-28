<?php

function connect(): PDO
{
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=udemy_loja_online", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        return $pdo;

    } catch (PDOException $e) {
        var_dump($e->getMessage());
    }
}

function createDatabase(string $tableName): void
{
    $pdo = connect();

    $pdo->exec("CREATE DATABASE IF NOT EXISTS {$tableName}");
}

function listAll(string $table, string $operator = '*'): array|bool
{
    try {
        $pdo = connect();

        return $pdo->query("SELECT {$operator} FROM {$table}")->fetchAll(PDO::FETCH_DEFAULT);

    } catch (PDOException $e) {
        var_dump($e->getMessage());
    }

}

$produtos = listAll('produtos');
createDatabase('ifWantYesBro');

foreach ($produtos as $produto) {
    echo "ID: {$produto->id} NOME: {$produto->produto} PREÇO: {$produto->preco_unidade}" . PHP_EOL;
}
