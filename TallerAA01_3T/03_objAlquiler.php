<?php
require_once("03_claseNetflix.php");
$objNetflix=new Netflix("Estación zombie 2: Península",2020,true,6);
echo "Titulo de la pelicula : ".$objNetflix->getTitulo()."<br>";
echo "<br>";

echo $objNetflix->setCostodeAlquiler(4)."<br>";
echo $objNetflix->getAlquilar()."<br>";
echo $objNetflix->getDevolucion()."<br>";
?>