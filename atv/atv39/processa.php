<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            $aluno = $_POST["nome"];
            $sexo = $_POST["sexo"];
            $curso = $_POST["curso"];
            $segredo = $_POST["segredo"];
            

            if ($curso == "Agropecuária"){
                $curso = "Agropecuária";
            }

            if ($curso == "Informática"){
                $curso = "Informática";
            }
            
            if ($sexo == "m"){
                $sexo1 = "Masculino";
            }

            if ($sexo == "f"){
                $sexo1 = "Feminino";
            }
            
            echo "Nome: $aluno<br>";
            echo "Sexo: $sexo1<br>";
            echo "Curso: $curso<br>";
            echo "Segredo: $segredo<br>";
            
        ?>
    </body>
</html>
