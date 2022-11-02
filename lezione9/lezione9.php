<?php
//stampo ciao
// print 'ciao\n';
// #stampo ciao e newline
// print "ciao\n";
// /* stampo prova
//  * posso fare più righe di commento
//  */
// print "prova";
// //variabili
// //iniziano con $
// $mia=5;
// $_i=10;
// // $mia-var=8; NON CORRETTO il -
// //$12a=15; NON CORRETTO il numero come 1 carattere
// $a12=15;
// $a=5;   //PHP è case sensitive
// $A=10;
// $ciao=null;

// $int=5; //intero
// $f=5.5; //float
// $s="ciao"; //string
// $b=true; //boolean
// $ar=[1,2,3];    //array
// $n=null;    //null type
// print "\n";
// print PHP_INT_MIN . "|" . PHP_INT_MAX;
// print "\n";
// echo PHP_INT_MIN, "|", PHP_INT_MAX;

// $v = "mario";
// print "{$v} ha 20 anni";
// print "\n";

// print "1 {$v} ha un maglione \"giallo\"";
// print "\n";
// print '2 {$v} ha un maglione \"giallo\"';

$testo="oggi è mercoledì 
domani sarà giovedì";
print $testo;
print "\n";
//creo un array
$ar=['marco','simone','silvia'];
print_r($ar);
print $ar[2];
$ar2 = array(1,2,3);

//array associativi
$ar3=[
    'nome' => 'Giovanni',
    'cognome' => 'Verdi',
    'indirizzo' => 'Piazza Repubblica 5',
    'località' => 'Fano',
];
print "\n";
print $ar3['cognome']. " ". $ar3['nome'] . "\n";
print "{$ar3['cognome']} {$ar3['nome']}\n";

$aula=[
    'simone' => [
        'colore' => 'verde', 
        'musica' => 'classica'],
    'patrizia' => [
        'colore' => 'bianco', 
        'musica' => 'rock/pop'],
    'alessandro' => [
        'colore' => 'arancione', 
        'musica' => 'progressive metal'],
];
print $aula['simone']['musica'];

function stampa($valore, $label="il valore è:"){
    print "\n{$label} {$valore}";
}
$s="ciao";
stampa($s, 'il valore di s è:');
stampa($s);
$i=15;
stampa($i);

//scopo delle variabili
$colore="verde";
function stampa_colore(){
    global $colore;
    stampa($colore);
}
stampa_colore();