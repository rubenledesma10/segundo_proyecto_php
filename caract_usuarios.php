<?php
include("usuarios.php");

$caract_usuarios= new Usuarios("Rubén", "Ledesma", ("1996-11-29"));
$caract_usuarios->imprime_caracteristicas();

?>