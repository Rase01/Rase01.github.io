<?php

include ("config/conexion.php");
if (isset($_POST['enviar'])) {
    $name = $_POST['nombre'];
    $correo = $_POST['correo'];
    $tel = $_POST['telefono'];
    $msg = $_POST['mensaje'];
    $fecha = date("d/m/y");
    
    $consulta = "INSERT INTO `registros_mensajes`(`regis_nom`, `regis_correo`, `regis_tel`, `regis_fecha`, `regis_msg`) VALUES ('$name','$correo','$tel','$fecha','$msg')";

    $enviar = mysqli_query($connection, $consulta);
}

?>

