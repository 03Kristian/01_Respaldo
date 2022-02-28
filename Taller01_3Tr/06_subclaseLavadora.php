<?php

    require_once("06_claseElectrodomestico.php");

    class Lavadora extends Electrodomestico{

        public $Cantidad;
        public $Precio;

        function __construct($vrMarca, $vrCantidad, $vrPrecio)
        {
            parent::__construct($vrMarca);
            Electrodomestico::$Iva;
            $this->Cantidad = $vrCantidad;
            $this->Precio= $vrPrecio;
        }

        public function getInfoElectrodomestico(){
            $arrayinfo = array(
                'MARCA :'=>$this->Marca,
                'IVA: '=>Electrodomestico::$Iva,
                'CANTIDAD : '=>$this->Cantidad,
                'PRECIO : '=>$this->Precio,
            );
            return $arrayinfo;
        }
        public function setVenta($vrCantidad){
            $this->Cantidad = $vrCantidad;
            $Venta = $this->Cantidad*$this->Precio;
            $Costo_Iva = $Venta *Electrodomestico::$Iva;
            #echo "El costo de venta por: ".$vrCantidad." 
            return "El costo del Iva del la venta de : ".$this->Cantidad." Electrodomestico es: ".number_format($Costo_Iva);
        }
    }

?>