<?php
include_once("base_datos.php");
include_once("producto.php");
include_once("carrito.php");	
define('SERV', 'localhost');
define('USUA', 'root');
define('PASS', '');
define('BASE', 'phpavanzado');

$base = new Basedatos(SERV, USUA, PASS, BASE);

$productos = new Productos($base);

$carrito = new Carrito($base);

?>