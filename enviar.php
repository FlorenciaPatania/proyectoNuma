<?php
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Email = $_POST['Email'];
$Mensaje = $_POST['Mensaje'];

$header = 'From: ' . $Email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $Nombre . " \r\n";
$message .= "Su e-mail es: " . $Email . " \r\n";
$message .= "Mensaje: " . $_POST['Mensaje'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'consultas.numa@gmail.com';
$asunto = 'Mensaje de:';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>
