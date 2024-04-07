<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de salário minimo</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        h1 {
            color: black;
        }
    </style>
</head>
<body>
    <?php 
        $sal = $_REQUEST['salario'] ?? 0;
        $salMin = 1400;
        $tot = intdiv($sal, $salMin);
        // $tot = (int)($sal / $salMin);
        $dif = $sal % $salMin
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Seu salário: </label>
            <input type="number" name="salario" value="<?= $sal ?>" required>
            <p>Considerando o salário mínimo de <strong>R$1400,00</strong></p>

            <input type="submit" value="Calcular">
    </form>
    </main>

    <section class="res">
        <?php 
            echo "<h2>Resultado final</h2>";
            echo "<p>Seu salário de <strong>$sal</strong>";
            echo "Equivalem a <strong>$tot</strong> salários mínimos + R\$". number_format($dif, 2, ",", ".")."</p><br>";
        ?>
    </section>


    
</body>
</html>