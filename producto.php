<?php

class Productos {
    private $bd;
    
    function __construct($base) {
        $this->bd = $base;
    }

    public function listar_productos() {
        $respuesta = $this->bd->ejecutarConsultas("SELECT * FROM productos");
        return $respuesta;
    }
}
?>