<?php
function stampa($valore){
    print "$valore <br>";
}
//gestire le stringhe
//strlen()
// $var="siamo a Fano";
// stampa(strlen($var));
// stampa(substr($var,2,3));

// // $var = substr_replace($var, 'Pesaro', 8);
// // stampa($var);

// $var = str_replace('Fano', 'Pesaro', $var);
// stampa($var);

// $input="l'aquilone è verde";
// $input=addslashes($input); //l\'aquilone è verde
// stampa($input);
// //funzioni matematiche
// $numeri=[1,5,9,7,4,2];
// stampa(max($numeri));
// $max=0;
// foreach ($numeri as $numero){
//     if ($numero>$max){
//         $max=$numero;
//     }
// }
// stampa($max);
// $numero=3.184896;
// //3.184 => 3.18
// //3.185 => 3.19
// stampa(round($numero,2));
// //tenta la fortuna

$ar=[1,2,3];
if (is_array($ar)){
    stampa('ar è un array');
}else{
    stampa('ar NON è un array');
}

//connessione al database
//check se connessione ok
//query
//eseguiamo query
//select loop di lettura
//insert lettura del id inserito [facoltativa]
//update lettura n. record aggiornati [facoltativa]
//delete lettura n. record cancellati [facoltativa]

$cn = mysqli_connect("localhost", "root", "", "personale");
if ($cn){
    stampa("Connessione ok!");
}else{
    stampa("Connessione errata! ". mysqli_connect_error());
    die;
}
// inserisci1();
cancella();
leggi();
function leggi(){
    global $cn;
    $query="SELECT * FROM timbrature";
    $result=mysqli_query($cn, $query);
    //loop per tutti i record
    while($r=mysqli_fetch_assoc($result)){
        stampa($r["codice"]."-".$r["nominativo"]);
    }
}
function inserisci(){
    global $cn;
    try{
        $codice="B103";
        // $codice="' or 1=1 or '";
        $nominativo="Gianni d'Amico";
        $codice=addslashes($codice);
        $nominativo=addslashes($nominativo);
        $query="INSERT INTO timbrature (codice,nominativo)
        VALUES ('$codice','$nominativo')";
        mysqli_query($cn,$query);
        stampa("dato inserito:" . mysqli_insert_id($cn));
    }catch(Exception $e){
        stampa($e);
    }
}
function inserisci1(){
    global $cn;
    $stmt = mysqli_stmt_init($cn);
    $codice = "A002";
    $nominativo = "Mario d'Amico";
    if (mysqli_stmt_prepare($stmt, "INSERT INTO timbrature (codice,nominativo) VALUES (?,?)")){
        mysqli_stmt_bind_param($stmt, "ss", $codice, $nominativo );
        mysqli_stmt_execute($stmt);
    }
    if (mysqli_stmt_error($stmt)){
        print mysqli_stmt_error($stmt);
    }
    mysqli_stmt_close($stmt);
}

function aggiorna(){
    global $cn;
    $stmt = mysqli_stmt_init($cn);
    $codice = "A002";
    $nominativo = "Mario Rossini";
    if (mysqli_stmt_prepare($stmt, "UPDATE timbrature 
        SET codice=?,nominativo=? WHERE codice=?")){
        mysqli_stmt_bind_param($stmt, "sss", $codice, $nominativo, $codice );
        mysqli_stmt_execute($stmt);
    }
    if (mysqli_stmt_error($stmt)){
        print mysqli_stmt_error($stmt);
    }
    mysqli_stmt_close($stmt);
}

function cancella(){
    global $cn;
    $stmt = mysqli_stmt_init($cn);
    $codice = "A002";
    $nominativo = "Mario Rossini";
    if (mysqli_stmt_prepare($stmt, "DELETE FROM timbrature 
        WHERE codice=?")){
        mysqli_stmt_bind_param($stmt, "s", $codice);
        mysqli_stmt_execute($stmt);
    }
    if (mysqli_stmt_error($stmt)){
        print mysqli_stmt_error($stmt);
    }
    mysqli_stmt_close($stmt);
}
