<?php
$suma = 0;
echo "<h3>"." Suma de los primeros 100 números pares: "."</h3>";
for ($i=0; $i <= 100 ; $i+=2) { 
    //echo $i."<br>";
    if ($i/2==0) {
        $suma = $suma + $i;
    }
    $suma = $suma + $i;
    //echo'<br>';
    //echo $suma;
}echo $suma;
?>