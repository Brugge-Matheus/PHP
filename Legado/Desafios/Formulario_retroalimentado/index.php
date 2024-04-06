<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário retroalimentado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['value1'];
        $valor2 = $_GET['value2'];
    ?>
    <main>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="value1">Valor 1: </label>
            <input type="number" name="value1" id="value1" value="<?= $valor2?>">

            <label for="value2">Valor 2: </label>
            <input type="number" name="value2" id="value2" value="<?= $valor1?>">

            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Resultado da soma</h2>
        <?php 
            $soma = $valor1 + $valor2;
            echo "<p>O resultado da soma é $soma</p>";
        ?>
    </section>
    
    
</body>
</html>