<?php

class Cliente {
    private $cedula;
    public $nombre;
    protected $salario;
//,string $vremail,int $vredad
    function __construct(int $vrcedula,string $vrnombre,float $vrsalario){
        
        $this ->cedula=$vrcedula;
        $this ->nombre=$vrnombre;
        $this ->salario=$vrsalario;

    }
    
    function getcedula(){
        return $this->cedula;
    }
    public function getsalario(){
        return $this->salario;
    }
    //set : cambiar los valores del atributo
    function setsalario($vrsalario){
        $this->salario = $vrsalario;
    }
    
}//end


?>