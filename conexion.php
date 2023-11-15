<?php
$nombre = $_POST['Nombre'];
$telefono = $_POST['Telefono'];
$correo = $_POST['Correo'];
$tema = $_POST['Tema'];
$mensaje = $_POST['Mensaje'];

$header = 'From: ' . $correo . '\r\n';
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";

$message = 'Este mensaje fue enviado por: ' . $nombre . '\r\n';
$message .= 'Su telefono de contacto es: ' . $telefono . '\r\n';
$message .= 'El correo electronico del remitente es: ' . $correo . '\r\n';
$message .= 'El tema que se le ha asignado es: ' . $tema . '\r\n';
$message .= 'A continuacion, el mensaje que acompaña este email es:' . '\r\n' . $mensaje;

$para = 'xxxxxxxxxxxxxxx@gmail.com';
$asunto = 'Contacto desde la pagina web';

mail($para, $asunto, utf8_decode($message), $header);
header('Location: index.html');

?>