<?php 
require 'Mysql_config.php';
require 'dao/ClienteDAOMysql.php';
include 'head.php';

$clietenDao = new ClienteDAOMysql($pdo);
?>
<body>
    <h1>Adicionar Usuario</h1>
    <div class="form-container">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="form-group">
            <label for="name">Nome: </label>
            <input type="text" name="name">

            <label for="phone">Telefone: </label>
            <input type="number" name="phone">

            <label for="email">E-mail: </label>
            <input type="email" name="email">

            <input type="submit" value="Adicionar">

            <a href="index.php">
                <input type="button" value="Voltar">
            </a>
        </form>
    </div>
    
    <?php 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $date = date('Y-m-d');

    $sql = $pdo->prepare("SELECT * FROM clientes WHERE email = :email");
    $sql->bindValue(":email", $email);
    $sql->execute();

    if($sql->rowCount() === 0) {
        if($name && $phone && $email) {
            if($clietenDao->findByEmail($email) === false) {
                $novoCliente = new Cliente();
                $novoCliente->setNomeCompleto($name);
                $novoCliente->setTelefone($phone);
                $novoCliente->setEmail($email);
                $novoCliente->getDataCadastro();

                $clietenDao->add($novoCliente);

                header('Location: index.php');
                exit;

            } else {
                header('Location: create.php');
                exit;
            }
    
            
            
        
        }
    } else {
        header('Location: create.php');
        exit;
    }   
}
?>

</body>
</html>