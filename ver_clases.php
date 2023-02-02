<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
<?php

include("conexion.php");

$consulta_clases = mysqli_query($conexion_bd, "SELECT * FROM clases");

while ($listar_clases = mysqli_fetch_assoc($consulta_clases)) {?>

<div id="mostrar_clase">
	<div class="mostrar">
		<p>Unidad: <?php echo $listar_clases['unidad'];?></p>
		<p>Fecha: <?php echo $listar_clases['fecha'];?></p>
		<ul>
			<li><a href="unidad1.php">Volver</a></li>
		</ul>
	</div>
</div>
<?php } ?>


</body>

