<?php

// CONTROLAR COMUNICAÇÕES COM TRANSAÇÕES

/*
Vê como é simples controlar eventuais erros num processo
de comunicação.
Adicionei um beginTransaction() antes de iniciar as comunicações.
Depois as comunicações.
No final, não existindo nenhum erro, surge o commit()
O commit() vai consolidar na base de dados todas as comunicações definidas.

No caso de acontecer um erro, como é o caso, as 3 primeiras inserções
não vão ser aplicadas, porque vai ser disparada a exceção e, dentro do
bloco do catch, temos um rollBack().

O rollBack() indica que tudo o que foi inserido com sucesso, dentro da
transação, deve ser revertido.
*/

// dados de ligação
$database = 'udemy_loja_online';
$username = 'web_loja_online';
$password = '1233';

// ligação
$connect = new PDO("mysql:host=localhost;dbname=$database", $username, $password);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

try {
    $connect->beginTransaction();
    $connect->exec("INSERT INTO usuarios VALUES(0,'user1','111')");
    $connect->exec("INSERT INTO usuarios VALUES(0,'user2','222')");
    $connect->exec("INSERT INTO usuarios VALUES(0,'user3','333')");
    // erro propositado
    $connect->exec("INSERT INTO usuarios VALUES(0,'user4','444')");
    $connect->commit();
} catch (PDOException $err) {

    $connect->rollBack();
    echo "Failed " . $err->getMessage();
}