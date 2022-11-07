
<?php
/**
 * ricevere un parametro dalla get
 * localhost:8888/ex1.php?numero=5
 * estrarre tramite rand(1,10) un numero da 1 a 10
 * stampare a video se l'utente ha vinto oppure no
 */

$numero = $_GET['numero'];
$estratto = rand(1,10);
if ($numero == $estratto){
    print "Hai Vinto!";
}else{
    print "Hai Perso, il vincente era $estratto!";
}
