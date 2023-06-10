<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Font awesome-->
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
            integrity="sha512-w7xi+kWAFVn2AizvFSfgwLfMoGyq+M8sTTcvnvHd0I1TClCAlj5H9/wMq+b2M3qL6jYgvrTGV8F7NBtlHYXbFw=="
            crossorigin="anonymous" />



        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">


        <link rel="stylesheet" href="./css/pasajes/pasajes.css">
        <link rel="icon" href="./images/home/favicon.ico">

        <title>Argentina Turismo</title>
        <script src="//code.tidio.co/vygjnps9ajcgt1ztbg0rcenxlp54zgkv.js" async></script>
    </head>

    <body>

        <!--NAV BAR-->
        <nav class="navbar navbar-expand-lg navbar navbar-dark nav-color">
            <div class="container-fluid">
                <a class="navbar-brand ms-4" href="#">Argentina</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <ul class="navbar-nav mx-auto gap-5 mb-2 mb-lg-0">

                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="./home.html">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./guias.html">Guías Turisticas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="./pasajes.html">Pasajes</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="./paquetes.html">Paquetes</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-5">
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-fill fs-4"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end me-5" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="#">Mi Perfil</a></li>
                                <li><a class="dropdown-item" href="#">Mis Pasajes</a></li>
                                <li><a class="dropdown-item" href="#">Mis Paquetes</a></li>
                                <li><a class="dropdown-item" href="./php/logout.php" onclick="confirmLogout(event)"
                                        data-bs-toggle="modal" data-bs-target="#logoutModal"
                                        data-bs-slide="false">Cerrar Sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--NAV BAR-->
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">Cerrar Sesión</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>¿Estás seguro de que deseas cerrar sesión?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="./php/logout.php" id="confirmLogoutBtn" class="btn btn-primary">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin nav -->

        <!-- Carrousel-->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/pasajes/fondoQuehacer3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/pasajes/excursiones2-2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/pasajes/excursiones3-3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">siguiente</span>
            </button>
        </div>

        <!-- fin carrousel -->

        <!--FILTRADO DE BUSQUEDA-->
        <h1 class="text-center mt-4 title-1">Venta de Pasajes</h1>

        <div class="mt-4 d-flex justify-content-center align-items-center">
            <div class="search-bar">
                <form action="buscar.php" method="POST" class="search-form">
                    <div class="row busqueda-row">
                        <div class="col-md-3 mb-3">
                            <label for="origen-input" class="form-label">Origen:</label>
                            <input class="form-control" type="search" placeholder="Origen" id="origen-input"
                                name="origen" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="destino-input" class="form-label">Destino:</label>
                            <input class="form-control" type="search" placeholder="Destino" id="destino-input"
                                name="destino" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="fecha-ida-input" class="form-label">Fecha de ida:</label>
                            <input class="form-control" type="date" id="fecha-ida-input" name="fecha_ida" required>
                        </div>
                        <div class="col-md-3 mb-3" id="fecha-vuelta-column">
                            <label for="fecha-vuelta-input" class="form-label">Fecha de vuelta:</label>
                            <input class="form-control" type="date" id="fecha-vuelta-input" name="fecha_vuelta"
                                disabled>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tipo-select" class="form-label">Tipo de viaje:</label>
                            <select class="form-select" id="tipo-select" name="tipo">
                                <option value="micro">Micro</option>
                                <option value="avion">Avión</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="ida-vuelta-checkbox"
                                    name="ida_vuelta_checkbox">
                                <label class="form-check-label" for="ida-vuelta-checkbox">
                                    Ida y vuelta
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <button class="btn btn-primary btn-block" type="submit">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--FIN DEL FILTRADO DE BUSQUEDA-->

        <!--PRODUCTOS-->

        <div class="card-container mt-4" style="margin-left: 70px;">
            <div class="row custom-row">
                <?php
          include 'php/pasajes_be.php'
        ?>
            </div>
        </div>

        <!-- Footer-->

        <div class="footer">
            <!-- Footer-->

            <footer>

                <div class="row">
                    <div class="col-md espaciado-flex centrado">

                        <h4>INTEGRANTES</h4>
                        <ul>
                            <li><a href="https://www.linkedin.com/in/brisa-ibarra-21917a214/" target="_blank">Brisa
                                    Ibarra</a></li>
                            <li><a href="https://www.linkedin.com/in/adrian-jorge-occhipinti-104058187/"
                                    target="_blank">Adrian Occhipinti</a></li>
                            <li><a href="https://www.linkedin.com/in/micaela-sof%C3%ADa-yuseck-b0107523a/"
                                    target="_blank">Micaela Yuseck</a></li>
                            <li><a href="https://www.linkedin.com/in/leonel-serra-06a78121a" target="_blank">Leonel
                                    Serra</a></li>
                            <li><a href="https://www.linkedin.com/in/carlos-alfredo-lopez-97b598182"
                                    target="_blank">Carlos Lopez</a></li>
                        </ul>
                    </div>

                    <div class="col-md espaciado-flex">
                        <h4>SEGUINOS!</h4>
                        <div>
                            <!--Iconos redes sociales-->
                            <div><a href="https://www.facebook.com/TurDepAR" target="_blank"><i
                                        class="fab fa-facebook-square"></i></a>
                            </div>
                            <div><a href="https://www.instagram.com/turdepar/" target="_blank"><i
                                        class="fab fa-instagram-square"></i></a>
                            </div>
                            <div><a href=""><i class="fab fa-whatsapp-square" target="_blank"></i></a></div>

                        </div>
                    </div>

                    <div class="col-md mapa espaciado-flex">
                        <!--mapa ubicación-->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d410.5458102086755!2d-58.37953522641396!3d-34.59489325101088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccab6500b5cb5%3A0x45ea2bda502eecb!2sMinisterio%20de%20Turismo%20y%20Deportes%20de%20la%20Nacion!5e0!3m2!1ses-419!2sar!4v1647287779279!5m2!1ses-419!2sar"
                            width="600" height="450" style="border:0; margin-top: 20px;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                </div>
            </footer>
            <!--/footer-->
        </div>
        <!--/footer-->

        <script src="js/pasajes/pasajes.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </body>

</html>