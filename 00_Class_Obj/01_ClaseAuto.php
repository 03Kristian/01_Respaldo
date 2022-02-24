<?php
    class Vehiculo {
//Atributos
        protected $placa;
        public $marca;
        public $modelo;
        public $kilometraje;
        public $velocidad;
        public $tiempo;
        //public $distancia;
        //public $fecha_registro = date("j, n, Y");
        #public $fecha = date("Y-m-d");

//Constructor
        public function __construct($vrplaca, $vrmarca, $vrmodelo, $vrkilometraje, $vrvelocidad, $vrtiempo){
            $this->placa = $vrplaca;
            $this->marca = $vrmarca;
            $this->modelo = $vrmodelo;
            $this->Kilometraje = $vrkilometraje;
            $this->fecha_registro = date("j, n, Y");
            $this->velocidad = $vrvelocidad;
            $this->tiempo = $vrtiempo;

        }

//Metodos
//metodos getters y setters
        public function getvehiculo(){
            $arrayvehiculo = Array(
            'Placa: ' => $this->placa,
            'Marca: ' => $this->marca,
            );
            return $arrayvehiculo;
        }

        public function distancia(){
            $distancia = $this->velocidad * $this->tiempo;
            return $distancia;
        }
        //getter mostrar la informacion del atributo marca
        public function getmarca(){
            return $this->marca;
            
        }
        //setter asignar la informacion al atributo marca
        public function setmarca($marca){
            $this->vrmarca = $marca;
        }
        
        public function getplaca(){
            return $this->placa;
        }
        public function setplaca($vrplaca){
            $this->placa = $vrplaca;
        }
    }
?>