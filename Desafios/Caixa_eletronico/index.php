<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        img {
            width: 35%;
            margin-top: 20px;
        }

        li {
            list-style: none;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_GET['value'] ?? 0;

        // 100
        $resto = $saque;
        $saq100 = floor($resto / 100);
        $resto %= 100;
        // 50
        $saq50 = floor($resto / 50);
        $resto %= 50;
        // 20
        $saq20 = floor($resto / 20);
        $resto %= 20;
        // 10
        $saq10 = floor($resto / 10);
        $resto %= 10;
        // 5
        $saq5 = floor($resto / 5);
        $resto %= 5;
        // 2
        $saq2 = floor($resto / 2);
        $resto %= 2;
        // 1
        $saq1 = floor($resto / 1);
        $resto %= 1;

    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="value">Qual o valor deseja sacar? (R$)</label>
            <input type="number" name="value" id="value" value="<?= $saque ?>">

            <input type="submit" value="Sacar">
        </form>
    </main>

    <section class="res">
        <h2>Saque de R$<?= $saque ?> reais realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="img/100-reais.jpg" alt=""> x<?= $saq100?></li>
            <li><img src="img/50-reais.jpg" alt=""> x<?= $saq50?></li>
            <li><img src="img/20-reais.jpg" alt=""> x<?= $saq20?></li>
            <li><img src="img/10-reais.jpg" alt=""> x<?= $saq10?></li>
            <li><img src="img/5-reais.jpg" alt=""> x<?= $saq5?></li>
            <li><img src="img/2-reais.jpg" alt=""> x<?= $saq2?></li>
            <li><img src="img/1-real.jpg" alt="" style="width: 15%;"> <?= $saq1?></li>
        </ul>
    </section>
    
</body>
</html>