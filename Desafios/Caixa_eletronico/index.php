<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <form action="" method="get">
            <label for=""></label>
            <input type="number" name="" id="">

            <input type="submit" value="">
        </form>
    </main>

    <section class="res">
        <h2>Result</h2>
        <p></p>
    </section>
    
</body>
</html> -->

<?php 
    $saque = $resto;
    // 100
    $res100 = floor($resto / $saque);
    $resto %= $saque;
    // 50
    $res50 = floor($resto / $saque);
    $resto %= $saque;
    // 20
    $res20 = floor($resto / $saque);
    $resto %= $saque;
    // 10
    $res10 = floor($resto / $saque);
    $resto %= $saque;
    // 5
    $res5 = floor($resto / $saque);
    $resto %= $saque;
    // 2
    $res2 = floor($resto / $saque);
    $resto %= $saque;
    // 1
?>