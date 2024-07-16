<?php

namespace app\core;

class Router
{
    public static function run()
    {
        $routerRegistered = new RouterFilter;
        $router = $routerRegistered->get();

        dd($router);
    }
}