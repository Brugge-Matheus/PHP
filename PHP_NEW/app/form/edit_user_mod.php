<?php
require '../../bootstrap.php';

$id = filter_input(INPUT_POST, 'id' ,FILTER_SANITIZE_NUMBER_INT);

// if(isEmpty()) {
//     flash('message', 'Você não preencheu todos os campos', 'danger');

//     redirect("edit_user&id={$id}");
// }

$validate = validate([
    'name' => 'str',
    'lastName' => 'str',
    'email' => 'mail',
    'password' => 'str'
]);

$atualizado = update('users', $validate, ['id', $id]);

if($atualizado) {
    flash('message', 'Dados atualizados com sucesso', 'sucess');
    redirect('home');
}

flash('message', 'Erro ao atualizar os dados', 'danger');
redirect("edit_user&id={$id}");



