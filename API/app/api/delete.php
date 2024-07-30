<?php

require '../../config.php';

$requestMethod = strtolower($_SERVER["REQUEST_METHOD"]);

if ($requestMethod === 'delete') {

    parse_str(file_get_contents('php://input'), $input);

    $id = isset($input['id']) ? filter_var($input['id'], FILTER_SANITIZE_NUMBER_INT) : null;

    if (!empty($id)) {
        $pdo = connect();
        $result = $pdo->query("SELECT * FROM notes where id = {$id}");

       if($result->rowCount() > 0){
           $query = $pdo->query("DELETE FROM notes WHERE id = $id");
       }

        $array['result'] = 'Deletado com sucesso';
        $array['response'] = 200;


    } else {
        $array['response'] = 'Parametros inválidos ou inexistentes (id)';

    }

} else {
    $array['response'] = 'Método não permitido, somente (DELETE)';

}


echo json_encode($array);
exit();


