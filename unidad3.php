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
		
		<h2>Comentarios</h2>
		<form method="POST" action="unidad3.php">
			<p><b>Nombre y apellido: </b></p> <input type="text" name="name" required>
			<p><b>Correo electrónico: </b></p> <input type="email" name="email" required>
			<p><b>Comentario: </b></p><textarea name="comment" rows="10" cols="50" required></textarea>
			<input type="submit" value="Enviar" name="comment_send" required>
		</form>
	<div class="section_comentarios">	
	<?php
	include("comentarios.php");
    ?></div>
	</section>
	<aside>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>