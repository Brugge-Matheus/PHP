<?php

class Adress
{
    public function __construct(
        public readonly string $address,
        public readonly int    $number
    )
    {

    }
}

class User
{
    private Adress $address;

    public function setAddress(Adress $address): void
    {
        $this->address = $address;
    }

    public function getAddress(): Adress
    {
        return $this->address;
    }
}

$address = new Adress('Rua Diomira Moro Zen', 22);

$user = new User();
$user->setAddress($address);

var_dump($user->getAddress());
