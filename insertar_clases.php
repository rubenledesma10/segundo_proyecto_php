<?php 

$unit_query= $_POST['unit_query'];

$date_query= $_POST['date_query'];

include("conexion.php");

mysqli_query($conexion_bd, "INSERT INTO clases VALUES (DEFAULT, '$unit_query', '$date_query')");

header("Location: ver_clases.php?ok#mostrar_clase");

?>