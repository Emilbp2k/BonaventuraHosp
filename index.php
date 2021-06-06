<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bonaventure Hospital</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">HOSPITAL<span class="text-danger">+<span></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Sobre Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Acerca De</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="log/index.php">Ingresar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h1 class="mx-auto my-0 text-uppercase">BONAVENTURE HOSPITAL</h1>
                <br>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Nuestro Principal Proposito En Esta Vida Es Ayudar A Otros
                </h2>
                <a class="btn azul js-scroll-trigger" href="#about">Empecemos</a>
            </div>
        </div>
    </header>

    <!-- Projects-->
    <section class="projects-section bg-light" id="about">
        <div class="container">
            <!-- Featured Project Row-->
            <div class="row align-items-center no-gutters mb-4 mb-lg-5 padd">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/doc.jpg" alt="" />
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h2 class="text-casinegro mb-4">Quienes Somos</h2>
                        <p class="text-black-50 mb-0"> Somos un Hospital que generamos estilos de vida <span
                                class="bg-blue">saludables</span> y
                            ofrecemos una atención segura, integral y personalizada en salud. Siendo Los referentes de
                            aseguramiento en salud, acompañando a los afiliados a enfrentar los desafíos que le presenta
                            su
                            estado de salud.</p>
                    </div>
                </div>
            </div>
            <!-- Project One Row-->
            <div class="row justify-content-center no-gutters mb-5 mb-lg-0" id="projects">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/7.jpg" alt="" /></div>
                <div class="col-lg-6">
                    <div class="text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="">Porque Elegirnos</h4>
                                <p class="mb-0 ">Llevamos mas de 30 años de experiencia en todos los
                                    ambitos asi que puedes tener la confianza de cada uno de nuestros profesionales</p>
                                <hr class="d-none d-lg-block mb-0 ml-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Two Row-->
            <div class="row justify-content-center no-gutters">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/afi.jpg" alt="" /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class=" text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="">Politica de Calidad</h4>
                                <p class="mb-0 ">Gestionamos la mejor experiencia para los servicios de
                                    salud de nuestros afiliados adeas promovemos estilos de vida saludables y
                                    administramos con eficiencia los recursos</p>
                                <hr class="d-none d-lg-block mb-0 mr-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup-->
    <?php 
                    include('php/enviar_correo.php');
                    ?>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container">Copyright © Your Website 2020</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>