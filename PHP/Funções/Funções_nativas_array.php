<?php 
$list = array('name1', 'name2', 'name3', 'name4');
$finalList = array('name1', 'name2');
$num = array(10, 20, 30, 40, 50);

// count($list); // Mostra quantos itens tem no array (conta de forma real começando do 1)

// array_diff($finalList, $list); // Faz uma comparação, retira os itens q tem no primeiro array do segundo e retorna a diferença

// array_filter($lista, function($item) {
//     if($item != 'item4') {
//         return true;
//     } else {
//         return false;
//     }
// });

$teste = array_filter($list, fn($item) => $item != 'name4' ? true : false); // Filtra os itens e retorna true ou false
print_r($teste);
echo "<br><br>";



$double = array_map(function($item) { // Executa uma função por todos os itens do array
    return ($item * 2);
}, $num);
print_r($double);


array_pop($num); // Remove o último item do array
array_shift($num); // Remove o primero item do array


if(in_array(40, $num)) { // Verifica sse um item existe no array
    echo "Existe";

} else {
    echo "Não existe";
}

array_search(40, $num); // Procura o item, se achar retorna o item e o index dele


sort($num); // Ordena os itens do array de forma crescente
rsort($num); // Ordena os itens do array de forma descrescente
asort($num); // Ordena os itens do array de forma crescente mantendo o index
arsort($num); // Ordena os itens do array de forma descrescente mantendo o index

$newNum = implode(',', $num);
echo $newNum;



