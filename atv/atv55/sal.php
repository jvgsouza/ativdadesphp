<?php
    $vendc = $_GET["vendc"];
    $vendt = $_GET["vendt"];
    $salfixo = $_GET["salfixo"];
    $valc = $_GET["valc"];

    $vtotal = ($vendt * 5) / 100;
    
    $comissaoc = $vendc * $valc;
    
    $sal_total = $salfixo + $comissaoc + $vtotal;
    
    echo "O salário total é: $sal_total";