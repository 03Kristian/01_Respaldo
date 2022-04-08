<?php
    require_once("../modelo/usuario.php");

    if(isset($_REQUEST["btn_enviar"])){
        $nombre =$_POST["nombre"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $modUser= new Usuario();
        $modUser->insertarUsuario($nombre, $email, $password);

        if(isset($modUser)/* ==true */){
            echo "registro de usuario satisfactorio";
            header('refresh:3; url=../vista/add.php');
            }else{
                echo "fallo al insertar registro";
                header('refresh:2; url=../../index.php');
            }
        
        /* if (isset($modUser)==true) {
            header('Location: ../vista/perfil.php');
        }else{
            header('location: ../../Index.php');
        } */
    }

?>