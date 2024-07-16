<?php

class Adress
{
    public function __construct(
        public readonly string $adress,
        public readonly string $number
    ) {
    }
}

class User
{
    private Adress $adress;

    public function addAdress(Adress $adress)
    {
        $this->adress = $adress;
    }

    public function getAdress()
    {
        return $this->adress;
    }
}

$user = new User;
$user->addAdress(new Adress('Diomira Moro Zen', 222));
var_dump($user->getAdress());