<?php
    require_once("01_claseProducto.php");
    require_once("02_claseMueble.php");

$objProducto = new Producto("Escritorio Medidas 1.20 cm ", 430000, 10, "Activo");
//$objProducto->getinfoproducto();
print_r('<pre>');
echo "<h2> Datos de la clase Producto </h2>";
echo "Valor del producto: ".$objProducto->getPrecio()."<br>";
$objProducto->getinfoproducto();
    print_r('<pre>');
    print_r($objProducto);
    print_r('</pre>');
echo "Descripcion del producto: "."<br>";
echo Producto::$estado;
echo "<br>";
echo "<h2> Datos de la clase Mueble </h2>";
$objMueble = new Mueble("Mesa", 3000000, 10, "Activo","Cafe","cedro");
$objMueble->getinfoproducto();
    print_r('<pre>');
    print_r($objMueble);
    print_r('</pre>');

?>