<?php
require_once('./config/conexion.php');



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro de Establecimiento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./estilos/mapa2.css" />
    <link rel="stylesheet" type="text/css" href="./estilos/HeaderFooter.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <nav id="custom-navbar" class="navbar navbar-expand-lg navbar-light navbar-dark-bg">
                <div class="container-fluid" id="header">
                    <a class="navbar-brand Logo" href="./index.php"><img src="./Imagenes/Logo.png" alt="Logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link rojo" id="mapa" href="./mapa.php">Mapa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link amarillo" id="calendario" href="./calendario.php">Calendario</a>
                            </li>
                            <?php
                            if (isset($_SESSION['user_id'])) {
                                echo '<li class="nav-item">
                            <a class="nav-link amarillo" id="calendario" href="./reg_establecimiento.php">registra tu establecimiento</a>
                            </li>';
                            } else {
                                echo '';
                            }
                            include('modales_usuario.php');
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="modal fade" id="movedModal" tabindex="-1" aria-labelledby="movedModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="movedModalLabel">Selecciona</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="text" id="searchInput" placeholder="Buscar">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mundo_aventura">
                                        <a href="./informacion.php">
                                            <figure>
                                                <img src="./Imagenes/modal/Arrendamientos.jpg" />
                                                <div class="capa">
                                                    <h3>Arrendamientos</h3>
                                                </div>
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="parque">
                                        <a href="./informacion.php">
                                            <figure>
                                                <img src="./Imagenes/imagen de lugares/parque.jpeg" />
                                                <div class="capa">
                                                    <h3>parque</h3>
                                                </div>
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="simon_bolivar">
                                        <a href="./informacion.php">
                                            <figure>
                                                <img src="./Imagenes/modal/Hotel.jpeg" />
                                                <div class="capa">
                                                    <h3>Hospedaje</h3>
                                                </div>
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="estadio">
                                        <a href="./informacion.php">
                                            <figure>
                                                <img src="./Imagenes/imagen de lugares/campin.jpeg" />
                                                <div class="capa">
                                                    <h3>estadios</h3>
                                                </div>
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="cine_colombia">
                                        <a href="./informacion.php">
                                            <figure>
                                                <img src="./Imagenes/modal/Discoteca.jpeg" />
                                                <div class="capa">
                                                    <h3>Discotecas</h3>
                                                </div>
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="el_corral">
                                        <a href="./informacion.php">
                                            <figure>
                                                <img src="./Imagenes/modal/Centro-Comercial.gif" />
                                                <div class="capa">
                                                    <h3>Centros comerciales</h3>
                                                </div>
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container-fluid" id="contenido">
                <div class="titulo">
                    <h1>Localidades de Bogotá</h1>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="Antonio_Narino">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/Antonio_Nariño.jfif" />
                                    <div class="capa">
                                        <h3>Antonio Nariño</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="Barrios_Unidos">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/Barrios_Unidos.jfif" />
                                    <div class="capa">
                                        <h3>Barrios Unidos</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="Bosa">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/Bosa.jpg" />
                                    <div class="capa">
                                        <h3>Bosa</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="Candelaria">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/Candelaria.jpg" />
                                    <div class="capa">
                                        <h3>Candelaria</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="Chapinero">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/Chapinero.jpeg" />
                                    <div class="capa">
                                        <h3>Chapinero</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="Ciudad_Bolivar">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/Ciudad_Bolivar.jpeg" />
                                    <div class="capa">
                                        <h3>Ciudad Bolivar</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="Engativa">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/Engativa.png" />
                                    <div class="capa">
                                        <h3>Engativa</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="Fontibon">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/Fontibon.jpg" />
                                    <div class="capa">
                                        <h3>Fontibon</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="Kennedy">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/Kennedy.jpg" />
                                    <div class="capa">
                                        <h3>Kennedy</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="Los_Martires">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/Los_Martires.jpg" />
                                    <div class="capa">
                                        <h3>Los Martires</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="Puente_Aranda">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/Puente_Aranda.avif" />
                                    <div class="capa">
                                        <h3>Puente Aranda</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="Rafael_Uribe_Uribe">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/Rafael_Uribe_Uribe.jfif" />
                                    <div class="capa">
                                        <h3>Rafael Uribe Uribe</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="San_Cristobal">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/San_Cristobal.jpg" />
                                    <div class="capa">
                                        <h3>San Cristobal</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="Santafe">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/Santafe.jfif" />
                                    <div class="capa">
                                        <h3>Santa Fe</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="Suba">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/Suba.jpg" />
                                    <div class="capa">
                                        <h3>Suba</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="Sumapaz">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/Sumapaz.jpg" />
                                    <div class="capa">
                                        <h3>Sumapaz</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="Teusaquillo">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/Teusaquillo.jpg" />
                                    <div class="capa">
                                        <h3>Teusaquillo</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="Tunjuelito">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/Tunjuelito.jpg" />
                                    <div class="capa">
                                        <h3>Tunjuelito</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="Usaquen">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/Usaquen.jfif" />
                                    <div class="capa">
                                        <h3>Usaquen</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="Usme">
                            <button data-toggle="modal" data-target="#movedModal"
                                style="background: transparent; border: none;">
                                <figure>
                                    <img src="./Imagenes/img de localidades/Usme.jpg" />
                                    <div class="capa">
                                        <h3>Usme</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Maiores, vero!
                                        </p>
                                    </div>
                                </figure>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalPoliticaPrivacidad" tabindex="-1" role="dialog"
            aria-labelledby="modalPoliticaPrivacidadLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalPoliticaPrivacidadLabel">Política de Privacidad</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>Política de Privacidad de MyBog</h4>
                        <p>
                            En MyBog, valoramos y respetamos tu privacidad. Esta política de privacidad describe cómo
                            recopilamos, utilizamos y protegemos tu información personal cuando utilizas nuestro
                            servicio.
                        </p>
                        <p>
                            <strong>Información Personal:</strong> Recopilamos información personal como tu nombre y
                            dirección de correo electrónico cuando te registras en MyBog.
                        </p>
                        <p>
                            <strong>Uso de la Información:</strong> Utilizamos tu información personal para
                            proporcionarte un mejor servicio y personalizar tu experiencia en MyBog.
                        </p>
                        <p>
                            <strong>Seguridad:</strong> Protegemos tu información personal y no la compartimos con
                            terceros sin tu consentimiento.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal de Términos y Condiciones -->
        <div class="modal fade" id="modalTerminosCondiciones" tabindex="-1" role="dialog"
            aria-labelledby="modalTerminosCondicionesLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTerminosCondicionesLabel">Términos y Condiciones</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>Términos y Condiciones de MyBog</h4>
                        <p>
                            Al utilizar el servicio de MyBog, aceptas cumplir con nuestros términos y condiciones. Por
                            favor, léelos cuidadosamente antes de usar nuestro servicio.
                        </p>
                        <p>
                            <strong>Uso del Servicio:</strong> Está prohibido el uso inapropiado o ilegal de nuestro
                            servicio. No toleramos el spam ni la conducta abusiva.
                        </p>
                        <p>
                            <strong>Contenido del Usuario:</strong> Al publicar contenido en MyBog, garantizas que
                            tienes los derechos necesarios sobre ese contenido.
                        </p>
                        <p>
                            <strong>Cancelación de Cuenta:</strong> Puedes cancelar tu cuenta en cualquier momento si ya
                            no deseas utilizar nuestro servicio.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <nav>
                <ul>
                    <li><a href="#" data-toggle="modal" data-target="#modalPoliticaPrivacidad">Política de
                            privacidad</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#modalTerminosCondiciones">Términos y
                            condiciones</a></li>
                    <li><a href="#">Contacto</a></li>

                </ul>

                <br>
                <p>© 2023 MyBog. Todos los derechos reservados.</p>
            </nav>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./Funcionamiento_por_js/editar_usuario.js"></script>
    <script src="./Funcionamiento_por_js/localidades.js"></script>



</body>

</html>