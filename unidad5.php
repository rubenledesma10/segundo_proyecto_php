<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container" style="height: 1000px;">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Consultas</h2>
		<?php
		function contenido_captcha() {
			$pattern = "1234567890abcdefghijkmnsoprqtuvwyz$%&/";
			$key = '';
			for($i=0; $i<8; $i++){
				$key.= $pattern[rand(0, 38)];
			}
			return $key;
		}
		$_SESSION['captcha']=contenido_captcha();
		?>
		<form method="POST" action="cargar.php">
			<p><b>Nombre: </b></p><input type="text" name="name" required>
			<p><b>Apellido: </b></p><input type="text" name="surname" required>
			<p><b>Email: </b></p><input type="email" name="email" required>
			<p><b>Consulta: </b></p><textarea name="query" rows="10" cols="50" required></textarea>
			<p><img src="image_captcha.php"></p>
			<p><input type="text" name="captcha"></p>
			<p><input type="submit" name="send_consult" value="Enviar" required></p>

		</form>
		<?php
		if(isset($_GET['ok'])){
			echo "<b>¡Su consulta fue cargada exitosamente!</b>";
		}
		if(isset($_GET['error'])){
			echo "<b>¡ERROR! Su consulta no pudo ser cargada.</b>";
		}
		?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>