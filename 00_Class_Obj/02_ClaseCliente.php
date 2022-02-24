<?php
    class Cliente {
        protected $nombre;
        private $email;
        private $edad;
        private $clave;
        protected $fecha_registro;
        static $estado = 'Activo';
//Asignar
        public function __construct($vrnombre, $vremail, $vredad)
        {
            $this->nombre = $vrnombre;
            $this->email = $vremail;
            $this->edad = $vredad;
            $this->clave = rand();
            $this->fecha_registro = date("j, n, Y");
        }

        public function getnombre(){
            return $this->nombre;
        }

        public function getemail(){
            return $this->email;
        }
        public function getedad(){
            return $this->edad;
        }
        public function getclave(){
            return $this->clave;
        }

    }
?>

