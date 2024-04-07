<!-- While
 De forma geral os laços de repetição se tratam de uma condicional
  que enquanto for verdadeira ele fara uma ação repetidamente até que não seja mais verdadeira.
 Importante ressaltar que caso a condicional seja falsa a ação não sera executada nem uma única vez -->

 <?php 
    $i = 0;

    while ($i <= 10) {
        $i++;
    }
 ?>


<?php 
    while ($i <= 10):
        $i++;

    endwhile;
?>

<!---------------------------------------------------------------------------------------------------------------------->

<!-- do While
 A principal diferença para o While é que no do While a validação é feita somente ao final da execução, ou seja
  diferente do While no do While o código é executado no mínimo uma vez -->

<?php 
    do {
        $i++;

    } while ($i <= 10);
?>

<!---------------------------------------------------------------------------------------------------------------------->

<!-- For
 Se trata de um laço de repetição que possui três expressões sendo:
 1 - Uma expressão que é executada incondicionalmente no inicio do laço
 2 - A condicional que retorna um valor boolean e define se o laço vai continuar
 3 - A ação que sera executada caso a condicional seja aprovada -->

 <?php 
    for($i = 0; $i <= 40; $i++) {
        echo $i;
    }
 ?>


<?php 
    $names = ["Kleber", "Jhones", "Olivia", "Ramon"];

    for($c = 0; $c <= count($names); $c++) {
        echo $c;
    }
?>

<?php 
    for($num = 0; $num <= 23; $num += 1):
        echo "N: $num";

    endfor;
?>


<?php 
    for($n; $n <= 10; $n++):
        echo $n;
    endfor;
?>

<!---------------------------------------------------------------------------------------------------------------------->

<!-- ForEach
 Se trata de uma maneira prática e dinâmica de iterar sobre os itens de um array ou objeto
 Possui duas sintaxes

1º - No primeiro o $array é atribuido a $value

 foreach ($array as $value) {
    statement
 } -->

 <?php 
    $numbers = array(10, 20, 30, 40, 50);

    foreach($array as $value){
        $value = $value * 2;
        echo $value;
    }
 ?>


<!-- 2º No segundo funciona da mesma forma porem o $key representa o indice do item

 foreach ($array as $key => $value) {
    statment
} -->

<?php 
    foreach ($array as $key => $value) {
        echo "$key => $value";
    }
?>


<?php 
    foreach ($array as $value):
        echo "$array and $value";
    endforeach;
?>

<!---------------------------------------------------------------------------------------------------------------------->

<!-- Break
 Serve para finalizar estruturas de controle
 O break aceita um argumento opcional que diz quantas estrutuas deve finalizar, o padrão é 1 -->


<?php 
    $arr = array("one", "two", "three", "four", "five");

    foreach($arr as $value) {
        if ($value === "four") {
            break;
        }

        echo "value is $value";
    }
?>

<!-- Usinng the option argument -->

<?php 
    $newArray = array("first", "second", "stop", "prelast", "last");
    while ($newArray <= count($newArray)) {
        if($newArray[2] === "stop") {
            break 1;

        } else if($newArray === "prelast") {
            break 2;
        }
    }
?>

<!---------------------------------------------------------------------------------------------------------------------->


<!-- Continue
 É utilizado para pular o restante da iteração atual e continuar a execução a partir da próxima validação -->

<?php 
    $stack = array('zero', 'um', 'dois', 'tres', 'quatro', 'cinco', 'seis');

    foreach ($stack as $key => $val) {
        if (!($key % 2)) {
            continue;
        }

        echo $val . "\n";
    } 

?>