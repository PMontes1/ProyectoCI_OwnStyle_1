<?php

$Server ="127.0.0.1:3305";
$user = "root";
$pass = "";
$db="celularesdb";

$conexion = mysqli_connect($Server, $user, $pass, $db );

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}else{
    echo("Conexion exitosa");
}
    
?>