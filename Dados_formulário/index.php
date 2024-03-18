<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obtendo dados de formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Apresente-se</h1>

    <section class="formulario">
        <form action="cad.php" method="get">

            <label for="name">Nome </label>
            <input type="text" name="name">

            <label for="lastname">Sobrenome</label>
            <input type="text" name="lastname">

            <input type="submit" value="Enviar">
        </form>
    </section>
    
</body>
</html>