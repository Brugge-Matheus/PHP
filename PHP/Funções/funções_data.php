<?php 

// Função date
$date =  date('d/m/Y');

$time = strtotime($date); // retorna a equivalência em milisegundos da data

echo date('d/m/y', strtotime($date)). "<br><br>" ;

// Classe DateTime
$Newdate = new DateTime('2020-1-1 15:35:00');

$Newdate->add(DateInterval::createFromDateString('2 days 5 minutes')); // Adicionar entrada de tempo
$Newdate->sub(DateInterval::createFromDateString('2 days 5 minutes')); // Diminui da entrada de tempo atual

$date1 = new DateTime('2005-10-29');
$date2 = new DateTime('2005-10-10');

if($date1 > $date2) { // Verificação de datas
    echo "Data 1 é maior que data 2";
    echo "<br><br>";

} else {
    echo "Data 2 é maior que data 1";
    echo "<br><br>";
}

$diff = $date1->diff($date2);
echo $diff->format('%y anos %m mesês e %d dias') ."<br><br>";

// $Newdate->setTimezone(new DateTimeZone('America/Sao_Paulo')); // Setar uma formatação de data

echo $Newdate->format('d/m/Y H:i:s'); // Formata a data
