<?php
    require_once("../../Templete/plantillaFormulario.php");
    require_once("../modelo/usuario.php");
    
    
    /* session_start(); */
    $modeloUsuario = new Usuario();
    $modeloUsuario->validarsesionUsuario();
    $vernombreUsuario = $modeloUsuario->getnombreUsuario();
    
?>

<div>
    <h2>Bienvenido <?= print_r($vernombreUsuario); ?> </h2>
    <h2><a href="../controlador/update.php"> Salir </a> </h2>
</div>