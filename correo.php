<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$comentario = $_POST['msg'];
$asunto = $_POST['asunto'];

$destino = "contacto@cgsolucionesinmobiliarias.com.mx";


$contenido = "Nombre:  $nombre\n";
$contenido.= "Correo:  $email \n";
$contenido.= "Telefono: $telefono \n";
$contenido.= "Comentario: $comentario \n";
/*
$cabeceras = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
*/
mail($destino, $asunto, $contenido);
header('Location:mensajeEnviado.html');
?>
