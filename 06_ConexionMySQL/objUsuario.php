<?php
    require_once("usuario.php");

    $objUsuario = new Usuario();
    /* $insertarUsuario= $objUsuario->insertarUsuario("Julian Garcia","julian@gmail.com",123456);
    echo $insertarUsuario; */

    // MODIFICAR USUARIO
    $editarUsuario = $objUsuario->editarUsuario(3, "Juliana Suarez", "juliana@hotmail.com",123456);
    //ELIMINAR USUARIO
    //$eliminarusuario = $objUsuario->eliminarUsuario(6);

    //Ver lista de Usuarios
    /* $verUsuario = $objUsuario->getUsuario();
    print_r('<pre>');
    print_r($verUsuario);
    print_r('</pre>'); */
?>