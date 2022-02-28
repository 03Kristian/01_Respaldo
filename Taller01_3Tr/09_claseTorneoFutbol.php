<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

    class TorneodeFutbol{

        public $Nombre_Equipo;
        public $Numero_Integrantes;
        protected $Estado = "Ascenso";

        public function __construct($vrNombre, $vrIntegrantes)
        {
            $this->Nombre_Equipo = $vrNombre;
            $this->Numero_Integrantes = $vrIntegrantes;
            // $this->Estado = $vrEstado;
        }

        public function getTorneodeFutbol(){
            $arrayEquipo = array(
                'NOMBRE DEL EQUIPO :'=>$this->Nombre_Equipo,
                'NUMERO DE INTEGRANTES :'=>$this->Numero_Integrantes,
                'ESTADO : '=>$this->Estado
            );
            return $arrayEquipo;
        }
    }

?>