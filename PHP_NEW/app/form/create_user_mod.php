<?php
require '../../bootstrap.php';

if(isEmpty()) {
    flash('message', 'Você não preencheu todos os campos', 'danger');

    redirect('create_user');
}

$validate = validate([
    'name' => 'str',
    'lastName' => 'str',
    'email' => 'mail',
    'password' => 'str'
]);

$cadastro = create('users', $validate);

if($cadastro) {
    flash('message', 'Cadastrado com sucesso', 'sucess');
    redirect('home');
}

flash('message', 'Erro as cadastrar', 'danger');
redirect('create_user');



