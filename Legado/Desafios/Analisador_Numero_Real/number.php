<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $num = $_POST["number"] ?? 0;

            echo "<p>Analisando o número <strong>". number_format($num, 3, ",", ".") ."</strong> informado pelo usuário:</p>";

            $int = (int) $num;
            $fra = $num - $int;

            echo "<ul>
                    <li>A parte inteira do número é ". number_format($int, 3, ",", ".") ."</li>
                    <li>A parte fracionada do número é ". number_format($fra, 3, ",", ".") ."</li>
                </ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>