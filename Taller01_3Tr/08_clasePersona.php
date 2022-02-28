<?php

    class Persona{
        
        public $Nombre;
        public $Edad;

        
        function __construct($vr_Nombre, $vr_Edad)
        {
            $this->Nombre = $vr_Nombre;
            $this->Edad =$vr_Edad;
        }

        public function getPersona(){
            $arraydatosPersonales = array(
                'Datos personales. '=>"<br>",
                'NOMBRE : '=>$this->Nombre,
                'EDAD : '=>$this->Edad,
                
            );
            return $arraydatosPersonales;
        }
    }
?>