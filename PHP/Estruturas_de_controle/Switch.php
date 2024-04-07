<!-- Switch
 A declaração switch é similar a varias declarações If no mesmo bloco
 Dentro do switch escolhemos qual variavel queremos utilizar, e as condicionais após o case
 Tambem temos o default que é ativado se nenhuma das cases foi validade com true
 (O switch faz uma comparação de equalidade fraca "==" NÂO de equalidade estrita "===") -->

 <?php 
    $id;
    $id = 08;

    switch ($id) {
        case 10:
            echo "Id value is 10";
            break;

        case $id < 10:
            echo "Id value is < 10";
            break;

        default:
            echo "Id value is > 10";
    }
 ?>

 <?php 
    $cerveja;

    switch ($cerveja) {
        case 'brahma';
        case 'amstel';
        case 'heineken';
        case 'budheiser';
            echo 'Boa escolha!';
            break;

        default;
            echo "Faça uma escolha melhor...";
            break;
    }
 ?>

 <?php 
    $names = ['Matheus', 'Jhones', 'Kleber'];

    switch ($names):
        case 'Matheus';
            echo "Good name bro";
            break;

        case !('Matheus');
            echo "Bad name bro...";

        default;
            break;

    endswitch;
 ?>


<?php 
    $tipo = 'texto';

    switch($tipo) {
        case 'video':
            echo "É um vídeo";
            break;

        case 'foto':
            echo "É uma foto";
            break;

        case 'texto':
            echo "É um texto";
            break;

        default:
            echo "Nenhuma das opções foi validada";
    }
?>
<!---------------------------------------------------------------------------------------------------------------------->
