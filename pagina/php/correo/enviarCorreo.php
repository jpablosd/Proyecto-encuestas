<?php
header('Content-Type: application/json');

require('PHPMailerAutoload.php');

// $mailaEnviar = $_GET[''];
// $mensajeaEnviar = $_GET[''];
// $asuntoaEnviar = $_GET[''];

$mailaEnviar = "juanpablo.soto17@gmail.com";
$mensajeaEnviar = "Estimado, se ha registrado en el proyecto de encuestas";
$asuntoaEnviar = "Registro Exitoso en Aplicación de Encuestas";

$mail = new PHPMailer();

// Timeout para el servidor de correos. Por defecto es valor es '10'
$mail->Timeout=30;

// Codificación UTF8. Obligado utilizarlo en aplicaciones en Español
$mail->CharSet = 'UTF-8';

$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = "smtp.live.com"; // SMTP a utilizar. Por ej. smtp.elserver.com
$mail->Username = "juanpablo.soto@hotmail.cl"; // Correo completo a utilizar
$mail->Password = "jotape17"; // Contraseña
$mail->Port = 587; // Puerto a utilizar
$mail->From = "juanpablo.soto@hotmail.cl"; // Desde donde enviamos (Para mostrar)
$mail->FromName = "Administrador";
$mail->AddAddress($mailaEnviar); // Esta es la dirección a donde enviamos
//  $mail->AddCC($correo); // Copia
//$mail->AddBCC("cuenta@dominio.com"); // Copia oculta
$mail->IsHTML(true); // El correo se envía como HTML
$mail->Subject = $asuntoaEnviar; // Este es el titulo del email.
$body = $mensajeaEnviar;
//$body .= "/n Acá continuo el <strong>mensaje</strong>";
$mail->Body = $body; // Mensaje a enviar
//$mail->AltBody = "Hola mundo. Esta es la primer línean. Acá continuo el mensaje";//Texto sin html
// $mail->AddAttachment($vartemp, $varname);
$exito = $mail->Send(); // Envía el correo.
if($exito){
    $response["success"] = 1;
    echo json_encode($response, JSON_PRETTY_PRINT);
}
else{
    $response["success"] = 0;
    echo json_encode($response, JSON_PRETTY_PRINT);
}







