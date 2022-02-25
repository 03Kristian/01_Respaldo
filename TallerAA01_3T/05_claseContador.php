<?php

    require_once("05_clasePersona.php");

    class Contador extends Persona{
        public $diaslaborados;

        function __construct($vrnombre, $vredad, $vrsueldo, $vrdiaslaborados)
        {
            parent::__construct($vrnombre, $vredad);
            $this->sueldo = $vrsueldo;
            $this->diaslaborados = $vrdiaslaborados;
        }

    }
    
?>