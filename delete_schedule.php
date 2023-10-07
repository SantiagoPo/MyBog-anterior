<?php 
require_once('./config/conexion.php');
if(!isset($_GET['id'])){
    echo "<script> alert('Id. de programa no definido.'); location.replace('./') </script>";
    $conexion->close();
    exit;
}

$delete = $conexion->query("DELETE FROM `schedule_list` where id = '{$_GET['id']}'");
if($delete){
    echo "<script> alert('El evento se ha eliminado con éxito.'); location.replace('./') </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$conexion->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$conexion->close();

?>