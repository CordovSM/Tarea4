<?php 


echo "<pre>";
echo print_r($_POST);
echo "</pre>";


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$personas = $_POST["personas"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$comentario = $_POST["comentario"];


$asunto = "Reservación El Pomodoro";

$desde = "From:"."cordova.9512@gmail.com";

$contenido = "Señor/a " .$nombre .$apellido ." su reservación para " .$personas. " para la fecha ".$fecha." a las ".$hora. " ha sido agendada con éxito, teniendo en cuenta los comentarios proporcionados: " .$comentario;


$mensaje = $nombre.$apellido.  " <br> ¡Gracias por reservar en El Pomodoro! <br> Revise su correo";


echo $mensaje;

mail($correo,$asunto,$contenido,$desde)




 ?>