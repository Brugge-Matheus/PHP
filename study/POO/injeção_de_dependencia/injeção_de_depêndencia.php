<?php

// Example
class Basic
{
    public function account(int $a, int $b): int
    {
        return $a + $b;
    }
}

class Advanced
{
    public function account(int $a, int $b): int
    {
        return $a * $b;
    }
}

class Math
{
    private $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function account(int $a, int $b): int
    {
        return $this->type->account($a, $b);
    }
}

$counts = new Math(new Advanced());

//echo $counts->account(5, 5);





// Other Example

class Database
{

}