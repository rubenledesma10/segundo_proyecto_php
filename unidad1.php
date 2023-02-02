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
		<h2>Agenda de clases</h2>
	<form action="insertar_clases.php" method="POST">
		<p><b>Unidad</b><p><input type="text" name="unit_query" max-length="30" required>
		<p><b>Fecha</b><p><input type="date"name="date_query" required>
		<input type="submit" value="Insertar">
	</form>
	<?php
	include("ver_clases.php");
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