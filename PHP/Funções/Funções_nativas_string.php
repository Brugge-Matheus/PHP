<?php 

// Funções nativas do php para strings

trim($name);  // Remove espaços em branco no início e no final da string.

echo strlen($name); // Retorna o número de caracteres na string.

echo strtolower($name); // Converte todos os caracteres da string para minúsculas.
echo strtoupper($name); // Converte todos os caracteres da string para maiúsculas.

str_replace('Matheus', 'Brugge', $name); // Substitui todas as ocorrências de 'Matheus' por 'Brugge' na string especificada.

substr($name, 0, 5); // Retorna uma parte da string, iniciando na posição 0 e capturando os próximos 5 caracteres.

strpos($name, 's'); // Retorna a posição da primeira ocorrência de 's' na string. Se não encontrar, retorna -1.
$posicao = strpos($name, 'u');
if($posicao > -1) {
    echo "ACHOU!";
} else {
    echo "NÃO ACHOU";
}

ucfirst($name); // Converte o primeiro caractere da string para maiúsculo.
ucwords($name); // Converte o primeiro caractere de cada palavra na string para maiúsculo.

explode(',', $clearName); // Divide a string em um array, usando ',' como delimitador.

number_format($num, 2, ',', '.'); // Formata um número com duas casas decimais, usando ',' como separador decimal e '.' como separador de milhares.





