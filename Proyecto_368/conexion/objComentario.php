<?php 
    require_once("comentario.php");

    $objComentario = new Comentario();
    /* $insertarComentario = $objComentario->insertarComentario("El sitio tiene buena gastronomia", "2022-03-18",2,3);
    echo $insertarComentario; */

   // $actualizarComentario = $objComentario->actualizarComentario(2, "Se debe mejorar la atencion al cliente", "2022-03-28",3,2);


    $eliminarComentario = $objComentario->eliminarComentario(4);

    $verComentarios = $objComentario->verComentarios();
    print_r('<pre>');
    print_r($verComentarios);
    print_r('</pre>');

?>