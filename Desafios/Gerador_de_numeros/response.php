<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Números gerados</h1>

    <section>
        <p>
            <?php
                $min = $_POST["min"];
                $max = $_POST["max"];

                $randomNum1 = rand($min, $max);
                $randomNum2 = mt_rand($min, $max);
                $randomNum3 = random_int($min, $max);

                echo "O número gerado pelo rand foi $randomNum1 <br>";
                echo "O número gerado pelo mt_rand foi $randomNum2 <br>";
                echo "O número gerado pelo random_int foi $randomNum3 <br>";      
            ?>
        </p>
    </section>
    
</body>
</html>