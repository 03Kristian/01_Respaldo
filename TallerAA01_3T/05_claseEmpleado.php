<?php

    require_once("05_clasePersona.php");

    class EMPLEAD0 extends PERSONA{
        
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
        public function getSueldo(){
            return $this->sueldo;
        }
    }
    //

?>