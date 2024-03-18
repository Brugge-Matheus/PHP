<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado do Envio de formulário</h1>

    <main class="form-result">
        <?php 
            $name = $_REQUEST["name"] ?? "sem nome";
            $lastName = $_GET["lastname"] ?? "sem sobrenome";
            echo "É um prazer te conhecer $name $lastName! Este é o meu site!"
        ?>
    </main>
    
</body>
</html>