<?php
function stampa($valore){
    print $valore;
    print "<br>";
}
// $i = 5;
// print_r($_GET);
// setcookie('nome', 'CARLO', time()+1800);
// print_r($_COOKIE);
// print($_SERVER['HTTP_USER_AGENT']);

// define('ADMIN', 'tobia');
// $admin='tobia';
// //
// //
// ADMIN='giovanni';
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
// stampa('');


//espressioni di incremento
// $i = 10;
// $i += 1; //11
// $i++; //12
// $i--; //11
// stampa($i++);
// stampa($i);
// $i=10;
// stampa(20 - $i++); //10
// stampa($i);
// $i=10;
// stampa(20 - ++$i); //9

// stampa(10+2*3); //16
// stampa((10+2)*3); //36
// $str="oggi è";
// $str.=" nuvoloso";  //concatena nuvoloso a $str
// stampa($str);

//operatori logici
// $gg_assenze=20;
// $clienti_gestiti=15;

// //premio aziendale a chi ha gestito almeno 20 clienti
// //e ha fatto meno di 19 gg di assenza
// if ($clienti_gestiti>=20 && $gg_assenze<19){
//     stampa('hai ottenuto il premio');
// }
// //bonus micro a chi ha gestito almeno 18 clienti
// //o ha fatto al massimo 25gg di assenza
// if ($clienti_gestiti>=18 || $gg_assenze<=25){
//     stampa('hai ottenuto il bonus micro');
// }
// //regalo natalizio a chi ha ottenuto almeno uno dei
// //due premi, ma non entrambi
// if(
//     ($clienti_gestiti>=20 && $gg_assenze<19)
//     xor ($clienti_gestiti>=18 || $gg_assenze<=25)
// ){
//     stampa('hai ottenuto il regalo natalizio');
// }

// //operatori di confronto
// $a=15;
// $b='15';
// if ($a==$b){
//     stampa('a è uguale a b');
// }
// if ($a===$b){
//     stampa('a è identica a b');
// }else{
//     stampa('a NON è identica a b');

// }
// !=
// if ($a!==$b){
//     stampa('a non è identica a b');
// }
// $a=10;
// $b=12;
// stampa($a<=>$b);//-1 $a<b | 0 $a==$b | 1 $a>$b

// $a='macchina';
// $b='albero';
// if ($a<$b){
//     stampa("$a è minore di $b");
// }else{
//     stampa("$a è maggiore di $b");
// }
// stampa(chr(0x41));
// die;
// if ($a){
//     stampa('true');
// }else{
//     stampa('false');
// }

// $a=35;
// if ($a<10){
//     stampa('a < 10');
// }elseif($a>=10 && $a<20){
//     stampa('a compreso tra 10 e 20');
// }elseif($a>=20 && $a<30){
//     stampa('a compreso tra 20 e 30');
// }else{
//     stampa('a superiore di 30');
// }
// switch (true){
//     case $a < 10:
//         stampa('<10');
//         break;
//     case $a >= 10 && $a < 20:
//         stampa('>=10 <20');
//         break;
//     case $a >= 20 && $a < 30:
//         stampa('>=20 <30');
//         break;
//     default:
//         stampa('non so...');
//         break;
// }

//cicli
// for($conta=0;$conta<=100;$conta+=20){
//     stampa($conta);
// }
// $i=150;
// while($i<=100){
//     stampa("while $i");
//     $i+=20;
// }
// $i=150;
// do{
//     stampa("do $i"); //viene sempre eseguita
//     $i+=20;
// }while($i<=100);

// $ar = [10,20,30,40];
// //questo equivale al for di seguito
// foreach($ar as $valore){
//     stampa($valore);
// }
// for($i=0;$i<count($ar);$i++){
//     if ($i==2){
//         continue;
//     }
//     stampa($ar[$i]);
// }

$ar2=['prodotto' => 'smartphone', 'modello' => 'S21'];
foreach($ar2 as $chiave => $valore){
    stampa("$chiave: $valore");
}
# esercizi per casa:
# xx_do_while.php, xx_while.php, xx_while_2.php
# xx_for.php, xx_operatori_logici.php, x_switch.php