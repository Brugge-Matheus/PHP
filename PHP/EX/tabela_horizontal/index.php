<?php include 'main.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabela horizontal</title>
    <style>
        table, tr, td, th {
            padding: 5px;
        }
    </style>
</head>
<body>
    <table border="1">
       <tr>
            <?php foreach($array as $key => $value):?>
                <th><?= $key?></th>
            <?php endforeach;?>
       </tr>

       <tr>
            <?php foreach($array as $value):?>
                <td><?= $value?></td>
            <?php endforeach;?>
       </tr>
    </table>
</body>
</html>