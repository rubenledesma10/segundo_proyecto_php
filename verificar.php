<?php
include("conexion.php");
$password = $_POST['password'];
$email = $_POST['email'];

$query = mysqli_query($conexion_bd, "SELECT email, password FROM registro WHERE email='$email'");

if(mysqli_num_rows($query)==0){
	header("Location: unidad8.php?email_error");
	$codificado = mysqli_fetch_assoc($query);
	$verificar = password_verify($password, $codificado['password']);
	if (!$verficar){
		header("Location: unidad8.php?email_pass_error");
	}
	
} else {
	$codificado = mysqli_fetch_assoc($query);
	$verificar = password_verify($password, $codificado['password']);
	if($verificar){
		header("Location: unidad8.php?pass_ok");
	} else {
		header("Location: unidad8.php?pass_error");
	}
	
}




?>
