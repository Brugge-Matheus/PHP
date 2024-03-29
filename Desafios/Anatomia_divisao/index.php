<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        h1 {
            color: black;
        }
    </style>
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo'];
        $divisor = $_GET['divisor'];
        
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>">

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?= $divisor ?>">

            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da divisão</h2>
        <?php 
            $divisao = ($dividendo / $divisor);
            $modulo = ($dividendo % $divisor);

            echo "<ul>";
            echo "<li>Dividendo: $dividendo</li>";
            echo "<li>Divisor: $divisor</li>";
            echo "<li>divisao: $divisao</li>";
            echo "<li>Módulo: $modulo</li>";
            echo "</ul>";
        ?>

    </section>
    
</body>
</html>