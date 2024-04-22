<?php 

class Calculator {
    public $value;

    public function __construct(int $value = 0) {
        $this->value = $value;
    }

    public function add($a) {
        $this->value += $a;
    }

    public function sub($a) {
        $this->value -= $a;
    }

    public function multiply($a) {
        $this->value *= $a;
    }

    public function divide($a) {
        $this->value /= $a;
    }

    public function total() {
        echo $this->value;
    }

    public function clear() {
        return $this->value = 0;
    }
}



