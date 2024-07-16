<?php

function foo()
{
    throw new Exception("Error foo", 1);
}

function foo2()
{
    try {
        foo();
    } catch (Exception $e) {
        var_dump($e->getMessage());
    }
}