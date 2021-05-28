<?php  

	$destinatario='lizetharelydelag19@gmail.com';

	$nombre= $POST['nombre'];
	$email= $POST['email'];
	$asunto= $POST['asunto'];  
	$mensaje= $POST['mensaje'];

	$header="Enviado desde la pagina web";

	$mensajeCompleto= $mensaje . "\nAtentamente: " .$nombre;

	mail($destinatario, $asunto, $mensajeCompleto, $header );

	echo "<script>alert('correo enviado exitosamente' )</script>";

	echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>"

?>