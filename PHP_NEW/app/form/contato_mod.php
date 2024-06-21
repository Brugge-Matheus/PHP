<?php 
require '../../bootstrap.php';

if(isEmpty()) {
    flash('message', 'Você não preencheu todos os campos', 'danger');

    redirect('contato');
}

$validate = validate([
    'name' => 'str',
    'email' => 'mail',
    'subject' => 'str',
    'text' => 'str'
]);

$data = array(
    'quem' => $validate->email,
    'para' => 'tese@gmail.com',
    'assunto' => $validate->subject,
    'mensagem' => $validate->text
);

send($data);
if(send($data)) {
    flash('message', 'Dados enviados com sucesso', 'sucess');
    redirect('contato');

} else {
    flash('message', 'Algo deu errado ao enviar o e-mail', 'alert');

    redirect('contato');
}
