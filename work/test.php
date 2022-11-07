<?php
$cn = @mysqli_connect('localhost', 'root', '', 'personale');
if (!$cn) {
/* Use your preferred error logging method here */
    error_log('Connection error: ' . mysqli_connect_error());
}

$query = "SELECT * FROM timbrature";
$result = mysqli_query($cn, $query);
/* fetch associative array */
while ($row = mysqli_fetch_assoc($result)) {
    printf("%s (%s)\n", $row["codice"], $row["nominativo"]);
}

$query = "INSERT INTO timbrature (codice, nominativo) VALUES ('A001', 'Dario Rossi')";
mysqli_query($cn, $query);
printf("New record has ID %d.\n", mysqli_insert_id($cn));

$stmt = mysqli_stmt_init($cn);
$codice = 'A002';
$nominativo = 'Mario Verdi';
if (mysqli_stmt_prepare($stmt, "INSERT INTO timbrature (codice,nominativo) VALUES (?,?)")){
    mysqli_stmt_bind_param($stmt, "ss", $codice, $nominativo );
    mysqli_stmt_execute($stmt);
}
if (mysqli_stmt_error($stmt)){
    print mysqli_stmt_error($stmt);
}
mysqli_stmt_close($stmt);

mysqli_close($cn);
