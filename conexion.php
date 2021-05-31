<?php

$dbhost = "209.151.148.142";
$dbuser = "root";
$dbpass = "";
$dbname = "login";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn)
{
    die("No hay conexion" .mysqli_connect_error());
}
?>
