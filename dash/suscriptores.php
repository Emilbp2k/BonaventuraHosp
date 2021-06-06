
<?php require_once "vistas/parte_superior.php"?>

<!-- INICIO DEL CONT PRINC -->
<?php
include_once '../php/base_de_datos.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$consulta = "SELECT * FROM suscriptores";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$suscriptores=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<!-- INICIO DEL CONT PRINC -->
<div class="container">
<h1 class="text-center">SUSCRIPTORES</h1>
<div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>id</th>
                    <th>correo</th>
                </thead>
                <tbody>
                    <?php
                        foreach($suscriptores as $suscriptor){
                    ?>
                    <tr>
                        <td><?php echo $suscriptor['id']?></td>
                        <td><?php echo $suscriptor['correo']?></td>
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