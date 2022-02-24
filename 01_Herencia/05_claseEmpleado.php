<?php
    require_once("03_clasePersona.php");

    class Empleado extends Cliente{

        private $puesto;

        public function __construct($vrcedula, $vrnombre, $vredad, $vrcredito, $vrpuesto)
        {
            //parent:: Llevo los datos al constructor de la clasePersona
            parent::__construct($vrcedula, $vrnombre, $vredad, $vrcredito);
            $this-> puesto = $vrpuesto;
        }
        
        public function getPuesto()
        {
            return $this->puesto;
        }
    }
?>