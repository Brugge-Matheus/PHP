<?php 
require 'Mysql_config.php';
require 'dao/ClienteDAOMysql.php';

$clienteDao = new ClienteDAOMysql($pdo);
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    if($id) {
        $clienteDao->delete($id);
    }
    
header('Location: index.php');
exit;
    