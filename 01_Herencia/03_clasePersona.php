<?php
    class Persona {
        protected $cedula;
        public $nombre;
        private $edad;
        
        //static $estado = 'Activo';

//metodo contructor int solo indica recibir enteros
//string recibir cadenas de caracteres de texto
        public function __construct($vrcedula, $vrnombre, $vredad)
        {//Asignar valores
            $this->cedula = $vrcedula;
            $this->nombre = $vrnombre;
            $this->edad = $vredad;
            
        }
//metodos get & set
        public function getCedula()
        {
            return $this->cedula;
        }
        public function setCedula($vrcedula)
        {
            $this->cedula = $vrcedula;
        }
    
    }//end class
?>