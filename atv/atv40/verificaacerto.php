<?php
    $nome = $_POST["nome"];
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $cont = 0;
    
    if ($q1 == "1"){
        $cont += 1;
    } 
    
    if ($q2 == "1"){
        $cont += 1;
    }
    
    echo "$nome<br>";
    echo "Quantidade de acertos: $cont"; 
?>

