<?php 
$database = 'test';
$host = 'localhost';
$user = 'root';
$passwd = '';

$pdo = new PDO("mysql:dbname=$database; host=$host", "$user", "");

$sql = $pdo->query("INSERT INTO usuarios VALUES (DEFAULT, 'Matheus Brugge', '2005-10-29')");
// $sql = $pdo->query("SELECT * FROM usuarios");
$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($dados);
