<?php 
include '../config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
   $title = filter_input(INPUT_POST, 'title');
   $body = filter_input(INPUT_POST, 'body');

   if($title && $body) {
    $sql = $pdo->prepare("INSERT INTO notes VALUES (DEFAULT, :title, :body);");
    $sql->bindValue(':title', $title);
    $sql->bindValue(':body', $body);
    $sql->execute();

    $id = $pdo->lastInsertId();

    $array['result'] = [
        'id' => $id,
        'title' => $title,
        'body' => $body
    ];

   } else {
    $array['error'] = 'Campos nao enviados';
   }
    
    
} else {
    $array['error'] = 'Metodo ' .$_SERVER['REQUEST_METHOD'] . ' invalido (somente POST)';
}


include '../return.php';