<?php

if (isset($_POST["boton_register"])) {
$nombre = trim($_POST["Nombre"]);
$correo = trim($_POST["email"]);

if(trim($_POST["password"]) == trim($_POST["password2"])){
    $opciones=['cost' => 12,];
    $contrasena = password_hash($_POST["password"],PASSWORD_BCRYPT,$opciones);
    $sql = "INSERT INTO usuarios VALUES (NULL, '$nombre','$correo','$contrasena');";
    include('base_de_datos.php');
    $resultado = mysqli_query($conexion, $sql);
    if ($resultado) {
        
        header("Location: ../log/index.php");
        echo '<script language="javascript">alert("Registro Exitoso");</script>';
    } else {
        echo '<h3 class="bad">Usuario ya resgistrado</h3>';
    }
}
mysqli_close($conexion);
}


?>