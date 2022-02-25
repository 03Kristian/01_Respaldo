<?php

    class PERSONA{
        public $nombre;
        public $edad;

        function __construct($vrnombre, $vredad)
        {
            $this->nombre = $vrnombre;
            $this->edad =$vredad;

        }

        public function getResponsabilidades(){
            $arrayPersona = array(
                'NOMBRE : '=>$this->nombre,
                'EDAD : '=>$this->edad,
            );
            return $arrayPersona;
        }

    }
?>