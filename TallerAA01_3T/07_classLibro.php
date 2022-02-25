<?php

class Libro{

    private $codigo;
    public $libro;
    public $autor;

    public function __construct($vrcodigo, $vrlibro, $vrautor)
    {
        $this->codigo = $vrcodigo;
        $this->libro = $vrlibro;
        $this->autor = $vrautor;
    }

    public function getDetallesLibro(){
        $arraydetalle = Array(
            'Codigo del libro: '.$this->codigo,
            'Titulo del libro: '.$this->libro,
            'Autor: '.$this->autor,

        );
        return $arraydetalle;

    
    }
}
?>