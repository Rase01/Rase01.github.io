<?php

$destino = 'c_sbravo@outlook.com';
//correo de la empresa.

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$tipo = $_POST['tipo'];
$correo = $_POST['correo'];

$header = "Enviado desde TAVA PERU.";
$asuntoCompleto = $tipo . "Motivo: " . $asunto;

mail($destino, $asuntoCompleto, $mensaje, $header);

?>