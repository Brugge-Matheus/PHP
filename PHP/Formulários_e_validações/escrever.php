<?php 

$text = file_put_contents('arquivo_teste', 'Olá, mundo');

if($text == true) {
    echo "A criação deu certo!";
} else {
    echo "A criação deu errado!";
}
