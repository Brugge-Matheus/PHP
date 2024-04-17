<?php include 'main.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <style>
        table, tr, td  {
            padding: 5px;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <td><?= $keys[0]?></td>
            <td><?= $values[0]?></td>
        </tr>
        <tr>
            <td><?= $keys[1]?></td>
            <td><?= $values[1]?></td>
        </tr>
        <tr>
            <td><?= $keys[2]?></td>
            <td><?= $values[2]?></td>
        </tr>
        <tr>
            <td><?= $keys[3]?></td>
            <td><?= $values[3]?></td>
        </tr>
        <tr>
            <td><?= $keys[4]?></td>
            <td><?= $values[4]?></td>
        </tr>
    </table>

<br>
<br>

<table border="3">
    <?php foreach($array as $key => $value): ?>

        <tr>
            <td><?= $key?></td>
            <td><?= $value?></td>
        </tr>

    <?php endforeach;?>
</table>
    
</body>
</html>