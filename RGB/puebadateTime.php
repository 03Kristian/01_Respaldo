<?php
$fecha = new DateTime();
$fecha->setDate(2022, 2, 28);
echo $fecha->format('Y-m-d');

?>


<?php
$fecha1= new DateTime("2017-08-01");
$fecha2= new DateTime("2017-08-04");
$diff = $fecha1->diff($fecha2);

// El resultados sera 3 dias
echo $diff->days . ' dias';
?>