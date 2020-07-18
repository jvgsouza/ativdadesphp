<?php
    $cf = $_GET["cf"];
    
    $distribuidor = ($cf * 28) / 100;
    
    $imposto = ($cf * 45) / 100;
    
    $final = $cf + $distribuidor + $imposto;
    
    echo "Com imposto e taxa de distribuidor o preço do carro é: $final";