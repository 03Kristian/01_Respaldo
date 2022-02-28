<?php

class Libro{

    public $codigo;
    public $Titulolib;
    public $autor;

    public function __construct($vrcodigo, $vrTitulolib, $vrautor)
    {
        $this->codigo = $vrcodigo;
        $this->Titulolib = $vrTitulolib;
        $this->autor = $vrautor;
    }

    public function getDetallesLibro(){
        $arraydetalle = Array(
            'Codigo del libro: '=>$this->codigo,
            'Titulo del libro: '=>$this->Titulolib,
            'Autor: '=>$this->autor,

        );
        return $arraydetalle;

    
    }
}
?>