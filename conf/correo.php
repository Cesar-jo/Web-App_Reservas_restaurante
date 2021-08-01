<?php

//CREACION DE LAS VARIABLES PARA MANDAR EL MENSAJE AL CORREO MEDIANTE EL METODO POST
$destinatario = 'valladarescesar.mc@gmail.com';

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje= $_POST['mensaje'];
$email = $_POST['email'];


$header = "enviado desde tu restaurante preferido, la perrona. Puedes poner el nombre  que quieras si gustas comprar este pequeño sistema.";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo "<script>alert( 'Correo enviado exitosamente' )</script>";
echo "<script>setTimeout(\'location.href=index.html'\",1000)</script>";

?>