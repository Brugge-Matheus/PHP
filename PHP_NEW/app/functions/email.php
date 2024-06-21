<?php


function send(array $data) {
    $email = new PHPMailer\PHPMailer\PHPMailer;;
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure = 'plain';
    $email->isSMTP();
    $email->Host = 'sandbox.smtp.mailtrap.io';
    $email->Port = 465;
    $email->SMTPAuth =  true;
    $email->Username = 'a08a05e136cebc';
    $email->Password = '760ecf19cffdc5';
    $email->isHTML(true);
    $email->setFrom('contato@gmail.com');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Para ver esse e-mail tenha certeza de estar vendo um programa que aceita HTML';
    $email->msgHTML($data['mensagem']);

    return $email->send();
}