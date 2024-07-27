<?php

interface Form
{
    public function getType();

    public function getArea();
}

class Quadrado implements Form
{
    private int $width;
    private int $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getType(): string
    {
        return self::class;

    }

    public function getArea(): int
    {
        return ($this->width * $this->height);

    }
}

class Circulo implements Form
{
    private int $raio;

    public function __construct(int $diameter)
    {
        $this->raio = $diameter;
    }

    public function getType(): string
    {
        return self::class;

    }

    public function getArea(): int
    {
        return M_PI * ($this->raio * $this->raio);
    }

}

$quadrado = new Quadrado(10, 15);
$circulo = new Circulo(7);

$objetos = [
    $quadrado,
    $circulo
];

foreach ($objetos as $objeto) {
    $type = $objeto->getType();
    $area = $objeto->getArea();

    echo "Area $type: $area" . PHP_EOL;
}