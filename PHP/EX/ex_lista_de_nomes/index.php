<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de nomes</title>
</head>
<body>
    <?php 
        $newNames = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $texto = file_get_contents('names.txt');
        $texto .= "\n$newNames";
        file_put_contents('names.txt', $texto);
        $newText = file_get_contents('names.txt');
        $ArrayNames = explode("\n",$newText);

    ?>

    <main>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="name">Novo nome: </label>
            <input type="text" name="name" id="name" required>

            <input type="submit" value="Adicionar">
        </form>
    </main>

    <section>
        <h2>Lista de nomes</h2>
        <ul>
            <?php 
                foreach($ArrayNames as $value) {
                    echo "<li>$value</li><br>";
                }
            ?>
        </ul>
    </section>
    
</body>
</html>