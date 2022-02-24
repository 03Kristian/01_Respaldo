<?php
     class Producto{

        public $descripcion;
        public $precio;
        public $stock_minimo;
        static $estado = "ACTIVO";


        public function __construct($vrdescipcion, $vrprecio, $vrstock_minimo, $vrestado){
            $this->descripcion = $vrdescipcion;
            $this->precio = $vrprecio;
            $this->stock_minimo = $vrstock_minimo;
            Producto::$estado = $vrestado;
            //$this->estado = $vrestado;
        }
        public function getinfoproducto(){
            $arrayinfo= Array(
                'Descripcion : ' => $this->descripcion,
                'Precio : ' => $this->precio,
                'Stock : ' => $this->stock_minimo,
                'Estado : ' => Producto::$estado,
            );
            return $arrayinfo;
        }
        public function getprecio(){
            return $this->precio;
        }
        public function setprecio($vrprecio){
            $this->precio = $vrprecio;
        }
     }
?>