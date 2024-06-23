<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com Radios</title>
    <style>
        * {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h2>Escolha as opção que deseja</h2>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <input type="checkbox" name="foods[]" value="Maça">Maça
            <br>
            <input type="checkbox" name="foods[]" value="Abacate">Abacate
            <br>
            <input type="checkbox" name="foods[]" value="Banana">Banana
            <br>
            <input type="checkbox" name="foods[]" value="Kiwi">Kiwi
            <br>
            <input type="checkbox" name="foods[]" value="Tomate">Tomate
            <br>

        <input type="submit" name="submit-credit-card" value="Enviar">
    </form>

    <div class="response">
        <pre>
            <?php
            $foods = null;
            if(isset($_POST['submit-credit-card'])) {

                if(isset($_POST['foods'])) {
                    $foods = $_POST['foods'];
                    $foods = array_combine($foods, array_map(function($field) {
                        return $field;
                    }, $foods));

                    $foods = implode(', ', $foods);

                    echo "<strong>Você escolheu:</strong> " . $foods .".";

                } else {
                    echo "<strong>Escolha uma opção válida!</strong>";
                    
                }

            }    
            ?>
        </pre>
    </div>
</body>
</html>