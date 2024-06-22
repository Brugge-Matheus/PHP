<?php
require '../../bootstrap.php';

$id = filter_input(INPUT_GET, 'id' ,FILTER_SANITIZE_NUMBER_INT);

$delete = delete('users', ['id', $id]);

if($delete) {
    flash('message', 'Dados deletados com sucesso', 'sucess');
    redirect('home');
}

flash('message', 'Erro ao deletar os dados', 'danger');
redirect("home");



