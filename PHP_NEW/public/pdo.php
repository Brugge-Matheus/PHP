<?php 
function conect() {
    $pdo = new PDO("mysql:dbname=teste; host=localhost", "root", "");
    return $pdo;
}

function search($args) {
    $pdo = conect();

    $query = $pdo->prepare("SELECT * FROM $args");
    $query->execute();
    $lista = $query->fetchAll();

    return $lista;
}

var_dump(search('usuarios'));