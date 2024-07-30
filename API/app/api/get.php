<?php

require '../../config.php';

$requestMethod = strtolower($_SERVER["REQUEST_METHOD"]);

if ($requestMethod === 'get') {

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    if (!empty($id)) {
        $pdo = connect();

        $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id");
        $sql->execute(['id' => $id]);

        if ($sql->rowCount() > 0) {
            $result = $sql->fetch();

            $array['result'] = $result;
            $array['response'] = 200;

        } else {
            $array['response'] = 'ID inválido ou inexistente';
        }

    } else {
        $array['response'] = 'ID inexistente';
    }


} else {
    $array['response'] = 'Método não permitido, somente (GET)';

}


echo json_encode($array, JSON_THROW_ON_ERROR);
exit();

