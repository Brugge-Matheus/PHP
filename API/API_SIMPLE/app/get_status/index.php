<?php
//Definição do header da requisição
header("Content-type: application/json; charset=ytf-8");

//Criando a estrutura do json
$array['status'] = 'Animals API is running!';
$array['time_response'] = time();

//Tranformando e formatando o json
echo json_encode($array, JSON_PRETTY_PRINT);