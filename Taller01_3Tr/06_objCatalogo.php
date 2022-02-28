<?php

    require_once("06_claseElectrodomestico.php");
    require_once("06_subclaseLavadora.php");


    $objcatalogo1 = new Lavadora("LG", 5, 1350000);
    echo "<br>";

    print_r('<pre>');
    print_r($objcatalogo1->getInformacion());
    print_r('<pre>');
    echo $objcatalogo1->setVenta(5);
    echo "<br>";

    $objcatalogo2 = new Lavadora("Wirpool", 8, 1150000);
    echo "<br>";

    print_r('<pre>');
    print_r($objcatalogo2->getInfoElectrodomestico());
    print_r('<pre>');
    echo $objcatalogo2->setVenta(8);
    echo "<br>";

?>