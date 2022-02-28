<?php

    // require_once("08_clasePersona.php");
    require_once("08_claseEmpleado.php");

    $objPersona = new Persona("Cristiano Ronaldo", 32);

    print_r('<pre>');
    print_r($objPersona->getPersona());
    print_r('<pre>');
    echo "<br>";

    $objEmpleado = new Empleado("Emily Castrillo",22,1800000,true);
    print_r('<pre>');
    print_r($objEmpleado->getDatosEmpleado());
    print_r('</pre>');
    echo "<br>";

    print_r('<pre>');
    print_r($objEmpleado->getPersona());
    print_r('<pre>');
    echo "<br>";
    //echo $objEmpleado->setEstado(false);

?>