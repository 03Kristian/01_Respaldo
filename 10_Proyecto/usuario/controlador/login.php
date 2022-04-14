<?php
    require_once("../modelo/usuario.php");

    if (isset($_REQUEST["btn_enviar"])==true/* ==1 */) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $loginUser = new Usuario();
        $loginUser->login($email, $password);

        if (isset($loginUser)==1) {
            /* print_r($verloginUser); */
            //terminar el proceso de ejecucion de codigo hasta ese punto
            header('Location: ../vista/Index.php');
        }else{
            header('location: ../../Index.php');
        }


    }

?>