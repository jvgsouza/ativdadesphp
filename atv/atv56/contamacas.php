<?php
    $mc = $_GET["nm"];

    if($mc < 12){
        $preco = $mc * 1.30;
    }
    
    elseif($mc >= 12){
        $preco = $mc * 1;
    }
    
    echo "O preço total a ser pago é: $preco";