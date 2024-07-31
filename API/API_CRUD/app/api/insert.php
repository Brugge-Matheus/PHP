<?php

require '../../config.php';

$requestMethod = strtolower($_SERVER["REQUEST_METHOD"]);

if ($requestMethod === 'post') {

    $tittle = filter_input(INPUT_POST, 'tittle', FILTER_SANITIZE_SPECIAL_CHARS);
    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_SPECIAL_CHARS);

    if (!empty($tittle) && !empty($body)) {
        $pdo = connect();

        $sql = $pdo->prepare("INSERT INTO notes (tittle, body) VALUES (:tittle, :body)");
        $sql->execute([
            'tittle' => $tittle,
            'body' => $body
        ]);

        $id = $pdo->lastInsertId();
        $result = $pdo->query("SELECT * FROM notes where id = {$id}")->fetch();

        $array['result'] = $result;
        $array['response'] = 200;

    } else {
        $array['response'] = 'Parametros inválidos ou inexistentes (tittle e body)';

    }

} else {
    $array['response'] = 'Método não permitido, somente (POST)';

}


echo json_encode($array, JSON_THROW_ON_ERROR);
exit();

