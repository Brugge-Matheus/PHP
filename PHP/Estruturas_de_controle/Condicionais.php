 <!-- If Else
 Representam o "Se" e o "Se Não"
 Vai sempre retornar um valor boolean, se a expressão for verdadeira retorna "true", se for falsa retorna "false" -->


<?php
    // Analisa certas condições de uma varivel e caso seja verdadeira ela recebe 500 caso seja falsa recebe 1500
    $num1;
    $num2 = 100;

    if ($num2 > 50 && $num2 < 150 || $num2 === 200) {
        $num1 = 500;
        echo "A variavel recebe o valor de $num1"; 

    } else {
        $num1 = 1500;
        echo "A variavel recebe o valor de $num1";
    }

?>

<!---------------------------------------------------------------------------------------------------------------------->

<!-- Else If
 Possibilita que existam diversas validações na mesma estrutura de controle
 Possui exatamente a mesma formatação do If e não tem limitação de quantidade -->

 <?php 
    $a = ["Matheus", "leticia", "Chico", "Gato", "Cachorro"];
    $b;
    $c = [10, 100, 10000];

    if ($a[0] === "Matheus" && $a[1] === "Leticia") {
        echo "First validation is valid";

    } else if ($c[1] >= (10 * 10) || $c[2] >= (20 ** 2)) {
        echo "Second validation is valid";

    } else {
        echo "Always validations is incorrect";
    }
 ?>

 <!---------------------------------------------------------------------------------------------------------------------->

<!-- Sintaxe alternativa para estruturas de controle -->

<!-- ? :
 Se a estrutura de controle possui somente um If Else é possível resumir em apenas uma linha a condicional desejada
 Basta depois da condicional utilizar ? para o If e : para o else -->

 <?php 
    $nome = ["Matheus", "Leticia"];
    $emprego = ["Programador", "Psicóloga"];

    $nome[0] === "Matheus" && $emprego[0] === "Programador" ? "Informações  corretas" : "nformações incorretas";
 ?>



<!-- If ():
 Assim como em todas as estruturas de controle ao inves da chave é possível utilizar os dois pontos após cada estrutura de controle
  e finalizar a estrutura com endif -->

 <?php 
    $n1 = 5.75;
    $n2 = 1933;

    if ($n1 < 6 && $n2 > 1900):
        echo "Firts validation is correct";

    else if ($n1 + 100 > (5 * 5)):
        echo "Second validation is correct";

    else:
        echo "Nothing validations is correct...";

    endif;
 ?>

 <!---------------------------------------------------------------------------------------------------------------------->

<?php if (true): ?>
Se quiser sim mano.
<?php endif; ?>

