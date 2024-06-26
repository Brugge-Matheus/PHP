<?php 
require 'Mysql_config.php';
require 'head.php';
require 'dao/ClienteDAOMysql.php';

$clienteDao = new ClienteDAOMysql($pdo);

$lista = $clienteDao->findAll();

?>

<body>
    <a href="create.php">
        ADICIONAR USUARIO
        <i class="fa-solid fa-circle-plus"></i>
    </a>
    <table border="1" width="100%">
        <th>ID</th>
        <th>NOME</th>
        <th>TELEFONE</th>
        <th>EMAIL</th>
        <th>DATA DE CADASTRO</th>
        <th>AÇÕES</th>
        <?php foreach($lista as $cliente): ?>
        <tr>
            <td><?= $cliente->getIdCliente() ?></td>
            <td><?= $cliente->getNomeCompleto() ?></td>
            <td><?= $cliente->getTelefone() ?></td>
            <td><?= $cliente->getEmail() ?></td>
            <td><?= $cliente->GetDataCadastro() ?></td>
            <td align="center">
                <a href="editar.php?idCliente=<?=$cliente->getIdCliente()?>">
                    <i class="fa-solid fa-edit"></i>
                </a>
                <a href="deletar.php?idCliente=<?=$cliente->getIdCliente()?>"
                    onclick="return confirm('Tem certeza que deseja excluir o usúario <?=$cliente->getNomeCompleto()?>?')">
                    <i class="fa-solid fa-trash"></i>
                </a>

            </td>
        </tr>
        <?php endforeach;?>
    </table>
</body>

</html>