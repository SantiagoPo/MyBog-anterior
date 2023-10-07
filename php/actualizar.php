<?php
session_start();
include_once('config/conexion.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: ./main.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera los datos enviados por POST
    $nuevoNombre = $_POST['nuevoNombre'];
    $nuevoApellido = $_POST['nuevoApellido'];
    $nuevoCorreo = $_POST['nuevoCorreo'];
    $userId = $_SESSION['user_id'];

    // Realiza una consulta SQL para actualizar los datos en la base de datos
    $stmt = $conexion->prepare("UPDATE cuentas SET nombres = ?, apellidos = ?, email = ? WHERE id_usuario = ?");
    $stmt->bind_param('sssi', $nuevoNombre, $nuevoApellido, $nuevoCorreo, $userId);

    if ($stmt->execute()) {
        // Actualización exitosa
        echo 'ok';
    } else {
        // Error en la actualización
        echo 'error';
    }

    // Cierra la conexión
    $stmt->close();
} else {
    // Redirige si no es una solicitud POST válida
    header('Location: main.php');
    exit;
}
?>
