<?php 
session_start();
echo session_id() ."<br>";

// session_destroy();

$_SESSION['name'] = "Matheus";
$_SESSION['newName'] = 'Ana';

isset($_SESSION['newName']) ? "SESSION: " .var_dump($_SESSION['newName']) . "<br>": "Sessão não existe";
isset($_SESSION['name']) ? "SESSION: " .var_dump($_SESSION['name'])  . "<br>" : "Sessão não existe";