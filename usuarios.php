<?php
class Usuarios {
	private $nombre;
	private $apellido;
	private $fecha_nacimiento;

	public function __construct($nom, $apell, $edad){
		$this->nombre=$nom;
		$this->apellido=$apell;
		$this->fecha_nacimiento=$edad;

	}

	private function calcular_edad (){
		date_default_timezone_set("America/Argentina/Mendoza");
		$today= date("Y-m-d");
		$substraction=strtotime($today)-strtotime($this->fecha_nacimiento);
		$edad=intval($substraction/31536000);
		return $edad;
	}

	public function imprime_caracteristicas (){
		echo "<p><b>Tu nombre es: </b>" .$this->nombre. "</p>";
		echo "<p><b>Tu apellido es: </b>" .$this->apellido. "</p>";
		$user_age= $this->calcular_edad();
		echo "<p><b>Tu edad es: </b>" .$user_age. "</p>";

	}
}
?>