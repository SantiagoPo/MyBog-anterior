<?php
include_once('config/conexion.php');

if (isset($_SESSION['user_id'])) {
    echo '<li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="./Imagenes/usuario.png" alt="Imagen de perfil" width="32" height="32"> 
                                    
                                </a>
                                <div class="dropdown-menu" aria-labelledby="userDropdown">
                                    <span class="user-info-container">' . $_SESSION['user_id'] . '</span>
                                    <br>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#userModal">Opciones</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#confirmLogoutModal">Cerrar sesión</a>
                                </div>
                            </li>';
} else {
    echo '<li class="nav-item">
                        <a class="nav-link rojo" id="main" href="./main.php">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link amarillo" id="registro" href="./registro.php">Registro</a>
                    </li>';
}

// Verifica si el usuario está autenticado

?>


<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalLabel">Mis Datos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    <ul class="list-group">
                        <li class="list-group-item">Nombre: <span id="nombreUsuario">
                                <?php echo isset($nombres) ? $nombres : ''; ?>
                            </span>
                            <input type="text" id="editNombre" class="form-control" style="display: none;">
                        </li>
                        <li class="list-group-item">Apellido: <span id="apellidoUsuario">
                                <?php echo isset($apellidos) ? $apellidos : ''; ?>
                            </span>
                            <input type="text" id="editApellido" class="form-control" style="display: none;">
                        </li>
                        <li class="list-group-item">Correo: <span id="correoUsuario">
                                <?php echo isset($email) ? $email : ''; ?>
                            </span>
                            <input type="text" id="editCorreo" class="form-control" style="display: none;">
                        </li>

                    </ul>
                </form>
            </div>
            <div class="modal-footer">
                <button id="btnEditar" class="btn btn-primary">Editar Datos</button>
                <button id="btnConfirmar" class="btn btn-success" style="display: none;">Confirmar</button>
                <button id="btnCancelar" class="btn btn-secondary" style="display: none;">Cancelar</button>
                <a id="btnEliminarCuenta" class="btn btn-danger" href="#" data-toggle="modal"
                    data-target="#confirmEliminarModal">Eliminar Cuenta</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmEditarModal" tabindex="-1" role="dialog" aria-labelledby="confirmEditarModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmEditarModalLabel">Confirmar Edición</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas guardar los cambios?
            </div>
            <div class="modal-footer">
                <button id="btnGuardar" class="btn btn-success">Guardar Cambios</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="confirmEliminarModal" tabindex="-1" role="dialog"
    aria-labelledby="confirmEliminarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmEliminarModalLabel">Confirmar Eliminar Cuenta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar tu cuenta? Esta acción no se puede deshacer.
            </div>
            <div class="modal-footer">
                <form method="post" action="php/eliminar.php">
                    <button id="btnConfirmarEliminar" class="btn btn-danger">Eliminar Cuenta</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmLogoutModal" tabindex="-1" role="dialog" aria-labelledby="confirmLogoutModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmLogoutModalLabel">Confirmar cierre de sesión
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que quieres cerrar sesión?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="./php/logout.php">Cerrar sesión</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Mensaje</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
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

<script>
    $(document).ready(function () {
        // Agrega un evento que se active cuando se muestre el modal
        $('#userModal').on('show.bs.modal', function () {
            // Llena los elementos HTML con los datos del usuario
            $('#nombreUsuario').text('<?php echo isset($_SESSION['nombres']) ? $_SESSION['nombres'] : ''; ?>');
            $('#apellidoUsuario').text('<?php echo isset($_SESSION['apellidos']) ? $_SESSION['apellidos'] : ''; ?>');
            $('#correoUsuario').text('<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>');
        });
    });
</script>


