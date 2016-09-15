<?php
	function confirmacion()
	{
		$para_r = $mail;
		$asunto = "Correo de confirmación - Hules Hupigsa";
		$mensaje = "Hola" . $nombre . ", hemos recibido sus datos. Nos comunicaremos a la brevedad para platicar. \n \n" . "Marco Hernández\n Tel.: 4985-7808";
		$header = "FROM: " . "ventas@huleshupigsa.com;";

		mail($para_r, $asunto, $mensaje, $header);
	}


	$nombre = $_POST['nombre'];
	$mail = $_POST['mail'];
	$telefono = $_POST['telefono'];
	$descripcion = $_POST['descripcion'];

	$para = "hulesparalaindustria@gmail.com";
	$asunto ="Un cliente te ha contactado desde el sitio web.";
	$header = "FROM: " . $mail;
	$mensaje = "Nombre:" . $nombre . "\n E-Mail: " . $mail . " \n Teléfono: " . $telefono . "\n Mensaje:\n " . $descripcion . "\n";

	if (isset($_POST['submit']))
	{
		if (mail($para, $asunto, $mensaje, $header))
		{

			echo "<script language='javascript'>
			alert('Mensaje enviado, muchas gracias.');
			window.location.href = 'http://huleshupigsa.com';
			</script>";			
		}
		else
		{
			echo "Falló el envio, intente de nuevo.";
		}
	}
	else
	{
		echo "<script language='javascript'>
			alert('Mensaje NO enviado, Intente de nuevo');
			window.location.href = 'http://huleshupigsa.com';
			</script>";
	}

?>