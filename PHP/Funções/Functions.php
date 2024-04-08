<!-- Function
 Funções são blocos de códigos criados pelo usuario que ficam guardados e definem alguma ação
 Dentro das funções é possível definir parâmetros, que são basicamente propriedades que são utilizadas dentro da função,
  sendo que o valor dessas proprieades podem ser ou não da escolha do usuario. -->

<?php 
    function foo($n1, $n2) {
        $result = ($n1 + $n2);
        echo "Result is $result<br><br>";
    }

    function loop($n) {
        for($i = $n; $i <= 10; $i++) {
            echo "$i <br>";

            if($i === 10) {
                echo "<hr>";
            }
        }
    }


    foo(10, 100);
    foo(20, 220);
    
    loop(0);
    loop(5);
