<?php
require '../../config.php';

$requestMethod = strtolower($_SERVER["REQUEST_METHOD"]);

if ($requestMethod === 'get') {
    $pdo = connect();

    $query = $pdo->query('SELECT * FROM notes');

    if ($query->rowCount() > 0) {
        $result = $query->fetchAll();

        $array['result'] = $result;
        $array['response'] = 200;
    }

} else {
    $array['response'] = 'Método não permitido, somente (GET)';

}


echo json_encode($array, JSON_THROW_ON_ERROR);
exit();

