<?php 
include 'classe2.php';
include 'classe1.php';
use classe1\MinhaClasse as ClasseNumeroUm;
use classe2\MinhaClasse;

$classe1 = new ClasseNumeroUm();
echo $classe1->test() ."<br>";

$classe2 = new MinhaClasse();
echo $classe2->test();