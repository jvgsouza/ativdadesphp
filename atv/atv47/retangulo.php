<?php
    $l1 = $_POST["l1"];
    $l2 = $_POST["l2"];
    $l3 = $_POST["l3"];
    $l4 = $_POST["l4"];
    
    $cont = 0;
        
    if ($l1 == $l2) {
        $cont += 1;
    }
    
    if ($l1 == $l3) {
        $cont += 1;
    }
    
    if ($l1 == $l4) {
        $cont += 1;
    }
    
    if ($l2 == $l3) {
        $cont += 1;
    }
    
    if ($l2 == $l4) {
        $cont += 1;
    }
    
    if ($l2 == $l4) {
        $cont += 1;
    }
    
    if ($cont == 6){
        echo "Quadrado";
    }
    
    elseif($l1 == $l3 and $l2 == $l4) {
        echo "Retangulo";
    }
    
    if ($cont == 0){
        echo "Trapezio";
    }
    

