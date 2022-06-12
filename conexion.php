<?php
$conexion = mysqli_connect("localhost","root",'', "sistete");

if(!$conexion){
    die("Error al conectarse".mysqli_connect_error());
}
?>