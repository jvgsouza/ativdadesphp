<?php
    $v1 = $_POST["v1"];
    $v2 = $_POST["v2"];
    $v3 = $_POST["v3"];
    
    if ($v1 < $v2){
        $menor = $v1;
    }
    if ($v2 < $v1){
        $menor = $v2;
    }
    
    if ($v3 < $menor){
        $menor = $v3;
    }
    
    echo $menor;
    

    


