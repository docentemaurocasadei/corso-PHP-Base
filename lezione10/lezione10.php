<?php
function stampa($valore){
    print $valore;
    print "<br>";
}
// $i = 5;
// print_r($_GET);
// setcookie('nome', 'Ali', time()+1800);
// print_r($_COOKIE);
// print($_SERVER['HTTP_USER_AGENT']);

// define('ADMIN', 'tobia');
// // $admin='tobia';
// //
// //
// // ADMIN='giovanni';
// if (ADMIN=='tobia'){
//     print 'benvenuto amministratore';
// }

// $nome = 'patrizia';
// $nome = "patrizia";
// print "il mio nome è $nome"; //il mio nome è patrizia
// print 'il mio nome è $nome'; //il mio nome è $nome

// print __FILE__;-
//operatori aritmetici
// $a=10;
// $b=5;
// stampa('somma:' . ($a + $b)) ; //il . concatena
// stampa('differenza:' . ($a - $b));
// stampa('prodotto:' . ($a * $b));
// stampa('divisione:' . ($a / $b));
// stampa('potenza:' . ($a ** $b));
// stampa('modulo:' . ($a % $b));
// stampa('giacomo' . ' è ' . ' di fano. ');



//espressioni di incremento
// $i = 10;
// $i += 1; //11
// $i++; //12
// $i--; //11
// stampa($i++);
// stampa($i);
// $i=10;
// stampa(20 - $i++); //10
// $i=10;
// stampa(20 - ++$i); //9

// stampa(10+2*3); //16
// stampa((10+2)*3); //36
// $str="oggi è";
// $str.=" nuvoloso";  //concatena nuvoloso a $str
// stampa($str);

//operatori logici
$gg_assenze=20;
$clienti_gestiti=15;

//premio aziendale a chi ha gestito almeno 20 clienti
//e ha fatto meno di 19 gg di assenza
if ($clienti_gestiti>=20 && $gg_assenze<19){
    stampa('hai ottenuto il premio');
}
//bonus micro a chi ha gestito almeno 18 clienti
//o ha fatto al massimo 25gg di assenza
if ($clienti_gestiti>=18 || $gg_assenze<=25){
    stampa('hai ottenuto il bonus micro');
}
//regalo natalizio a chi ha ottenuto almeno uno dei
//due premi, ma non entrambi
if(
    ($clienti_gestiti>=20 && $gg_assenze<19)
    xor ($clienti_gestiti>=18 || $gg_assenze<=25)
){
    stampa('hai ottenuto il regalo natalizio');
}

//operatori di confronto
$a=15;
$b='15';
if ($a==$b){
    stampa('a è uguale a b');
}
if ($a===$b){
    stampa('a è identica a b');
}
if ($a!==$b){
    stampa('a non è identica a b');
}