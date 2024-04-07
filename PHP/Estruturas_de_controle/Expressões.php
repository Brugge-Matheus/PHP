<!-- (PHP 8)
Match
A expressão match ramifica diversas avaliações a partir de um item assim como o switch case
Porem, diferentemente do switch o match faz uma comparação de equalidade estrita "===" -->

<?php 
    $fruits = array('maça', 'banana', 'kiwi', 'melancia');

    $result = match ($fruits) {
        'maça' => 'This fruit is maça',
        'banana' => 'This fruit is bananana',
        'kiwi' => 'This fruit is kiwi',
        'melancia' => 'This fruit is melancia'
    };

    echo $result;
?>

<?php 
    $numbers = array(100, 91, 80, 71, 60, 51, 40, 31, 20, 11);

    $res = match($numbers) {
        !100, !80, !60, !40, !20 => 'Este número é ímpar',
        !91, !71, !51, !31, !11 => 'Este número é par'  
    };

    echo $res;
?>

<?php 
    $age = 50;

    $ageVerify = match(true) {
        $age >= 50 => 'idoso',
        $age >= 25 => 'adulto',
        $age <= 18 && $age > 12 => 'Adolescente',
        default => 'Criança'
    };

    echo $ageVerify; 
?>

<?php 
    $apresentation = 'Hello my name is Matheus';

    $resultApresentation = match($apresentation) {
        str_contains($apresentation, 'Hello') || str_contains($apresentation, 'name') => 'EN',
        str_contains($apresentation, 'Olá') || str_contains($apresentation, 'nome') => 'PT-BR',
        default => 'Nothing language detected'
    };

    echo $resultApresentation;
?>

<!---------------------------------------------------------------------------------------------------------------------->

Declare
 ...


<!---------------------------------------------------------------------------------------------------------------------->


<!-- Include
 A expressão include inclui e avalia o arquivo informado
 Tem como principal objetivo trazer as propriedades definidas em outros arquivos para o arquivo atual permitindo a sua utilização
 Se o arquivo ja tiver sido incluido ele tentara incluir novamente possibilitando o retorno de erros -->

 <!-- Suponha que a primeira abertura de tags php seja outro arquivo -->

 <?php 
    // nome arquivo: variaveis.php

    $color = 'red';
    $fruit = 'maça';
 ?>

 <?php 
    include 'variaveis.php';

    $color === 'red' && $fruit === 'maça' ? "Aplle's fruit and color is red" : "not identify!";
 ?>

<!---------------------------------------------------------------------------------------------------------------------->

<!-- Include_once
 Tem quase o mesmo exato funcionamento do include com a única diferença que se o arquivo ja tiver sido incluido ele não
 tentara incluir novamente -->

<!-- Suponha que a primeira abertura de tags php seja outro arquivo -->

 <?php 
    // nome arquivo: variaveis.php

    $color = 'red';
    $fruit = 'maça';
 ?>

 <?php 
    include_once ('variaveis.php');

    $color === 'red' && $fruit === 'maça' ? "Aplle's fruit and color is red" : "not identify!";
 ?>

<!---------------------------------------------------------------------------------------------------------------------->

Goto
...