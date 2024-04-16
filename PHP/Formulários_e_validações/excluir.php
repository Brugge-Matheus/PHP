<?php 
$delete = unlink('txt.txt');

if($delete == true) {
    echo "Arquivo excluido";
} else {
    "Arquivo não exlcluido";
}