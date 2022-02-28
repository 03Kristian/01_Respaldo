<?php
class Netflix{
public $Titulo;
public $Rodaje;
public $Alquilar;
private $F_devolucion;

function __construct($vrTitulo,$vrRodaje,$vrAlquilar,$vrF_devolucion){
    $this->Titulo=$vrTitulo;
    $this->Rodaje=$vrRodaje;
    $this->Alquilar=$vrAlquilar;
    $this->F_devolucion=$vrF_devolucion;
}


public function setTitulo($vrTitulo){
    $this->Titulo=$vrTitulo;
}
public function getTitulo(){
    return $this->Titulo;
}


public function setRodaje($vrRodaje){
    $this->Rodaje=$vrRodaje;
}
public function getRodaje(){
    return $this->Rodaje;
}


public function setAlquilar($vrAlquilar){
    $this->Alquilar=$vrAlquilar;
}
public function getAlquilar(){
    return $this->Alquilar;
}

public function setDevolucion($vrF_devolucion){
    $this->F_devolucion=$vrF_devolucion;
}
public function getDevolucion(){
    return $this->F_devolucion;
}

public function setCostodeAlquiler($vrF_devolucion){
    $this->F_devolucion=$vrF_devolucion;
    if($vrF_devolucion<=5){
    $Fecha = date("d-m-Y");
    $Costo = 4000 * $vrF_devolucion;
    echo "Fecha de inicio : ".$Fecha."<br>";
    echo "Fecha prevista de entrega : ".date("d-m-Y",strtotime($Fecha."+ $vrF_devolucion days"))."<br>"; 
    echo " El costo del Alquiler de la Pelicula es: ".$Costo."$"."<br>";
    }else{
    echo " El Alquiler de la Pelicula presenta demora de: ";
    }
    
}
}
?>