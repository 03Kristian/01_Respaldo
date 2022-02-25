<?php
    require_once("07_classLibro.php");

    
    #$obj_vistaLibro = new Libro(0284374, "El Virus", "Alvaro Vanegas")
    $objLibro = new Libro(256450, "EL VIRUS", "Alvaro Vanegas");

    print_r('<pre>');
    print_r($objLibro->getDetallesLibro());
    print_r('<pre>');
    
?>