<?php 
session_start();
$nombre = $_POST['name'];
$apellido=$_POST['surname'];
$email=$_POST['email'];
$consulta=$_POST['query'];
$captcha=$_POST['captcha'];
include("conexion.php");
if($captcha==$_SESSION['captcha']){
	mysqli_query($conexion_bd, "INSERT INTO consultas VALUES(DEFAULT, '$nombre', '$apellido', '$email', '$consulta')");
	header("Location: unidad5.php?ok");
} else {
	header("Location: unidad5.php?error");
}
?>