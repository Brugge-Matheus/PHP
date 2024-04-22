<?php

interface Forma {
    public function getTipo();
    public function getArea();
}

class Quadrado implements Forma {
    private $largura;
    private $altura;

    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function getTipo() {
        return 'Quadrado';
    }

    public function getArea() {
        return ($this->largura * $this->altura);
    }
}

class Circulo implements Forma {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function getTipo() {
        return 'Círculo';
    }

    public function getArea() {
        return pi() * ($this->raio ** 2);
    }
}

$quadrado = new Quadrado(5,5);
$circulo = new Circulo(7);


$objects = array(
    $quadrado,
    $circulo
);

foreach($objects as $values) {
    echo "Area ".$values->getTipo()." : ".number_format($values->getArea(), 1, ",", ".") ."<br>\n";
}