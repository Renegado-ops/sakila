<?php

$hostname = "localhost";
$username = "root";
$passwrd  = "";
$database = "sakila";

// conexion para 000webhost
if ($_SERVER['HTTP_HOST'] =='emdxd.000webhostapp.com'){
    
$username ="id18475172_root";
$passwrd ="QDAoCf{/g4N%2z2o";
$database ="id18475172_sakila"; 

}

    
$conexion = mysqli_connect($hostname, $username, $passwrd, $database) or die("No se puede conectar a la base de datos " . mysqli_connect_error());