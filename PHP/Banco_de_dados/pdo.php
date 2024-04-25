<?php 
$pdo = new PDO("mysql:dbname=crm; host=localhost", "root", "");
$mysqli = new mysqli("localhost", "root", "crm", "");
$mysql = $mysqli->query("INSERT INTO usuarios VALUES (DEFAULT,'Kleverson','1780-12-7')");

$sql = $pdo->query("SELECT * FROM usuarios");

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($dados);
