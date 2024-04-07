<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Conversão de Moedas</h1>

<section>
    <p>
    <?php 
        // Initial data
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $default = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
 
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $real = $_POST["value"] ?? 0;
        $dolar = ($real / $cotacao);

        echo "O valor em Reais é <strong>" . numfmt_format_currency($default, $real, "BRL") . "</strong> <br>";
        echo "O valor em Dolar é <strong>" . numfmt_format_currency($default, $dolar, "USD") . "</strong> <br>";
    ?>
    </p>
</section>

    
    
</body>
</html>