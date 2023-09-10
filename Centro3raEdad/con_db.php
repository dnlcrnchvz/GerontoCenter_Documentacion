<?php
//base de datos
$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "sitioabuelitos";

$conexion = mysqli_connect($servidor,$usuario,"") or die ("Error con el servidor de la base de datos");

$bd = mysqli_select_db($conexion,$basededatos) or die("Error conexion al conectarse a la base de datos");

$name = $_POST['name'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$sql = "INSERT INTO datos VALUES ('$name', '$telefono', '$email')";

$ejecutar = mysql_query($conexion, $sql);

if (!$ejecutar) {
    # code...
    echo "Huvo un error";
}else {
    echo "Datos guardados correctamente";
}



?>
