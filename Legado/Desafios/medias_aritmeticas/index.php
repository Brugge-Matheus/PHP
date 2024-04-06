<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Aritmética</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- Média Aritmética e Média Ponderada -->
    <?php 
        $v1 = $_REQUEST['v1'] ?? 0;
        $p1 = $_REQUEST['p1'] ?? 0;
        $v2 = $_REQUEST['v2'] ?? 0;
        $p2 = $_REQUEST['p2'] ?? 0;

        $ma = ($v1 + $v2) / 2;
        $mp = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2);
    ?>
    <main>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º Valor: </label>
            <input type="number" name="v1" id="v1" value="<?= $v1 ?>">

            <label for="p1">1º Peso: </label>
            <input type="number" name="p1" id="p1" value="<?= $p1 ?>">

            <label for="v2">2º Valor: </label>
            <input type="number" name="v2" id="v2" value="<?= $v2 ?>">

            <label for="p2">2º Peso: </label>
            <input type="number" name="p2" id="p2" value="<?= $p2 ?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section class="res">
        <h2>Cálculo de Médias</h2>
        <?php 
            echo "<p>Analisando os vlaores de $v1 e $v2</p>";
            echo "<ul><li>A Média Aritmética Simples entre os valores é igual a ". number_format($mp, 2, ',', '.') . " </li><br>";
            echo "<li>A Média Aritmética Ponderada com pesos $p1 e $p2 é igual a ". number_format($ma, 2, ',', '.') ."</li></ul>"
                
        ?>
    </section>
    
</body>
</html>