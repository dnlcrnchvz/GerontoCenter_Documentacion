<?php
$mysqli = new mysqli(
    "localhost",
    "root",
    "",
    "pagina"
);

if ($mysqli->connect_errno) {
    die("Algo salio mal");
}else {
    echo "conexion con exito";
}

?>