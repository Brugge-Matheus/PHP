<?php

function connect() {
    $database = 'web_site';
    $host = 'localhost';
    $user = 'root';

    $pdo = new \PDO("mysql:dbname=$database; host=$host", "$user", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    return $pdo;
}

function create(string $table, $fields) {

    if(!is_array($fields)) {
    $fields = (array) $fields;
    }

    $columns = implode(', ', array_keys($fields));
    $placeholders = ':' . implode(', :', array_keys($fields));

    $sql = "INSERT INTO {$table} (id, {$columns}) VALUES (DEFAULT, {$placeholders});";

    $pdo = connect();
    $query = $pdo->prepare($sql);

    foreach($fields as $key => $value) {
        $query->bindValue(":$key", $value);
    }

    return $query->execute();
}

function listAll($table) {
    $pdo = connect();

    $sql = "SELECT * FROM {$table}";
    $list = $pdo->query($sql);

    $list->execute();

    return $list->fetchAll(); 
}

function find($table, $field, $value) {
    $value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);

    $pdo = connect();
    
    $query = "SELECT * FROM {$table} WHERE {$field} = :{$field};";

    $find = $pdo->prepare($query);
    $find->bindValue("$field", $value);

    $find->execute();

    return $find->fetch();
}

function update() {

}

function delete() {

}