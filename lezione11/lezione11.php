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

