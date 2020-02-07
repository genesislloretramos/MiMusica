<?php
    $servidor = "localhost";
    $baseDeDatos = "mimusica";
    $usuario = "root";
    $contraseña = "";
    $puerto = "";

    $conexion = new mysqli($servidor, $usuario, $contraseña, $baseDeDatos);
    if (!$conexion) {
        echo "Error de conexion a la base de datos: ".mysqli_connect_error();
    }
?>