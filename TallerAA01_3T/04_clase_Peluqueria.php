<?php

    class Peluqueria{
        public $id_peluqueria;
        public $nombre;
        public $direccion;
        private $telefono;
        public $hora_inicio;
        public $hora_cierre;
        protected $valor_corte;
        private $servicio;

        function __construct($vrid_peluqueria, $vrnombre, $vrdireccion, $vrtelefono, $hr_inicio, $hr_cierre, $vr_corte, $vrservicio)
        {
            $this->id_peluqueria = $vrid_peluqueria;
            $this->nombre = $vrnombre;
            $this->direccion = $vrdireccion;
            $this->telefono = $vrtelefono;
            $this->hora_inicio = $hr_inicio;
            $this->hora_cierre = $hr_cierre;
            $this->valor_corte = $vr_corte;
            $this->servicio = $vrservicio;
        }

        public function getServicio(){
            return $this->servicio;
        }
        public function setServicio($vrservicio){
            $this->servicio = $vrservicio;
        }

        public function getValorCorte(){
            return $this->valor_corte;
        }
        public function setValorCorte($vr_corte){
            $this->valor_corte = $vr_corte;
        }

        public function getAgendarCita(){
            $arrayCita = array(
                'Nombre : '=> $this->nombre,
                'Dirección : '=>$this->direccion,
                'Telefono : '=>$this->telefono,
                'Sercicio : '=>$this->servicio,
                'Corte de Cabello : '=>$this->valor_corte,
            );
            return $arrayCita;
        }
    }
?>