<?php

namespace app\routes;

class Routes
{
    public function get()
    {
        return [
            'get' => [
                '/' => 'HomeController@index',
                '/user/[0-9]+' => 'HomeController@index',
            ],

            'post' => []
        ];
    }
}
