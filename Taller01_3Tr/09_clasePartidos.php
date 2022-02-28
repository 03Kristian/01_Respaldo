<?php

    require_once("09_claseTorneoFutbol.php");

    class Partidos extends TorneodeFutbol{

        private $Partidos_ganados;
        public $Estado;
        public $Total_Puntaje;

        public function __construct($vrNombre, $vrIntegrantes, $vrp_Ganados, $vr_Puntaje)
        {
            parent::__construct($vrNombre, $vrIntegrantes);
            $this->Partidos_ganados =$vrp_Ganados;
            $this->Total_Puntaje = $vr_Puntaje;
        }

        public function getTorneodeFutbol(){
            $arrayEquipo = array(
                'NOMBRE DEL EQUIPO :'=>$this->Nombre_Equipo,
                'NUMERO DE INTEGRANTES :'=>$this->Numero_Integrantes,
                'ESTADO : '=>$this->getEstado(),
                'NUMERO DE PARTIDOS GANADOS: '=>$this->Partidos_ganados,
                'PUNTAJE TOTAL : '=>$this->Total_Puntaje
            );
            return $arrayEquipo;
        }

        public function getEstado(){
            $this->Total_Puntaje;
            if ($this->Total_Puntaje >= 15) {
                return $this->Estado = "Asenso";
            }else{
                return $this->Estado = "Desenso";
            }
        }
    }




?>