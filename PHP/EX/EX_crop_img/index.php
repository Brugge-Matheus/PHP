<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redimensionador de imagens</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            text-align: center;
        }

        .container-form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: lightgrey;
            padding: 40px 0px;
            border-radius: 10px;
        }

        .form {
            display: flex;
            flex-direction: column;
            width: 20%;

            background-color: grey;
            padding: 20px;
            border-radius: 7px;
        }

        form input {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border-style: none;
        }

        .form input[type="submit"] {
            font-weight: bold;
            background-color: white;
            border-radius: 3px;
            border: none;
            padding: 15px;
            cursor: pointer;

            transition: all 0.3s;
        }

        form input[type="submit"]:hover {
            background-color: black;
            color: white;

            transition: all 0.3s;
        }

    </style>
</head>
<body>
    <h1>Redimensionador de imagens</h1>

    <div class="container-form">
        <h2>Escolha as dimensões que deseja</h2>

        <form action="crop.php" method="post" enctype="multipart/form-data" class="form">
            <label for="altura">Altura: </label>
            <input type="number" name="altura" id="altura">

            <label for="largura">largura: </label>
            <input type="number" name="largura" id="largura">

            <input type="file" name="image" id="image">

            <input type="submit" value="Redimensionar">
        </form>
    </div>
</html>
