<?php 
include '../config.php';

if($_SERVER['REQUEST_METHOD'] == 'PUT') {
   parse_str(file_get_contents('php://input'), $input);

    // $id = (!empty($input['id'])) ? $input['id'] : null;
    // $title = (!empty($input['title'])) ? $input['title'] : null;
    // $body = (!empty($input['body'])) ? $input['body'] : null;

    $id =  $input['id'] ?? null;
    $title = $input['title'] ?? null;
    $body = $input['body'] ?? null;

    $id = filter_var($id);
    $title = filter_var($title);
    $body = filter_var($body);

    if($id && $title && $body) {

        $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $sql = $pdo->prepare("UPDATE notes SET title = :title, body = :body WHERE id = :id;");
            $sql->bindValue(':id', $id);
            $sql->bindValue(':title', $title);
            $sql->bindValue(':body', $body);
            $sql->execute();

            $array['result'] = [
                'id' => $id,
                'title' => $title,
                'body' => $body
            ];

        } else {
            $array['error'] = 'Id solicitado nao existe';
        }

    } else {
        $array['error'] = 'Dados nao enviados';
    }
    
    
} else {
    $array['error'] = 'Metodo ' .$_SERVER['REQUEST_METHOD'] . ' invalido (somente PUT)';
}


include '../return.php';