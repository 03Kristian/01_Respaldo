<?php

    class Employee{

        private $Nombre;
        protected $Celular;
        public $Cargo;
        public $Sueldo;
        static $Transporte_auxiliar;
        protected $Impuesto;

        public function __construct($vrNombre, $vrCelular, $vrCargo, $vrSueldo, $vrTransporte_auxiliar){

            $this->Nombre = $vrNombre;
            $this->Celular = $vrCelular;
            $this->Cargo = $vrCargo;
            $this->Sueldo = $vrSueldo;
            Employee::$Transporte_auxiliar = $vrTransporte_auxiliar;
        }
        public function getdatosEmpleado(){
                $arrayEmpleado = array(
                    'Cargo' =>$this->Cargo,
                    'Sueldo' =>$this->Sueldo,
            );
            return $arrayEmpleado;
            }
                public function setNombre($vrNombre){
                $this->Nombre=$vrNombre;
                }
                public function getNombre(){
                return $this->Nombre;
                }

                public function setCelular($vrCelular){
                $this->Celular = $vrCelular;
                }
                public function getCelular(){
                return $this->Celular;
                }
                
            public function getImpuesto(){
                if ($this->Sueldo > 3750000){
                    $Impuesto = $this->Sueldo*0.09;
                        echo "El empleado debe pagar una ReteFuente del 9% : ".$Impuesto;
                    }else {
                        echo "No paga Retencion en la Fuente. ";
                    }
            }
            public function getTransporteAuxiliar(){
                return $this->Sueldo = $this->Sueldo * Employee::$Transporte_auxiliar;
            }
    }
?>