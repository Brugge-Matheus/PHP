<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular raízes</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        h1 {
            color: black;
        }
    </style>
</head>
<body>
    <?php 
        $num = $_REQUEST['num'] ?? 1; 
        $raizQ = sqrt($num);
        $raizC = pow($num, (1/3));
        // $raizQ = $num ** (1/2);
        // $raizC = $num ** (1/3);
    ?>

    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <h1>Informe um número</h1>

            <label for="num">Número</label>
            <input type="number" name="num" value="<?= $num ?>">

            <input type="submit" value="Calcular Raízes">
    </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <?php
            echo "<ul>";
            echo "<li>A raiz quadrada de $num é <strong>". number_format($raizQ, 2,',', '.') ."</strong></li><br>";
            echo "<li>A raiz cúbica de $num é <strong>". number_format($raizC, 2, ',', '.') ."</strong></li>";
            echo "</ul";
         ?>
    </section>
    
</body>
</html>