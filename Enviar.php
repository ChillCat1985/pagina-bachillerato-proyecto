<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="Text-html"; charset="utf-8"/>
	<meta name=description content="Quetzware"/>
	<meta name=author content="Juan Luis Parra Camarena"/>
	<title> Quetzware (Contacto Enviado)</title>
	<link rel="stylesheet" type="text/css" href="Estilos/Estilo_Contacto.css"/>
</head>
<body>

	<audio controls>
    <source src="Audio/RONINCLOUD - Grey.mp3" autoplay="true" type="audio/mpeg">
    </audio>

	<img class="Logotipo" src="Imágenes/Quetzware.png">


	<header>
		<nav class="navegacion">
			<ul class="menu">
				<li><a href="#">Inicio</a></li>
				<li><a href="Nosotros.html">Nosotros</a></li>
				<li><a href="#">Servicios</a>
					<ul class="submenu">
						<li><a href="#">Hecho Con Quetzware</a></li>
						<li><a href="#">Tutoriales</a></li>
						<li><a href="#">Descargas</a></li>
					</ul>
				</li>
				<li><a href="#">Portafolio</a>
					<ul class="submenu">
						<li><a href="#">Sitos Web</a></li>
						<li><a href="#">Apps</a></li>
					</ul>
				</li>
				<li><a href="#">Clientes</a></li>
				<li><a href="#">Contacto</a></li>
			</ul>
		</nav>
	</header>

	<center>
		<?php 
$myemail = 'ChillCat1985@outlook.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>

		<form method="post" action="Enviar.php">
			<imput type="text" name="nombre" placeholder="NOMBRE">
				<imput type="email" name="email" placeholder="CORREO">
					<textarea type="text" name="mensaje" placeholder="MENSAJE"></textarea>
					<imput type="submit" value="ENVIAR">
		</form>
	</center>



	</body>
</html>