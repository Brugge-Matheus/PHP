<?php

require '../../config.php';

$requestMethod = strtolower($_SERVER["REQUEST_METHOD"]);

if ($requestMethod === 'put') {

    parse_str(file_get_contents('php://input'), $input);

    $id = isset($input['id']) ? filter_var($input['id']) : null;
    $tittle = isset($input['tittle']) ? filter_var($input['tittle']) : null;
    $body = isset($input['body']) ? filter_var($input['body']) : null;


    if (!empty($id) && !empty($tittle) && !empty($body)) {
        $pdo = connect();

        $sql = $pdo->prepare("UPDATE notes SET tittle = :tittle, body = :body WHERE id = :id");
        $result = [
            'id' => $id,
            'tittle' => $tittle,
            'body' => $body
        ];

        $sql->execute($result);

        $array['result'] = $result;
        $array['response'] = 200;


    } else {
        $array['response'] = 'Parametros inválidos ou inexistentes (id, tittle e body)';

    }

} else {
    $array['response'] = 'Método não permitido, somente (PUT)';

}


echo json_encode($array);
exit();


