<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de idade</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $actualAge = date('Y');
        $birth = $_GET['birth'] ?? '2000';
        $defineAge = $_GET['defineAge'] ?? $actualAge;
        $age = ($defineAge - $birth);
    ?>

    <main>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <h1>Calculando a sua idade</h1>

            <label for="birth">Em que ano você nasceu?</label>
            <input type="number" name="birth" value="<?= $birth ?>" min="1900">

            <label for="defineAge">Quer saber sua idade em qual ano? (atualmente estamos em <strong><?= $actualAge ?></strong>)</label>
            <input type="number" name="defineAge" value="<?= $defineAge ?>" max="<?= ($actualAge - 1) ?>">

            <input type="submit" value="Calcular idade">
        </form>
    </main>

    <section class="res">
        <h2>Resultado</h2>
        <?php 
            echo "Quem nasceu em $birth vai ter <strong>$age anos</strong> em $defineAge!";
        ?>
    </section>
    
</body>
</html>