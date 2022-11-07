
<?php
/**
 * ricevere un parametro dalla get
 * localhost:8888/ex1.php?numero=5
 * estrarre tramite rand(1,10) un numero da 1 a 10
 * stampare a video se l'utente ha vinto oppure no
 */

$numero = $_GET['numero'];
//se lanciato da terminale
//$numero = readline('Inserisci un numero da 1 a 10:'); 
//se passato da argomento da riga comando
//$numero=$argv[1];
$estratto = rand(1,10);
// print(gettype($numero));
if ($numero == $estratto){
    print "Hai Vinto!";
}else{
    print "Hai Perso, il vincente era $estratto!";
}
