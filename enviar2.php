<?php
$nombre = $_POST['nombre'];
$talle = $_POST['talle'];
$email = $_POST ['email'];

$header = 'From : ' . $mail . " \r\n";
$header = "X-Mailer: PHP/" . phpversion() . " \r\n";
$header = "Mine-Version: 1.0 \r\n";
$header = "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " , $mail . " \r\n";
$mensaje .= "Reserva: " . $_POST['talle'] . " de la prenda seleccionada \r\n";
$mensaje .= "Enviado el " . date('d/m/Y' , time());

$para = 'nahuelaacevedo@gmail.com'; //
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");

?>