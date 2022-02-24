<?php

    require_once("01_claseCliente.php");
    require_once("02_claseUsuario.php");
    require_once("03_cuentaBancaria.php");

    $objcliente = new Cliente(30713456, "Ana Garcia", 2300000);
    echo "<h2> Nombre del Cliente: ".$objcliente->nombre."<br>";
    echo "<h2> Salario: ".$objcliente->getsalario()."<br>";
    $objcliente->setsalario(2400000);
    echo "<h2> Salario: ".$objcliente->getsalario()."<br>";
    //echo "<br>";
    $objUsuario = new Usuario(34758694, "Isabel Trujillo",2500000,"Isabel@hotmail.com", 123456);
    echo "<br>";
    echo "<h2> CLASE USUARIO </H2>";
    echo "<h3> Nombre del usuario: ".$objUsuario->nombre."<br>";
    echo "<h3> Salario: ".$objUsuario->getsalario()."<br>";
    echo "<h2> E-mail: ".$objUsuario->getemail()."<br>";
    $objUsuario->setemail("Trujillo@hotmail.com");
    echo "<h2> E-mail: ".$objUsuario->getemail()."<br>";

    echo "<h2> CUENTA BANCARIA </H2>";
    $objcuenta = new CuentaBancaria(1001, "Tatiana", 1200000,"tatiana@hotmail.com",123,200,"Ahorros",1000000);
    echo "<h3> Nombre del usuario: ".$objcuenta->nombre."<br>";
    echo "<h3> Saldo: ".$objcuenta->getsaldo()."<br>";
    echo "<h3> Valor a Retirar: ".$objcuenta->setValor_retiro(250000)."<br>";
    echo "Valor a retirar: ".$objcuenta->vr_retiro."<br>";



?>