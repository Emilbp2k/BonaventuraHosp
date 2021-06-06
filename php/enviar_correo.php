<section class="signup-section" id="signup" >
        <div class="container">
            <div class="row" style="padding-bottom: 8rem;">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">Subscribete para que tengas las noticias mas recientes</h2>
                    
    <form method="POST"  class="form-inline d-flex">
    <input name="correo" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" type="email" placeholder="Ingresa tu correo..." required />
    <button class="btn btn-light mx-auto" name="elasombrosobotnenviador" type="submit"
    <?php if (isset($_POST["correo"])) { echo ' autofocus '; }; ?>
    >Subscribete</button>
</form>
<?php

if (isset($_POST["correo"])) {
    $correo = trim($_POST["correo"]);
    $insercion = "INSERT INTO suscriptores VALUES (NULL, '$correo');";
    include('base_de_datos.php');
    $resultado = mysqli_query($conexion, $insercion);
    if ($resultado) {
        echo '<h3 class="good">¡Guardado exitosamente!</h3>';
    } else {
        echo '<h3 class="bad">¡Ups! Correo ya resgistrado</h3>';
    }
    mysqli_close($conexion);
}

?>
                </div>
            </div>
            <!-- Contact-->


            <div class="row" style="padding-bottom: 4rem;">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-blue mb-2"></i>
                            <h4 class="text-uppercase m-0">Address</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-blue mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-blue mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">+1 (555) 902-8832</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>

