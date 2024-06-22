<?php getMessage('message')?>
<form action="../app/form/edit_user_mod.php" method="post">
    <h2>Editar usuario</h2>

    <?php $user = find('users', 'id', $_GET['id'])?>

    <div class="form-group">
        <input type="hidden" name="id" id="id" value="<?= $user->id?>">
    </div>

    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="<?= $user->name?>">
    </div>

    <div class="form-group">
        <label for="lastName">Sobrenome</label>
        <input type="text" name="lastName" id="lastName" value="<?= $user->lastName?>">
    </div>

    <div class=" form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" value="<?= $user->email?>">
    </div>

    <div class=" form-group">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" value="<?= $user->password?>">
    </div>


    <div class=" form-group">
        <input type="submit" value="Enviar">
    </div>
</form>