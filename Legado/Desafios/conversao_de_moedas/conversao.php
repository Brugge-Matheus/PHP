<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <h1>Resultado da conversão</h1>
    <section>
        <p>
            <?php
                // Padronização da lingua
                $default = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                // Cotação copiada do google
                $cotacao = 4.99;
                // Quantidade em reais
                $real = $_POST["value"] ?? 0;
                // Equivalência em dolar
                $dolar = $real / $cotacao;

                echo "O valor em Reais é <strong>" . numfmt_format_currency($default, $real, "BRL") . "</strong> <br>";
                echo "O valor em Dólares é <strong>" . numfmt_format_currency($default, $dolar, "USD") . "</strong> <br>";


                // echo "O valor em Reais é R\$" . number_format($real, 2, ".", ",") . "<br>";
                // echo "O valor em Dólares é US\$" . number_format($dolar, 2, ".", ",");
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>
    
</body>
</html>