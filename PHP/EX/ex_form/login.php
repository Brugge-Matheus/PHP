<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 30vw;
        }

        label {
            font-size: 1.5em;
        }

        input {
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <main>
        <form action="index.php" method="post">
            <label for="name">Qual o seu nome?</label>
            <input type="text" name="name" value="<?php $cokieName ?>">

            <input type="submit" value="Salvar">

        </form>
    </main>
    
</body>
</html>