<?php

    $host = "localhost";
    $user = "root";
    $clave = "";
    $bd = "venta_acosa2";

    $conexion = mysqli_connect($host,$user,$clave,$bd,3307,);
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }

    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos");

    mysqli_set_charset($conexion,"utf8_spanish_ci");


?>
