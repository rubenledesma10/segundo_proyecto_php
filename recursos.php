<?php
include("base_datos.php");
include("producto.php");
include ("carrito.php");	
define('SERV', 'localhost');
define('USUA', 'root');
define('PASS', '');
define('BASE', 'phpavanzado');

$base = new Basedatos(SERV, USUA, PASS, BASE);

$productos = new Productos($base);

$carrito = new Carrito($base);

?>