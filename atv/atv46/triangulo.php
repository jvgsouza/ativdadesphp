<?php
    $l1 = $_POST["l1"];
    $l2 = $_POST["l2"];
    $l3 = $_POST["l3"];
    
    $cont = 0;

    if ($l1 == $l2) {
        $cont += 1;
    }
    
    if ($l1 == $l3) {
        $cont += 1;
    }
    
    if ($l2 == $l3) {
        $cont += 1;
    }
    
    if ($cont == 3){
        echo "Equilátero";
    }
    
    elseif ($cont == 0){
        echo "Escaleno";
    }
    
    else{
        echo "Isóceles";
    }