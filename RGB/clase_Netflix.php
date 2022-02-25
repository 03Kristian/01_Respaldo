<?php

    class NNetflix{

        public $Titulo;
        public $Año;
        private $Alquiler;
        static $Fecha_devolucion;


        public function __construct($vrTitulo, $vrAño, $vrAlquiler, $vrFecha_devolucion)
        {
            $this->Titulo = $vrTitulo;
            $this->Año = $vrAño;
            $this->Alquiler = $vrAlquiler;
            NNetflix::$Fecha_devolucion = $vrFecha_devolucion;
            $this->fecha = new DateTime();
            
        }

        public function getTitulo(){
            return $this->Titulo;
        }
        public function setTitulo($vrTitulo){
            $this->Titulo = $vrTitulo;
        }

        public function getAño(){
            return $this->Año;
        }
        public function setAño($vrAño){
            $this->Año = $vrAño
            ;
        }
        public function getAlquiler(){
            return $this->Alquiler;
        }
        public function setAlquiler($vrAlquiler){
            $this->Alquiler = $vrAlquiler;
        }

        public function getFechaDevolucion(){
            return $this->Fecha_devolucion;
        }
        public function setFechaDevolucion($vrFecha_devolucion){
            $this->Fecha_devolucion = $vrFecha_devolucion;
        }

        public function setCostoAlquiler(){

            //$this->fecha = new DateTime();
            //$this->Fecha_devolucion = new DateTime("2022-02-28");
            $this->diff = $this->fecha->diff(NNetflix::$Fecha_devolucion);

            
            if ($this->diff->days <= 5) {
                $this->pago = $this->diff->days * 4000;
                
                return $this->diff->days . ' dias'."  El pago por alquiler: ".$this->pago;
            }else {
                $this->pago = $this->diff->days * 4000;
                return $this->diff->days . ' dias '."  El pago por alquiler presenta Entrega tardia : ".$this->pago;

            }
            
        }
    }
//public DateTime::diff(DateTimeInterface $, bool $datetime2absolute = false): DateInterval
            //return $this->Intervalo = $this->Fecha_Inicio->diff($this->Fecha_devolucion);
            //return $this->Intervalo;
?>