<?php

    
    require_once("01_clase_Empleado.php");
    #$objEmployee = new Employee(10045754869, "Juan Camilo Martinez", 23, "Distribuidor", 2100000 )
    $obj_Empleado = new Employee("Carlos Medina",3122546734, "Gerente", 3750000, 0.05 );

    echo "Nombre del Empleado: ".$obj_Empleado->getNombre()."<br>";
    echo "Numero de Celular: ".$obj_Empleado->getCelular()."<br>";

    echo"<br>";
    print_r('<pre>');
    print_r($obj_Empleado->getDatosEmpleado());
    print_r('</pre>');
    echo $obj_Empleado->getImpuesto()."<br>";
    echo "Transporte Auxiliar: ".$obj_Empleado->getTransporteAuxiliar()."<br>";

?>