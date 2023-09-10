<?php

include("con_db.php");

if (isset($_POST['register'])) {
    # code...
    if (strlen($_POST['name']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['email']) >= 1) 
    {
        $name = trim($_POST['name']);
        $telefono = trim($_POST['telefono']);
        $email = trim($_POST['email']);

        $consulta = "INSERT INTO `datos`(`name`, `telefono`, `email`) VALUES 
        ('$name','$telefono','$email')"

        $resultado = mysqli_query($conex,$consulta);

        if ($resultado) {
            # code...
            ?>
            <h3 class="ok">¡Se ha guardado con exito los datos!</h3>
            <?php
        }else {
            ?>
            <h3 class="bad">¡Ha ucurrido un error!</h3>
            <?php
        }
    } else {
        # code...
        ?>
        <h3 class="bad">Los campos son requeridos</h3>
        <?php
    }
}

?>