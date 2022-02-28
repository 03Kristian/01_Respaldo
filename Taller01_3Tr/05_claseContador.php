<?php

    require_once("05_clasePersona.php");

    class Contador extends PERSONA{
        protected $diaslaborados;

        function __construct($vrnombre, $vredad, $vrsueldo_jornal, $vrdiaslaborados)
        {
            parent::__construct($vrnombre, $vredad);
            $this->sueldo_jornal = $vrsueldo_jornal;
            $this->diaslaborados = $vrdiaslaborados;
        }

        public function getDiaslaborales(){
            $Salario = $this->sueldo_jornal * $this->diaslaborados;
            return 'Salario por dias Laborados en la jornada : '.$Salario;
        }

    }
    
?>