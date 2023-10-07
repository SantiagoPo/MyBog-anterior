<?php
include_once('config/conexion.php');

if (!isset($_SESSION['user_id'])) {
    // Redirige a main.php
    header('Location: ./main.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Establecimiento</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilos/Style_reg_establecimiento.css">
    <link rel="stylesheet" type="text/css" href="./estilos/HeaderFooter.css">
</head>

<body>
    <div class="wrapper">
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

        <div class="container">
            <div class="row">
                <div class="col-md-6 image-preview-container">
                    <div class="image-preview" id="image-preview"></div>
                </div>
                <div class="col-md-6">
                    <div class="login-box">
                        <h2>Registro de Establecimiento</h2>
                        <form action="php/procesar_registro_establecimiento.php" method="post"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nombre_establecimiento" required>
                                <label>Nombre del Establecimiento</label>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="localidad" required>
                                    <option value="" disabled selected>Seleccione La Localidad</option>
                                    <option value="Chapinero">Chapinero</option>
                                    <option value="Santa Fe">Santa Fe</option>
                                    <option value="San Cristobal">San Cristobal</option>
                                    <option value="Usme">Usmeo</option>
                                    <option value="Tunjuelito">Tunjuelito</option>
                                    <option value="Bosa">Bosa</option>
                                    <option value="Kennedy">Kennedy</option>
                                    <option value="Suba">Suba</option>
                                    <option value="Usaquén">Usaquén</option>
                                    <option value="Barrios Unidos">Barrios Unidos</option>
                                    <option value="Teusaquillo">Teusaquillo</option>
                                    <option value="Los Mártires">Los Mártires</option>
                                    <option value="Puente Aranda">Puente Aranda</option>
                                    <option value="La Candelaria">La Candelaria</option>
                                    <option value="Rafael Uribe Uribe">Rafael Uribe Uribe</option>
                                    <option value="Ciudad Bolívar">Ciudad Bolívar</option>
                                    <option value="Sumapaz">Sumapaz</option </select>
                                    <label>Localidad</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="direccion" required>
                                <label>Dirección</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="telefono" required>
                                <label>Teléfono</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nit" required>
                                <label>NIT</label>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="tipo_establecimiento" required>
                                    <option value="" disabled selected>Seleccione el Tipo de Establecimiento</option>
                                    <option value="restaurante">Restaurante</option>
                                    <option value="hotel">Hotel</option>
                                    <option value="tienda">Tienda</option>
                                </select>
                                <label>Tipo de Establecimiento</label>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="informacion_adicional"
                                    required></textarea>
                                <label>Información Adicional</label>
                            </div>
                            <div class="form-group">
                                <label for="photos">Fotos</label>
                                <input type="file" class="form-control-file" id="photos" name="photos[]"
                                    accept="image/*" multiple required>
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Enviar Registro</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container2">
            <div class="slide">
                <ul>
                    <li><img src="Imagenes/imagen de lugares/parque.jpeg" alt=""></li>
                    <li><img src="Imagenes/imagen de lugares/campin.jpeg" alt=""></li>
                    <li><img src="Imagenes/domo.jpg" alt=""></li>
                    <li><img src="Imagenes/parques/Parque 93.jpeg" alt=""></li>
                </ul>
            </div>
            <div class="slider-controls">
                <button class="slider-control" data-slide="0"></button>
                <button class="slider-control" data-slide="1"></button>
                <button class="slider-control" data-slide="2"></button>
                <button class="slider-control" data-slide="3"></button>
            </div>
        </div>
                <!-- Modal de Política de Privacidad -->
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
                        <li><a href="#" data-toggle="modal" data-target="#modalPoliticaPrivacidad">Política de privacidad</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#modalTerminosCondiciones">Términos y condiciones</a></li>
                        <li><a href="#">Contacto</a></li>

                        <?php
                        if (isset($_SESSION['user_id'])) {
                            echo '';
                        } else {
                            echo '<li><a data-toggle="modal" data-target="#myModal" href="#">deseas registrar tu establecimiento</a></li>';
                        }
                        ?>

                    </ul>

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Mensaje</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    Debes estar logeado/Registrado para utilizar este servicio.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <p>© 2023 MyBog. Todos los derechos reservados.</p>
                </nav>
            </footer>
    </div>
    <script src="./Funcionamiento_por_js/reg_establecimiento.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./Funcionamiento_por_js/editar_usuario.js"></script>
</body>

</html>