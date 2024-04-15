<?php 
    
    include 'formularios.php';


    if(isset($_SESSION['alert'])) {
        echo $_SESSION['alert'];
        $_SESSION['alert'] = '';
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
        }

        input {
            margin: 8px 0;
            padding: 5px;
            width: 20vw;
        }

        p {
            font-size: 1.2em;
        }
    </style>
</head>
<body>
        <h1>Cabeçalho</h1>
        <?php 
            if(isset($_COOKIE['nome'])) {
                $cokName = $_COOKIE['nome'];
                echo "<h2>Olá, $cokName</h2>";
            }
        ?>
        <hr>

    <main>
        <form action="formularios.php" method="post">
            <label for="name">Nome: </label>
            <input type="text" name="name">

            <label for="age">Idade: </label>
            <input type="number" name="age">

            <label for="number">Number: </label>
            <input type="number" name="number">

            <label for="mail">E-mail: </label>
            <input type="email" name="mail">

            <input type="submit" value="Enviar">
        </form>
    </main>
    <a href="delete.php">
        <input type="submit" value="Apagar Cookie">
    </a>

</body>
</html>