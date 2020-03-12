<?php
    $numero = 9;
    if($numero >= 0){
        for($i = 0; $i <= 10; $i++)
        echo $numero." x ".$i." = ".($numero*$i)."</br>";
    exit;
    }
    echo "Numero Invalido";
    exit;
?>