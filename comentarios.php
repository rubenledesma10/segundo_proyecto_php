<?php 

if(isset($_POST['comment_send'])){

	date_default_timezone_set("America/Argentina/Mendoza");
	$current_date=date("Y-m-d", time());
	$text="<p><b>Usted completo el formulario el </b></p>".$current_date."<p><b>Su nombre y apellido es : </b></p>".$_POST['name']."<p><b>Su correo electronico es:</b></p>".$_POST['email']."<p><b>El comentario que usted hizo fue: </b></p>".$_POST['comment'];
	$file = fopen("comentarios.text", "a+");
	fwrite($file, $text);
	fpassthru($file);
	fclose($file);
	echo $text;


}


?>
