<?php

	
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$asunto = "Asunto:". "\n ";
$carta = "From: noreply@example.com" . " \r\n ";
$carta.= "Reply-to: noreply@example.com"." \r\n";
$carta.= "X-Mailer: PHP/". phpversion();
$mail = @mail($email, $asunto, $mensaje, $carta);
 header('location:mensaje_nuevo.html');
		











