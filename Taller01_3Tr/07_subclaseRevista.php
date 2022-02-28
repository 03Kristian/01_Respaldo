<?php

    require_once("07_claseLibro.php");

    class Revista extends Libro{

        public $Edicion;
        public $Cantidadpag;

        function __construct($vrcodigo, $vrTitulolib, $vrautor, $vrEdicion, $vrCantidadpag)
        {
            parent::__construct($vrcodigo, $vrTitulolib, $vrautor);
            $this->Edicion = $vrEdicion;
            $this->Cantidadpag = $vrCantidadpag;

        }

        public function getEdicion(){
            return $this->Edicion;
        }
        public function setEdicion($vrEdicion){
            return $this->Edicion = $vrEdicion;
        }
        public function getNumpaginas(){
            return $this->Cantidadpag;
        }
        public function setNumpaginas($vrCantidadpag){
            $this->Cantidadpag = $vrCantidadpag;
        }
        public function getInformelibro(){
            $arraydetalle = Array(
                'Codigo del libro: '=>$this->codigo,
                'Titulo del libro: '=>$this->Titulolib,
                'Autor: '=>$this->autor,
                'Edicion: '=>$this->Edicion,
                'Numero de paginas: '=>$this->Cantidadpag,
    
            );
            return $arraydetalle;
        }
    }
?>