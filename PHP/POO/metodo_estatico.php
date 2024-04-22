<?php 
// Se trata de propriedades ou funções que são independentes dentro de uma classe e podem ser acessadas sem criar um objeto

class Math {

    public static string $name = 'Matheus';

    public static function sum($n1, $n2) {
        return $n1 + $n2;
    }
}

echo Math::sum(10, 30);
echo "<br>" .Math::$name;