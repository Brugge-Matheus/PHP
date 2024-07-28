<?php

// OBTER DADOS EM DIFERENTES FORMATOS

/*
Uma nota final sobre esta matéria.
Existem outras formas de indicar ao PDO como deve devolver
os resultados.
*/

$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = 'c2hifo8akeka5iriKOT4X2N2NIG3jE';

$conn = new PDO("mysql:host=localhost;dbname=$database", $username, $password);
$query = $conn->query("SELECT * FROM produtos");
$query->setFetchMode(PDO::FETCH_ASSOC);

$ligacao = null;

while ($linha = $resultados->fetch()) {
    echo $linha['produto'] . ' - Preço: ' . $linha['preco_unidade'] . '<br>';
}