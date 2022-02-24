<?php
    require_once("01_claseProducto.php");

    class Mueble extends Producto{

        public $color;
        public $material;
        //asigno
        public function __construct($vrdescipcion, $vrprecio, $vrstock_minimo, $vrestado, $vrcolor, $vrmaterial){
            parent::__construct($vrdescipcion, $vrprecio, $vrstock_minimo, $vrestado);
            $this->color = $vrcolor;
            $this->material = $vrmaterial;
        }
        public function getinfoproducto(){
            $arrayinfo= Array(
                'Descripcion : ' => $this->descripcion,
                'Precio : ' => $this->precio,
                'Stock : ' => $this->stock_minimo,
                'Estado : ' => Producto::$estado,
                'Color : ' => $this->color,
                'Material : ' =>$this->material,
            );
            return $arrayinfo;
        }

    }


?>