<?php 
include '../config.php';

if($_SERVER['REQUEST_METHOD'] == 'DELETE') {
   
    parse_str(file_get_contents('php://input'), $input);

    $id = $input['id'] ?? null;

    if($id) {
        $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id;");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $sql = $pdo->prepare("DELETE FROM notes WHERE id = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();

            $array['result'] = "Post com id $id foi apagado com sucesso";

        } else {
            $array['error'] = 'Id solicitado nao existe';
        }

    } else {
        $array['error'] = 'Dados não preenchidos corretamente';
    }
    
    
    
} else {
    $array['error'] = 'Metodo ' .$_SERVER['REQUEST_METHOD'] . ' invalido (somente DELETE)';
}


include '../return.php';