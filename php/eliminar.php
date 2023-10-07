<?php
include_once('../config/conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["user_id"])) {
    $usuarioId = $_SESSION["user_id"];

    // Eliminar registros relacionados en la tabla 'registro_de_establecimiento'
    $sqlEliminarRegistro = "DELETE FROM registro_de_establecimiento WHERE Id_Usuario = ?";
    $stmtEliminarRegistro = $conexion->prepare($sqlEliminarRegistro);
    $stmtEliminarRegistro->bind_param("i", $usuarioId);
    $stmtEliminarRegistro->execute();
    $stmtEliminarRegistro->close();

    // Eliminar la cuenta de usuario en la tabla 'cuentas'
    $sqlEliminarCuenta = "DELETE FROM cuentas WHERE id_usuario = ?"; // Cambiado a 'id' en lugar de 'id_usuario'
    $stmtEliminarCuenta = $conexion->prepare($sqlEliminarCuenta);
    $stmtEliminarCuenta->bind_param("i", $usuarioId);

    if ($stmtEliminarCuenta->execute()) {
        // Destruir la sesión del usuario
        session_destroy();
        exit();
    } else {
        echo "Error al eliminar la cuenta: " . $stmtEliminarCuenta->error;
    }

    $stmtEliminarCuenta->close();
    $conexion->close();
} else {
    // Redirige a la página de inicio de sesión si no se cumplen las condiciones
    header("Location: ../index.php"); // Cambia la URL a la página de inicio de sesión
    exit();
}
?>
