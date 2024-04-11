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

            if($i == 10) {
                echo "<hr>";
            }
        }
    }
    foo(10, 100);
    loop(5);

    
    function sum($num1, $num2, $num3 = 0) {
        echo "Result of sum: " . ($num1 + $num2 + $num3);
    }

    sum(10, 10);


    // Argumentos de função

    // Valor padrão
   
    function makecoffee($type = "cappuccino") {
        return "Fazendo uma xícara de café $type.\n";

    }

    echo makecoffee();
    echo makecoffee("espresso");


    //Tipos não escalares como valores padrões

    function fazercafe($tipos = array("cappuccino"), $cafeteira = NULL) {

        $dispositivo = is_null($cafeteira) ? "mãos" : $cafeteira;
        return "Fazendo uma xícara de ".join(", ", $tipos)." com $dispositivo.\n";
        }

    echo fazercafe();
    echo fazercafe(array("cappuccino", "lavazza"), "chaleira");



    // Definição de tipagem em parâmetros

    function newsum(int $item1, int $item2) {
        echo "<br><br>";
        $retorno = "$item1 + $item2";
        echo $retorno;
    }

    newsum(10, 20);

    
    // Argumentos por referência
    function NovaSoma($n1, $n2, &$tot) {
        echo "<br><br>";
        $tot = $n1 + $n2;
        echo $tot;
    }

    $soma = 0;
    
    NovaSoma(5, 5, $soma);




    // Funções anônimas

    function pct(int $valuePct, $valueNum) {
        $calcPct = ($valuePct * $valueNum) / 100;
        // echo "$valuePct% de $valueNum é $calcPct";
        return $calcPct;
    }

    $sum = fn($n1, $n2) => $n1 + $n2;
        
        
    

    pct(10, 100);
    $sum(10, pct(20, 100));
    

    
    

    




