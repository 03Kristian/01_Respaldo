<?php
    require_once('02_ClaseCliente.php');

    $objcliente= new Cliente("JUAN", "juandav@gmail.com", 19);

    echo $objcliente->getnombre();
    echo'<br>';
    echo $objcliente->getemail();
    echo'<br>';
    echo $objcliente->getclave();
?>