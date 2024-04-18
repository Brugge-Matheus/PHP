<?php 
// splice e slice
$list = array('a', 'b', 'c', 'd', 'e');
$list2 = array('a', 'b', 'c', 'd', 'e', 'f');

$newList = array_slice($list, (count($list) - 3), 3);
array_splice($list2, (count($list2) - 1), 1); //remove itens
array_splice($list2, 1, 2, array('Y', 'Z')); //remove itens e adiciona outros no lugar

print_r($newList);
echo "<br><br>";
print_r($list2);

// reduce
$numbers = array(1, 2, 3, 4, 5, 6, 7);

echo "<br><br>";

function sum($subtotal, $item) {
    $total = $subtotal += $item;
    return $total;
}

$result = array_reduce($numbers, 'sum');


echo $result ."<br><br>";

// outro exemplo reduce
$persons = array(
    array('name' => 'Matheus', 'gender' => 'M', 'nota' => 9),
    array('name' => 'Kleber', 'gender' => 'M', 'nota' => 7),
    array('name' => 'Jhonas', 'gender' => 'M', 'nota' => 6),
    array('name' => 'Joana', 'gender' => 'F', 'nota' => 9),
    array('name' => 'Carla', 'gender' => 'F', 'nota' => 10),
);

function sumMale($subtotal, $item) {
    if($item['gender'] === 'M') {
        $subtotal++;
    }
    return $subtotal;
}

function countMale($subtotal, $item) {
    if($item['gender'] === 'M') {
        $subtotal += $item['nota'];
    }
    return $subtotal;
}

function sumFemale($subtotal, $item) {
    if($item['gender'] === 'F') {
        $subtotal++;
    }
    return $subtotal;
}

function countFemale($subtotal, $item) {
    if($item['gender'] === 'F') {
        $subtotal += $item['nota'];
    }
    return $subtotal;
}

$sumMale = array_reduce($persons, 'sumMale');
$countMale = array_reduce($persons, 'countMale', 2);
$sumFemale = array_reduce($persons, 'sumFemale');
$countFemale = array_reduce($persons, 'countFemale');

echo "A quantidade de homens é: $sumMale<br>";
echo "A soma das notas dos homens é: $countMale<br>";
echo "A media de notas dos homens é: " .number_format(($countMale / $sumMale), 1, ',', '.'). "<br><br>";

echo "A quantidade de mulheres é: $sumFemale<br>";
echo "A soma das notas dos mulheres é: $countFemale<br>";
echo "A media de notas dos mulheres é: " .number_format(($countFemale / $sumFemale), 2, ',', '.'). "<br><br>";


// Descontruindo usando list
$info = array('Matheus', 18, 'café', 'black');

$name = $info[0];
$age = $info[1];
$favorite = $info[2];
$color = $info[3];

echo "<br><br>Hello, my name is <strong>$name</strong>, i have <strong>$age</strong> years, my favorite liquid is <strong>$favorite</strong> and my favorite color is <strong>$color</strong>.";

//or

list($nome, $idade, $favorita, $cor) = $info;

echo "<br><br>Hello, my name is <strong>$name</strong>, i have <strong>$age</strong> years, my favorite liquid is <strong>$favorite</strong> and my favorite color is <strong>$color</strong>.";
