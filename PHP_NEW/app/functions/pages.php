<?php

function load() {
    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);

        $page = empty($page) ? "pages/home.php"   : "pages/{$page}.php";
    
        if(!file_exists($page)){
        $page = 'pages/erro.php';
    }

        return $page;
    }

    die();
}