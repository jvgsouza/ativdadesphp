<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <h1>Sequencia</h1>
            <?php
                if(isset($_POST['botao'])){
                    include_once 'sequencia.class.php';
                    $sequencia = new Sequencia();

                    $sequencia->setInicio($_POST["n1"]);
                    $sequencia->setFim($_POST["n2"]);
                    $forma = $_POST['radio'];
                    
                    if($forma == "1"){
                        $sequencia->exibirTodosNumeros();
                    }

                    if($forma == "2"){
                        $sequencia->exibirPares();
                    }

                    if($forma == "3"){
                        $sequencia->exibirImpares();
                    }
                }
                else{   
            ?>
            <form action="index.php" method="POST">
                <label>Selecione o valor inicial:</label>
                <input type="number" name="n1" min="1" max="99"></br>
                <label>Selecione o valor final:</label>
                <input type="number" name="n2" min="2" max="100"></br><br>

                <input type="radio" name="radio" value="1">
                <label>Todos</label><br>
                <input type="radio" name="radio" value="2">
                <label>Apenas os pares</label><br>
                <input type="radio" name="radio" value="3">
                <label>Apenas os ímpares</label><br><br>


                <input type="submit" value="Mostrar sequencia" name="botao">

            </form>
        </div>
        <?php 
            }

        ?>

    </body>
<html>