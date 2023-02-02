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
		<h2>Eventos</h2>

		<form method="POST" action="unidad2.php">
			<p><b>Elige un día: </b></p> <input type="number" name="day" min="1" max="31" required>
			<p><b>Elige un mes: </b></p> <input type="number" name="month" min="1" max="12" required>
			<p><b>Elige un año: </b></p> <input type="number" name="year" min="2022" max="2026">
			<input type="submit" value="Calcular">

		</form>
		<?php 

		include("calculo_fecha.php");

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