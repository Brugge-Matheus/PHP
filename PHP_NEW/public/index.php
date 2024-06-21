<?php require '../bootstrap.php'?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Initial page</title>
    <style>
        * {
            text-decoration: none;
        }
        
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        .form-group {
            display: flex;
            flex-direction: column;
            margin-top: 10px;
            width: 50vw;
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

        .alert {
            background-color: yellow;
            color: black;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 25px;
        }

        .create-user {
            margin-bottom: 20px;
        }

        .container-table {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php require load()?>
    </div>
    
</body>
</html>