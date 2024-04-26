<?php 
require 'Mysql_config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="nomeTabela" id="nomeTabela">

        <input type="text" name="value1" id="value1">
        <input type="text" name="value2" id="value1">
        <input type="text" name="value3" id="value1">

        <input type="submit" value="Enviar">
    </form>

    <?php
        // $nomeTabela = filter_input('nomeTabela');

        $sql = $pdo->query("INSERT INTO usuarios VALUES (DEFAULT, 'Matheus Brugge', '2005-10-29')");

        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
        
    ?>
</body>
</html>

