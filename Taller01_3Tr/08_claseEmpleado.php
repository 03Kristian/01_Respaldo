<?php

    require_once("08_clasePersona.php");

    class Empleado extends Persona{
        
        private $Sueldo;
        protected $Estado;
        
        function __construct($vr_Nombre, $vr_Edad, $vr_Sueldo, $vr_Estado)
        {
            parent::__construct($vr_Nombre, $vr_Edad);
            $this->Sueldo =$vr_Sueldo;
            $this->Estado =$vr_Estado;
        }

        public function getDatosEmpleado(){
            $arrayInf_empleado = array(
                'DATOS DEL EMPLEADO: '=>"<br>",
                'NOMBRE : '=>$this->Nombre,
                'EDAD : '=>$this->Edad,
                'SUELDO : '=>$this->Sueldo,
                'ESTADO : '=>$this->getEstado(),
                
            );
            return $arrayInf_empleado;
        }
        
        public function getEstado(){
            $this->Estado;
            if ($this->Estado == 1) {
                return $this->Estado ="Activo";
            }else{
                return $this->Estado ="Inactivo";
            }
        }
        public function setEstado($vr_Estado){
            $this->Estado = $vr_Estado;
        }

        public function getPersona(){
            $arraydatosPersonales = array(
                'Datos personales. '=>"<br>",
                'NOMBRE : '=>$this->Nombre,
                'EDAD : '=>$this->Edad,
                'SUELDO : '=>$this->Sueldo,
                'ESTADO : '=>$this->getEstado(false),
            );
            return $arraydatosPersonales;
        }
        
        /* public function setEstado($vr_Estado){
            $this->Estado = $vr_Estado;

                if ($vr_Estado == 1) {
                    $vr_Estado = "Activo"."<br>";
                    echo "Estado del Empleado: ".$vr_Estado;
                }else {
                    $vr_Estado = "Inactivo"."<br>";
                    echo "Estado del Empleado: ".$vr_Estado;
                }
        } */

    }
?>