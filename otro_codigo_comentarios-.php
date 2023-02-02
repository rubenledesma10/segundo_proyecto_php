<?php 

if(isset($_POST['comment_send'])){
	$name_form=$_POST['name'];
	$email_form=$_POST['email'];
	$comment_form=$_POST['comment'];
	date_default_timezone_set("America/Argentina/Mendoza");
	$current_date=date("Y-m-d", time());
	$text="<p>Usted completo el formulario el </p>".$current_date."<p>Su nombre y apellido es : </p>".$name_form."<p>Su correo electronico es: </p>".$email_form."<p>El comentario que usted hizo fue: </p>".$comment_form;
	$file = fopen("comentarios.text", "a+");
	fwrite($file, $text);
	fpassthru($file);
	fclose($file);
}


?>