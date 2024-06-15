<?php

// Callbacks se tratam de uma função chamada como parametro em outra função

function defineName($name) {
    return $name;
}

function callName($calback) {
    if(is_callable($calback)) {

        return $calback('Matheus Brugge Milczwski');

    } else {
        return "<< Error >>";
    }
}

$apresentation = 'Hello, my name is ' . callName('defineName') . "\n";


// Call user functions em funções normais

function apresentation($name, $text) {
    return "Hello, i'am $name, $text";
}

echo call_user_func('apresentation', 'Kleber', 'or go or fly') . "\n";


// Call user function usando classes

class Person {
    public function nameCall($args) {
        return "Hello, my name is $args";
    }
}

$person = new Person;

echo call_user_func([$person, 'nameCall'], 'Ou vai, ou voa') . "\n";

// Usando metodo estatico, não precisa instanciar a classe, somente passar a classe
class User {
    public static function nameCall($args) {
        return "Hello, my name is $args";
    }
}

echo call_user_func(['User', 'nameCall'], 'Ou voa, ou vai');