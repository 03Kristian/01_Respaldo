<?php

    class Electrodomestico{
        
        public $Marca;
        static $Iva = 0.19;

        function __construct($vrMarca)
        {
            $this->Marca = $vrMarca;
            Electrodomestico::$Iva;
        }

        public function getInformacion(){
            $arrayInformacion = array(
                'MARCA :'=>$this->Marca,
                'IVA: '=>Electrodomestico::$Iva,
            );
            return $arrayInformacion;
        }
    }
?>