<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "pablo.orellanaub@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje Postulante
mail($correopostulante, $asunto, $carta);
// Enviando Mensaje Representante
mail($correopostulante, $asunto, $carta);
// Enviando Mensaje a evaluador (alguien del gobierno)
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');

?>