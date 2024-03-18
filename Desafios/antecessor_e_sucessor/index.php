<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Digite um número</h1>

    <section class="formulario">
        <form action="response.php" method="post">
            <label for="number">Número</label>
            <input type="number" name="number" id="number" required>

            <input type="submit" value="Enviar">

        </form>
    </section>
    
</body>
</html>