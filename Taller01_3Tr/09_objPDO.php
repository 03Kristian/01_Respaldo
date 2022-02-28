<?php

    require_once("09_clasePartidos.php");

    $objTorneo =new TorneodeFutbol("Seleccion_Colombia", 21);

    print_r('<pre>');
    print_r($objTorneo->getTorneodeFutbol());
    print_r('<pre>');
    echo "<br>";

    $objPartidos = new Partidos("Seleccion_Colombia", 21,3,10);

    print_r('<pre>');
    print_r($objPartidos->getTorneodeFutbol());
    print_r('<pre>');
    echo "<br>";
?>