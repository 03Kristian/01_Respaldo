<?php
    require_once("usuario.php");

    $objUsuario = new Usuario();
    /* $insertarUsuario= $objUsuario->insertarUsuario("Julian Garcia","julian@gmail.com",123456);
    echo $insertarUsuario; */

    //Ver lista de Usuarios
    $verUsuario = $objUsuario->getUsuario();
    print_r('<pre>');
    print_r($verUsuario);
    print_r('</pre>');
?>