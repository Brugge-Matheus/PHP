<?php

// HTTP Headers (CORS)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header("Content-Type: application/json; charset=UTF-8");

// Db config
const MYSQL_CONFIG = [
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'database' => 'devnotes',
    'charset' => 'utf8'
];

// Db connect
function connect(): PDO
{
    try {
        $pdo = new PDO("mysql:host=" . MYSQL_CONFIG['host'] . ";dbname=" . MYSQL_CONFIG['database'] . ";charset=" . MYSQL_CONFIG['charset'], MYSQL_CONFIG['user'], MYSQL_CONFIG['password']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;

    } catch (PDOException $e) {
        var_dump($e->getMessage());
    }
}

// Default structure of requests
$array = [
    'response' => '',
    'result' => []
];
