<?php
$conexion = mysqli_connect("sql302.infinityfree.com", "if0_40475195", "PnFpx4s3DM","if0_40475195_interactivo");

if (!$conexion) {
   
    echo "Error: No se pudo conectar a MySQL.<br>";
    echo "Número de error de depuración: " . mysqli_connect_errno() . "<br>";
    echo "Error de depuración: " . mysqli_connect_error() . "<br>";
    exit;
}

?>
