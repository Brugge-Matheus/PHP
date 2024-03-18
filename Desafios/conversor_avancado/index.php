<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Conversor de Moedas</h1>

    <section>
        <form action="conversor.php" method="post">
            <label for="value">Digite o valor que deseja converter: </label>
            <input type="number" name="value" id="value" required>

            <input type="submit" value="Converter">
        </form>
    </section>
    
</body>
</html>