<?php

    class Zapatos{

        public $Talla;
        public $Marca;
        public $Stock;

        public function __construct($vrTalla, $vrMarca, $vrStock)
        {
            $this->Talla = $vrTalla;
            $this->Marca = $vrMarca;
            $this->Stock = $vrStock;
        }

        public function getVerInventario(){
            $arrayInfoZapato = array(
                'TALLA : '=>$this->Talla,
                'MARCA : '=>$this->Marca,
                'STOCK : '=>$this->Stock
            );
            return $arrayInfoZapato;
        }

    }

?>