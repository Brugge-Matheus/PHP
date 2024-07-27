<?php

function getStatus(int $isAdmin)
{
    // Com operador ternario
    $message = ($isAdmin) ? 'is admin' : 'not is admin';

    // Sem operador ternario
    if ($isAdmin) {
        $message = 'Is admin';
    } else {
        $message = 'not is admin';
    }
    return $message;
}


class Person
{
    public function getInfo()
    {
        return 'infos...';
    }
}


var_dump(getStatus(10));

// Sem instancia direta de um metodo
$person = new Person;
var_dump($person->getInfo());

// com instancia direta de um metodo
var_dump((new Person)->getInfo());