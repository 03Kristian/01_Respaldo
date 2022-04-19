<?php
    require_once("../modelo/usuario.php");
    $modeloUsuario = new Usuario();
    $cerrarsesionComprador =$modeloUsuario->salirUsuario();
?>