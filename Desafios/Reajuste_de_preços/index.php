<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Preços</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $price = $$_REQUEST['price'];
        $readjustment = $$_REQUEST['change'];
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="price">Preço do Produto (R$)</label>
            <input type="number" name="price" id="price" min="0.10" step="0.01" value="<?= $price ?>">

            <label for="change">Qual será o percentual de reajuste? (<strong><span id="pctRange">5</span>%</strong>)</label>
            <input type="range" name="change" id="change" min="0" max="100" step="1" oninput="changePct()">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <?php 
        $newPrice = $price + ($price * $readjustment / 100);
    ?>

    <section class="res">
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava <strong>R$<?= number_format($price, 2, ',', '.') ?></strong>, com <strong><?= $readjustment ?>%</strong> de aumento vai passar a custar <strong>R$<?= number_format($newPrice, 2, ',', '.') ?></strong> a partir de agora</p>
    </section>

    <script>
    let pct = document.getElementById('pctRange');
    let inputRange = document.getElementById('change');

    changePct();

    function changePct() {
        pct.innerText = inputRange.value;
    }
    </script>
</body>
</html>