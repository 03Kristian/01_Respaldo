<?php
    require_once("02_classAprendiz.php");

    $objAprendiz = new Aprendiz(1003458069,"Mendez", "Juan Carlos", "Diseño", 3.5, 4.4, 3.5);
    
    echo "Nota Final: ".$objAprendiz->getDefinitiva()."<br>";
    echo "<br>";

    print_r('<pre>');
    print_r($objAprendiz->getInformeAprendiz());
    print_r('</pre>');

    echo "<br>";
    echo $objAprendiz->getConceptoValoratorio();
    echo "<br>";
    echo "<br>";
    echo $objAprendiz->getValoravionCualitativa();
    echo "<br>";
    
?>