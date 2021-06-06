<?php
require 'base_de_datos.php';
if (isset($_POST["boton_login"])) {
    session_start();
    $correo = trim($_POST["email"]);
    $contrasena = $_POST["password"];
  //  $_SESSION['usuario']=$correo;


    $consulta = "SELECT * FROM usuarios WHERE correo='$correo';";
    
   
    $resultado = mysqli_query($conexion, $consulta);
    $resultado2 = mysqli_fetch_array($resultado);
    $filas = mysqli_num_rows($resultado);
    $nombreUsuario = $resultado2['nombre'];
    $sw=password_verify($contrasena,$resultado2['contrasena']);
    echo $sw;
   if($sw){
        $_SESSION['usuario']=$nombreUsuario;
        $resultado = mysqli_fetch_array($resultado);   
        header("Location: ../dash/index.php");
       
    } else {
        echo '<script type="text/javascript">
                alert("Contraseña Invalida");
                location.href ="../log/index.php";
                </script>';
        
    }

}
mysqli_close($conexion);
?>