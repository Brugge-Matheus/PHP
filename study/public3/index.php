<?php 

    function routes() {
        return [
            'POST' => [
                '/' => 'Home@action',
                '/login' => 'Login@action'
            ],

            'GET' => [
                '/' => 'Home@index',
                '/login' => 'Login@index'
            ]   
        ];
    }

    function methodPost() {
        return 'POST';
    }

    function methodGet() {
        return 'GET';
    }

    $route = routes();
    $POST = methodPost();
    $GET = methodGet();

    echo "<pre>";
    var_dump($route[$GET]);
    echo "</pre>";
?>