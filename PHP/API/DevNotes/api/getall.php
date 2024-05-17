<?php 
include '../config.php';

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $sql = $pdo->prepare("SELECT * FROM notes");
    $sql->execute();

    if($sql->rowCount() > 0) {
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach($data as $item) {
            $array['result'][] = [
                'id' => $item['id'],
                'title' => $item['title']
            ];
        }

    }
    
} else {
    $array['error'] = 'Metodo ' .$_SERVER['REQUEST_METHOD'] . ' invalido (somente GET)';
}


include '../return.php';