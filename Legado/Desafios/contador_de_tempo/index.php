<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de segundos</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        h1 {
            color: black;
        }
    </style>
</head>
<body>
    <?php 
        $total_segundos = $_GET['seg'] ?? 0;
        $sobra;
    ?>
    <main>
    <h1>Contador de Segundos</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="seg">Qual o total de segundos?</label>
        <input type="number" name="seg" value="<?= $total_segundos ?>" id="seg" min="0" step="1" required>

        <input type="submit" value="Calcular">
    </form>
    </main>

    <?php 
        $sobra = $total_segundos;
        // Week
        $semana = (int)($sobra / 604_800);
        $sobra = ($sobra % 604_800);
        // Days
        $dia = (int)($sobra / 86_400);
        $sobra = ($sobra % 86_400);
        // Horas
        $hora = (int)($sobra / 3_600);
        $sobra = ($sobra % 3_600);
        // Minutes
        $min = (int)($sobra / 60);
        $sobra = ($sobra % 60);
        // Seconds
        $segundos = $sobra;
    ?>

    <section class="res">
        <h2>Totalizando</h2>
        <p>Analisando o valor que você digitou, <?= $total_segundos ?> segundos equivalem a um total de: </p>
        <ul>
            <li><?= $semana?> Semanas</li>
            <li><?= $dia?> Dias</li>
            <li><?= $hora?> Horas</li>
            <li><?= $min?> Minutos</li>
            <li><?= $segundos?> Segundos</li>
        </ul>
    </section>
    
</body>
</html>