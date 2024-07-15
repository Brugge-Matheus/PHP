<?php

#[Attribute]
class Attr
{
    public function __construct(int $value)
    {
        echo 'Recebendo valor ' . $value . PHP_EOL;
    }
}

#[Attr]
class Entidade
{
}