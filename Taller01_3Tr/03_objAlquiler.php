<?php
require_once("03_claseNetflix.php");
$objNetflix=new Netflix("Estación zombie 2: Península",2020,true,6);
echo "<h2>"."Titulo de la pelicula : ".$objNetflix->getTitulo()."</h2>";
echo "<br>";

//echo "<h3> Dias previstos de Alquiler : ".$objNetflix->setCostodeAlquiler(4)."<br>";
echo "<h3> Disponible? : ".$objNetflix->getAlquilar()."<br>";
echo "<h3> Dias previstos de Alquiler : ".$objNetflix->getDevolucion()."<br>";
$objNetflix->setCostodeAlquiler(4);
echo "<h3> Dias previstos de Alquiler : ".$objNetflix->getDevolucion()."<br>";
?>