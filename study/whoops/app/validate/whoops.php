<?php
require 'dotenv.php';

if ($_ENV['ENV'] == 'development') {
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();

    return;
}

var_dump("Something get wrong");
die();