<?php 

const BASE_DIR = "http://localhost/PHP/PHP_NEW/public/";

function dd($dump) {
    var_dump($dump);

    die();
}

function request() {
    $request = $_SERVER['REQUEST_METHOD'];

    if($request === 'POST') {
        return $_POST;

    }

    return $_GET;
}

function redirect(string $page) {
    header("Location: " . BASE_DIR . "?page=" .$page);
    exit();
}

