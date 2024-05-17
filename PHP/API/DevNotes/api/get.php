<?php 
include '../config.php';

if($_SERVER['REQUEST_METHOD'] == 'GET') {
   
    $id = filter_input(INPUT_GET, 'id');

    if($id) {
        $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $data = $sql->fetch(PDO::FETCH_ASSOC);

            $array['result'] = [
                'id' => $data['id'],
                'title' => $data['title'],
                'body' => $data['body']
            ];


        } else {
            $array['error'] = 'Nao foi identificado o ID enviado';
        } 

    } else {
        $array['error'] = 'ID nao enviado';
    }
    
} else {
    $array['error'] = 'Metodo ' .$_SERVER['REQUEST_METHOD'] . ' invalido (somente GET)';
}


include '../return.php';