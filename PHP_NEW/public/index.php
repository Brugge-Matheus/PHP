<?php require '../bootstrap.php'?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Initial page</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        div {
            display: flex;
            flex-direction: column;
            margin-top: 10px;
            width: 70vw;
        }

        input {
            padding: 10px;
        }

        .danger {
            background-color: red;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 25px;
        }

        .sucess {
            background-color: green;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php require load()?>
    </div>
    
</body>
</html>