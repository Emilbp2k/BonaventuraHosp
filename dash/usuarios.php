
<?php require_once "vistas/parte_superior.php"?>

<?php
include_once '../php/base_de_datos.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$consulta = "SELECT * FROM usuarios";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<!-- INICIO DEL CONT PRINC -->
<div class="container">
<h1 class="text-center">USUARIOS</h1>
<div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>User_id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                </thead>
                <tbody>
                    <?php
                        foreach($usuarios as $usuario){
                    ?>
                    <tr>
                        <td><?php echo $usuario['id']?></td>
                        <td><?php echo $usuario['nombre']?></td>
                        <td><?php echo $usuario['correo']?></td>
                        <td><?php echo $usuario['contrasena']?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
           </div>
       </div> 
</div>
<!-- FIN DEL CONT PRINC -->
<?php require_once "vistas/parte_inferior.php"?>