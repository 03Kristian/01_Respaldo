<?php

require_once("02_claseUsuario.php");

class CuentaBancaria extends Usuario{

    private $codigo;
    private $tipoC;
    private $saldo;
    public $vr_retiro;
    

    function __construct($vrcedula, $vrnombre, $vrsalario, $vremail, $vrpassword, $vrcodigo, $vrtipoC, $vrsaldo)
        {
            parent::__construct($vrcedula, $vrnombre, $vrsalario, $vremail, $vrpassword);
            $this->codigo = $vrcodigo;
            $this->saldo = $vrsaldo;
            $this->tipoC = $vrtipoC;
            
        }

    public function getsaldo(){
        return $this->saldo; 
    }

    public function setsaldo($vrsaldo){
        $this->saldo= $vrsaldo;
    }
    public function setValor_retiro($vr_retiro){
        $this->vr_retiro = $vr_retiro;
    }
    public function Retiro($vr_retiro){
        if ($this->saldo > $vr_retiro) {
            echo "EL usuario puede realizar el retiro del monto seleccionado: ";
            $this->saldo = $this->saldo - $vr_retiro;
        }
        return $this->saldo;
    }
    

}
?>