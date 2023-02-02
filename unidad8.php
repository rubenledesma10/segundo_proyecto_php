<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Registro</h2>
		<form method="POST" action="codificar.php">
			<p><b>Email: </b> <input type="email" name="email" required maxlength="80"></p>
			<p><b>Contraseña: </b> <input type="password" name="password" required maxlength="10"></p>
			<input type="submit" value="Registrarse" name="ingresar" required>
		</form>
		<p><b><?php if(isset($_GET['reg'])){ echo "¡Registro exitoso!";
		}?></b></p>

		<h2>Verificar registro</h2>
		<form method="POST" action="verificar.php">
			<p><b>Email: </b> <input type="email" name="email" required maxlength="80"></p>
			<p><b>Contraseña: </b> <input type="password" name="password" required maxlength="10"></p>
			<input type="submit" value="Verificar registro" name="ingresar" required>
		</form>
		<p><b><?php if(isset($_GET['pass_ok'])){echo "¡Email y contraseña verificados corretamente!";} ?></b></p>
		<p><b><?php if(isset($_GET['pass_error'])){echo "Contraseña incorrecta, inténtelo nuevamente...";} ?></b></p>
		<p><b><?php if(isset($_GET['email_error'])){echo "Email incorrecto, intentelo nuevamente ";} ?></b></p>
		<p><b><?php if(isset($_GET['email_pass_error'])){echo "Email y contraseña incorrectos, intentelo nuevamente ";} ?></b></p>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>