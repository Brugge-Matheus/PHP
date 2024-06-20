<?php 
require '../../bootstrap.php';

if(isEmpty()) {
    flash('message', 'Você não preencheu todos os campos', 'danger');

    header("location:/PHP/PHP_NEW/public/?page=contato");
    exit();
}

$validate = validate([
    'name' => 'str',
    'email' => 'mail',
    'subject' => 'str',
    'text' => 'str'
]);

flash('message', 'Dados enviados com sucesso', 'sucess');
header("location:/PHP/PHP_NEW/public/?page=contato");
exit();

