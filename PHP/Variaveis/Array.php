<!-- Array
Se trata de uma variável contendo diversos valores dentro dela
podendo ainda tem arrays dentro de arrays -->

<?php 
    // $ingrediente = array('Farinha', 'Trigo', 'Ovo', 'Fermento');
    // $preparo = ['Misturar', 'Mexer', 'Assar'];
    // echo $ingrediente[0];
?>

 <!---------------------------------------------------------------------------------------------------------------------->

<!-- Array Spread -->

<?php 
    // $ingrediente2 = array('Kleber',...$ingrediente, 'Corante azul');
    // $total = array(...$ingrediente, $ingrediente2);
    // echo $ingrediente2[0] . "\n" .  $ingrediente2[1];
?>


<!-- Array Associativo -->


<?php 
    $caracteristicas = array(
        'nome' => 'Jah',
        'idade' => 18,
        'sexo' => 'masculino',
        'atributos' => array(
            'forca' => 5,
            'destreza' => 1
        ),
        'cor' => 'Preto',
        'mana' => 920
    );

    echo "Meu nome é " . $caracteristicas['nome'] . "<br>";
    echo "Minha idade é " . $caracteristicas['idade'] . "<br>";
    echo "Meus atributos são " . $caracteristicas['atributos']['forca'] . " de força <br>";
    echo "Tambem tenho " . $caracteristicas['atributos']['destreza'] . " de destreza <br>";
?>