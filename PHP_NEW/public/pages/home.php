<h2>Pagina home</h2>


<div class="create-user">
    <a href="./?page=create_user">
        <button>
            Criar novo usúario
        </button>
    </a>
</div>


<div class="container-table">
    <table border="1" width="100%">
            <th>ID</th>
            <th>NOME</th>
            <th>SOBRENOME</th>
            <th>EMAIL</th>
            <th>SENHA</th>
            <th>AÇÕES</th>
    
        <?php $user = listAll('users')?>
        <?php foreach($user as $users): ?>
            <tr>
                <td><?= $users->id?></td>
                <td><?= $users->name?></td>
                <td><?= $users->lastName?></td>
                <td><?= $users->email?></td>
                <td><?= $users->password?></td>
                <td align="center">
                    <a href="./?page=edit_user&?id=<?=$users->id?>">
                        Editar
                    </a>
                    |
                    <a href=""
                        onclick="return confirm('Tem certeza que deseja excluir o usúario?')">
                        Apagar
                    </a>
    
        <?php endforeach; ?>
    
                </td>
            </tr>
        </table>
</div>
