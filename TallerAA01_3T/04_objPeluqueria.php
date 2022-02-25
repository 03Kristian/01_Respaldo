<?php

    require_once("04_clase_Peluqueria.php");

    $objPeluqueria = new Peluqueria(10056,"BARBER SHOP","Dirección: Cra. 10, Popayán, Cauca", 301548056, "9:00", "7:00", 12000,"beckham");

    print_r('<pre>');
    print_r($objPeluqueria->getAgendarCita());
    print_r('<pre>');
?>