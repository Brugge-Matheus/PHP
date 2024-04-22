<?php 
interface BasicMath {
    public function sum($a, $b);
}

class BasicSum implements BasicMath {
    public function sum($a, $b) {
        return $a + $b;
    }
}

class ComplexeSum implements BasicMath{
    public function sum($a, $b) {
        $res = $a;
        for($c = 0;$c < $b; $c++):
            $res++;

        endfor;
        return $res;
    }
}

class Math {
    private $basic;

    public function __construct(BasicMath $basic) {
        $this->basic = $basic;
    }

    public function sum($a, $b) {
        return $this->basic->sum($a, $b);
    }
}

$mat = new Math(new BasicSum());
echo $mat->sum(10,20);

