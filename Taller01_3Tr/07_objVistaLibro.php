<?php
    require_once("07_claseLibro.php");
    require_once("07_subclaseRevista.php");

    
    #$obj_vistaLibro = new Libro(0284374, "El Virus", "Alvaro Vanegas")
    $objLibro = new Libro(256450, "EL VIRUS", "Alvaro Vanegas");

    print_r('<pre>');
    print_r($objLibro->getDetallesLibro());
    print_r('<pre>');

    $objRevista = new Revista(256450, "EL VIRUS", "Alvaro Vanegas",2021,103);

    print_r('<pre>');
    print_r($objRevista->getInformelibro());
    print_r('<pre>');
    
?>