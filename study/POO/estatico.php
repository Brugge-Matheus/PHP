<?php

class Routes
{
    private static $dir = __DIR__;

    public static function get(string $route)
    {
        return self::$dir . DIRECTORY_SEPARATOR . $route;

    }

    public static function post(string $route)
    {
        return self::$dir . DIRECTORY_SEPARATOR . $route;

    }
}

echo Routes::get('public') . PHP_EOL;
echo Routes::post('public/contact/send') . PHP_EOL;