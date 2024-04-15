<?php
session_start();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

if($name) {
    $_SESSION['name'] = $name;
    echo "<p>Olá, $name</p>";

} else{
    $_SESSION['name'] = $name;

    header('Location: login.php');
    exit;
}

print "<a href='login.php'>Olá<a>";


