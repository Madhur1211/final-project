<?php
/*Database connection variables*/
$databaseHost = '172.31.22.43';
$databaseName = 'Madhur200520948';
$databaseUsername = 'Madhur200520948';
$databasePassword = '06nKAgwBQU';
/*storing connection in variable*/
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
/*error if not connected*/
if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>