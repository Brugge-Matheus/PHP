<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário retroalimentado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <form action="<?php $_SERVER['$_SELF'] ?>" method="post">
            <label for="value1">Valor 1: </label>
            <input type="number" name="value1" id="value1">

            <label for="value2">Valor 2: </label>
            <input type="number" name="value2" id="value2">

            <input type="submit" value="Enviar">
        </form>
    </main>
    
    
</body>
</html>