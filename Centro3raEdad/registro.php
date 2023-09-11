<?php

require 'conexion.php';

if (!$mysqli) {
    die('NO SE PUEDE CONECTAR A TU BASE DE DATOS');
}

$nombre = utf8_decode($_POST['nombre']);
$telefono = utf8_decode($_POST['telefono']);
$correo = utf8_decode($_POST['correo']);

if (isset($_POST["submit"])) {
    # code...
    $sql = "INSERT INTO datos (nombre, telefono, correo) VALUES ('$nombre','$telefono','$correo')";
    if (mysqli_query($mysqli, $sql)) {
        # code...
        echo "datos almacenados con exito";
    }else {
        echo "error";
    }
}
?>