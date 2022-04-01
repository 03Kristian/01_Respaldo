<?php
    require_once("comentario.php");

    /* $objComentario = new Comentario();
    $insertarComentario = $objComentario->insertarComentario("El sitio tiene buena gastronomia","2022-03-18",2,3);
    echo $insertarComentario; */

    $verComentarios = $objComentario->verComentarios();
    print_r('<pre>');
    print_r($verComentarios);
    print_r('</pre>');

?>