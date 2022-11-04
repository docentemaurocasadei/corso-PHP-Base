<?php
/**
 * ricevere dalla GET due parametri, min e max 
 * se il min è maggiore di max restituire un errore
 * 'min non può essere maggiore di max!' altrimenti
 * fare un ciclo per stampare tutti i numeri 
 * da min a max
 */
# http://localhost:8888/lezione10/ex1.php?min=1&max=10
function stampa($valore){
    print $valore;
    print "<br>";
} 
$min = $_GET['min'];
$max = $_GET['max'];
if ($min > $max){
    stampa('ERRORE: min non può essere maggiore di max! ');
}