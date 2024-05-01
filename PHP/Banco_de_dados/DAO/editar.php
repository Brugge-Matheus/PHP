<?php 
require 'Mysql_config.php';
require 'dao/ClienteDAOMysql.php';
require 'head.php';

$clienteDao = new ClienteDAOMysql($pdo);

$info = false;
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    if($id) {
        $usuario = $clienteDao->findById($id);
            
    } else if($usuario === false) {
        header('Location: index.php');
        exit;
    }

?>

<body>
    <h1>Editar Usuario <?=$usuario->getNomeCompleto()?></h1>
    <div class="form-container">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="form-group">
            <input type="hidden" name="id" value="<?=$info['idCliente']?>">

            <label for="name">Nome: </label>
            <input type="text" name="name" value="<?=$usuario->getNomeCompleto()?>">

            <label for="phone">Telefone: </label>
            <input type="number" name="phone" value="<?=$usuario->getTelefone()?>">
            <label for="email">E-mail: </label>

            <input type="email" name="email" value="<?=$usuario->getEmail()?>">
            <input type="submit" value="Alterar">

            <a href="index.php">
                <input type="button" value="Voltar">
            </a>
        </form>
    </div>

    <?php 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if($name && $email && $phone) {
            $user = new Cliente();
            $user->setIdCliente($id);
            $user->setNomeCompleto($name);
            $user->setTelefone($phone);
            $user->setEmail($email);

            $clienteDao->update($user);

            header('Location: index.php');
            exit;
            
        } else {
            header('Location: editar.php?id='.$id);
            exit;
        }
    } 
?>
</body>

</html>