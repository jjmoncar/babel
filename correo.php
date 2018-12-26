<?php

require("phpMailer/_lib/class.phpmailer.php");

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = "mail.superhosting.web.ve "; // SMTP a utilizar. Por ej. smtp.elserver.com
$mail->Username = "jjmoncar@superhosting.web.ve"; // Correo completo a utilizar
$mail->Password = "3tP88goO9v"; // Contraseña
$mail->Port = 465; // Puerto a utilizar
$mail->From = "jjmoncar@superhosting.web.ve"; // Desde donde enviamos (Para mostrar)
$mail->FromName = "administrador";
$mail->AddAddress("locoweb10@hotmail.com"); // Esta es la dirección a donde enviamos
//$mail->AddCC("cuenta@dominio.com"); // Copia
//$mail->AddBCC("cuenta@dominio.com"); // Copia oculta
$mail->IsHTML(true); // El correo se envía como HTML
$mail->Subject = "Titulo"; // Este es el titulo del email.
$body = "Hola mundo. Esta es la primer línea<br />";
$body .= "Acá continuo el <strong>mensaje</strong>";
$mail->Body = $body; // Mensaje a enviar
$mail->AltBody = "Hola mundo. Esta es la primer línean Acá continuo el mensaje"; // Texto sin html
//$mail->AddAttachment("imagenes/imagen.jpg", "imagen.jpg");
$exito = $mail->Send(); // Envía el correo.

if($exito){
	echo 'El correo fue enviado correctamente.';
}else{
	echo 'Hubo un inconveniente. Contacta a un administrador.';
}

?>