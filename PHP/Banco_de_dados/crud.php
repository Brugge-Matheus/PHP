<?php 
$pdo = new PDO("mysql:dbname='test'; host=localhost", "root", "");
$sql->query("SELECT * FROM usuarios");

$database = $sql->fetchAll(PDO::FETCH_ASSOC);