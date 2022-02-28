<?php

    require_once("05_clasePersona.php");
    require_once("05_claseEmpleado.php");
    require_once("05_claseContador.php");


    $obj_Persona = new PERSONA("Cristian Alexis", 20 );

    print_r('<pre>');
    print_r($obj_Persona->getResponsabilidades());
    print_r('<pre>');

    $obj_Empleado = new EMPLEAD0("Cristian Alexis", 20 ,1800000);
    print_r('<pre>');
    print_r($obj_Empleado->getInformeSueldo());
    print_r('<pre>');

    $obj_contador = new Contador("Cristian Alexis", 20 ,40000,30);
    print_r('<pre>');
    print_r($obj_contador);
    print_r('<pre>');
    echo"<br>";
    print_r('<pre>');
    print_r($obj_contador->getDiaslaborales());
    print_r('<pre>');

?>