<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Antecessor e sucessor</h1>

    <main>
        <p>
            <?php
                $num = $_POST["number"] ?? 0;

                echo "O número escolhido foi $num <br>";
                echo "O antecessor de $num é " . ($num - 1) . "<br>";
                echo "O sucessor de $num é " . ($num + 1) . "<br>";
            ?>
        </p>

        <button>Voltar</button>
    </main>

    
</body>
</html>