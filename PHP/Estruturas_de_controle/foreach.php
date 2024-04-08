<?php 
    $ing = array('farinha', 'ovo', 'leite', 'fermento');

    foreach($ing as $value) {
        echo "$value<br>";
    }

    echo "<hr>";
    print_r($ing);
    echo "<hr>";

    foreach($ing as $key => $value) {
        echo "$value, $key <br>";
    }

    $line = '-';

    for($column = 0; $column <= 20; $column++) {
        for($row = 0; $row <= $column; $row++) {
            echo "$line";
        }
        echo "<br>";
    }
    echo "<hr>";

    for($column = 0; $column <= 10; $column++) {
        for($row = 0; $row <= 10; $row++) {
            echo $line;
        }
        echo "<br>";
    }

        
    $numbers = array(10, 20, 30, 40, 50, 60);

    foreach($numbers as $key => $value) {
        echo "Resultado" . ($key + 1) . ":\n" . ($value + $value) . "<br>";
        echo "<br>";
    }

    foreach($numbers $key as $value) {
        echo
    }
    

?>