<?php
$password = password_hash($_POST['password'], PASSWORD_DEFAULT, array('cost'=>4));
$email = $_POST['email'];

include("conexion.php");

mysqli_query($conexion_bd, "INSERT INTO registro VALUES ('$email', '$password')");
header("Location: unidad8.php?reg");
?>