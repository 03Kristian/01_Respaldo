<?php

    require_once("clase_Netflix.php");

    $objPelicula = new NNetflix("Stacion Busan", 2018, "Activo",new DateTime("2022-03-07"));

    print_r('<pre>');
    print_r($objPelicula);
    print_r('<pre>');
    echo "<br>";
    echo $objPelicula->setCostoAlquiler()."<br>";
?>