<?php

use JetBrains\PhpStorm\Deprecated;

    require_once("10_claseDeportivos.php");

    $objZapato = new Zapatos(41, "Nike", 10);

    print_r('<pre>');
    print_r($objZapato->getVerInventario());
    print_r('<pre>');
    echo "<br>";
    $objDeportivo = new Deportivos(41, "Nike", 10, "Zapatos Deportivos",262000,3);
    print_r('<pre>');
    print_r($objDeportivo->getVerInventario());
    print_r('<pre>');
    echo "Estado del la compra: "."<br>";
    echo $objDeportivo->setCompra(40);
?>