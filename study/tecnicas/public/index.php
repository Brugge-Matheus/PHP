<?php

declare(strict_types=1); // Seta os tipos estritos

require '../app/classes/User.php';

if (class_exists($class = '\app\classes\User')) {
    $user = new $class;
    $user->call();
}

function sum(int $n1, int $n2)
{
    return $n1 + $n2;
}

var_dump(sum(5, 10));