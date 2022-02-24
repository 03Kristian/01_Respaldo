<?php
//require llama al nombre del archivo para ser cargado en memoria RAM
    require_once("03_clasePersona.php");
    require_once("04_claseCliente.php");
    require_once("05_claseEmpleado.php");

    //new = hacer una instancia de una clase
    $objPersona = new Persona(100201100, "Juan Perez", 21);

//metodo getter = Mostrar
//metodo setter = Asignar
    echo $objPersona->getCedula()."<br>";
    $objPersona->setCedula(20001001);
    echo "CAMBIO DE CEDULA: ".$objPersona->getCedula()."<br>";
    echo "<h2> DATOS DE LA CLASE CLIENTE </h2>"."<br>";

    $objCliente = new Cliente(30715456, "Ana Maria Reyes", "anareyes@hotmail.com",28);
    echo "Cedula cliente : ". $objCliente->getCedula()."<br>";
    $objCliente2 = new Cliente(27304560, "Juan Diego Pelaez", "juenadiego@hotmail.com",28);
    echo "Cedula cliente : ". $objCliente2->getCedula()."<br>";

    echo "<h2> DATOS DE LA CLASE EMPLEADO. </h2>"."<br>";
    $objEmpleado = new Empleado(50010234, "Jimena Cortez", 35, 3500000, "Contador");
    echo "Nombre del Empleado: ".$objEmpleado->nombre."<br>";
    echo "Cedula: ".$objEmpleado->getCedula()."<br>";
    echo "Puesto: ".$objEmpleado->getPuesto()."<br>";
    echo "Credito: ".$objEmpleado->getCredito()."<br>";
?>