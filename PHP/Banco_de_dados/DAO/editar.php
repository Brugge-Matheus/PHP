<?php  
require 'Mysql_config.php';
require 'dao/ClienteDAOMysql.php';
require 'head.php';

$clienteDao = new ClienteDAOMysql($pdo);

$info = false; 
$id = filter_input(INPUT_GET, 'idCliente');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idCliente = filter_input(INPUT_POST, 'id');
    $name = filter_input(INPUT_POST, 'name');
    $phone = filter_input(INPUT_POST, 'phone');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if ($idCliente && $name && $phone && $email) {
        $user = $clienteDao->findById($idCliente);
        $user->setNomeCompleto($name);
        $user->setTelefone($phone);
        $user->setEmail($email);

        $clienteDao->update($user);

        header('Location: index.php');
        exit;
    } else {
        header('Location: editar.php?id='.$idCliente);
        exit;
    }
}

if ($id) {
    $info = $clienteDao->findById($id);

} else if($info === false) {
    header('Location: create.php');
    exit;
}
?>

<body>
    <h1>Editar Usuario <?= $info->getNomeCompleto() ?></h1>
    <div class="form-container">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="form-group">
            <input type="hidden" name="id" value="<?= $info->getIdCliente() ?>">

            <label for="name">Nome: </label>
            <input type="text" name="name" value="<?= $info->getNomeCompleto() ?>">

            <label for="phone">Telefone: </label>
            <input type="number" name="phone" value="<?= $info->getTelefone() ?>">
            <label for="email">E-mail: </label>

            <input type="email" name="email" value="<?= $info->getEmail() ?>">
            <input type="submit" value="Alterar">

            <a href="index.php">
                <input type="button" value="Voltar">
            </a>
        </form>
    </div>
</body>

</html>
