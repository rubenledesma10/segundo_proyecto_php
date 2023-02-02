<?php 

if ($_POST) {
	date_default_timezone_set("America/Argentina/Mendoza");
	$day= $_POST['day'];
	$month = $_POST ['month'];
	$year= $_POST ['year'];
	$current_date= date('Y-m-d', time());
	$difference_days = strtotime($year.'-'.$month.'-'.$day)-strtotime($current_date);

	if ($difference_days>=0){
		echo '<p><b>Faltan ' .$difference_days/(86400). ' días para la fecha que usted ingresó</b></p>';
	}

	else {
		echo '<p><b>Han pasado ' .$difference_days/(-86400). ' días de la fecha que usted ingresó</b></p>';
	}

}
?>