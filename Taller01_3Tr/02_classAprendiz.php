<?php

    class Aprendiz{

        private $dni;
        private $Apellidos;
        private $Nombre;
        public $Asignatura;
        protected $Parcial1;
        protected $Parcial2;
        protected $Parcial3;
        //public $Definitiva;

        function __construct($vrdni, $vrApellidos, $vrNombre, $vrAsignatura, $vrParcial1, $vrParcial2, $vrParcial3)
        {
            $this->dni=$vrdni;
            $this->Apellidos = $vrApellidos;
            $this->Nombre=$vrNombre;
            $this->Asignatura=$vrAsignatura;
            $this->Parcial1=$vrParcial1;
            $this->Parcial2=$vrParcial2;
            $this->Parcial3=$vrParcial3;
             
        }

        public function getDefinitiva(){
            return $this->Parcial1 = ($this->Parcial1 * 0.3)+($this->Parcial2 * 0.3)+($this->Parcial3 * 0.4);
        }

        public function getConceptoValoratorio(){
            if ($this->Parcial1 <= 2) {
                echo "Promedio del estudiante es Malo"."<br>";
            }elseif ($this->Parcial1 >= 3 and $this->Parcial1 < 4) {
                echo "Promedio del estudiante es Aceptable"."<br>";
            }elseif ($this->Parcial1 == 4 and $this->Parcial1 < 4.5) {
                echo "Promedio del estudiante es Excelente"."<br>";
            }
            return $this->Parcial1;
        }

        public function getValoravionCualitativa(){
            if ($this->Parcial1 >=3.5) {
                echo "El Aprendiz Aprovó la competencia"."<br>";
            }else {
                echo "El Aprendiz Reprobó la competencia"."<br>";
            }
        }

        public function getInformeAprendiz(){
            $arrayAprendiz = Array(
                'Documento de Identidad: '.$this->dni,
                'Nombre del Aprendiz: '.$this->Nombre,
                'Apellidos: '.$this->Apellidos,
                'Asignatura: '.$this->Asignatura,
            );
            return $arrayAprendiz;
        }
    }

?>