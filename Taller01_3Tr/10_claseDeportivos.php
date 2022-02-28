<?php

    require_once("10_claseZapatos.php");

    class Deportivos extends Zapatos{

        public $Descripcion;
        public $Precio;
        private $Cantidad;

        public function __construct($vrTalla, $vrMarca, $vrStock, $vrDescripcion, $vrPrecio, $vrCantidad)
        {
            parent::__construct($vrTalla, $vrMarca, $vrStock);
            $this->Descripcion = $vrDescripcion;
            $this->Precio = $vrPrecio;
            $this->Cantidad = $vrCantidad;
        }

        public function getVerInventario(){
            $arrayInfoZapato = array(
                'TALLA : '=>$this->Talla,
                'MARCA : '=>$this->Marca,
                'STOCK : '=>$this->Stock,
                'DESCRIPCION : '=>$this->Descripcion,
                'PRECIO : '=>$this->Precio,
                'CANTIDAD : '=>$this->Cantidad,
            );
            return $arrayInfoZapato;
        }

        public function setCompra($vrCantidad){
            $this->Cantidad = $vrCantidad;

            if ($this->Cantidad <= $this->Stock) {
                $Pedio = "Comprando : ".$this->Descripcion;
                return $Pedio;
            }else {
                $Pedio = "No se puede realizar la venta. ";
                return $Pedio;
            }
        }

    }
?>