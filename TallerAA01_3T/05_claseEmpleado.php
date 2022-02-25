<?php

    require_once("05_clasePersona.php");

    class Empleado extends Persona{
        
        private $sueldo;
        
        function __construct($vrnombre, $vredad, $vrsueldo)
        {
            parent::__construct($vrnombre, $vredad);
            $this->sueldo =$vrsueldo;
        }

        public function getInformeSueldo(){
            $arraySueldo = array(
                'NOMBRE : '=>$this->nombre,
                'EDAD : '=>$this->edad,
                'SUELDO : '=>$this->sueldo,
            );
            return $arraySueldo;
        }
    }
    //

?>