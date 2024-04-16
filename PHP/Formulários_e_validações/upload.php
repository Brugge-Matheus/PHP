<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivos</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Enviar">
    </form>

    <?php 
    if(in_array($_FILES['file']['type'], array('image/jpeg', 'image/jpg', 'image/png'))) {
        $name = md5(time(). rand(0,1000)).'.jpg';
        echo $_FILES['file']['type'];
        // print_r($_FILES);
        echo "<br>Arquivo subido com sucesso!";

        move_uploaded_file($_FILES['file']['tmp_name'],'teste/'.$name);

    } else {
        echo 'Arquivo não foi subido com sucesso!';
    }
        
    ?>
</body>
</html>