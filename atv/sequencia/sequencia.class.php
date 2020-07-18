<?php 

class Sequencia {
    private $inicio;
    private $fim;

    public function setInicio($numero1){
        $this->inicio = $numero1;
    }

    public function setFim($numero2){
        $this->fim = $numero2;
    }

    
    public function exibirTodosNumeros(){
            $n1 =  $this->inicio;
            $n2 = $this->fim;
            while ($n1 <= $n2){
                echo $n1++."<br>";
            }
    }

    public function exibirPares(){
            $n1 =  $this->inicio;
            $n2 = $this->fim;
            while ($n1 <= $n2){
                if(($n1 % 2) == 0){
                    echo $n1."<br>";
                    $n1++;
                }
                else{
                    $n1++;
                }
            }
    }

    public function exibirImpares(){
        $n1 =  $this->inicio;
        $n2 = $this->fim;
        while ($n1 <= $n2){
            if(($n1 % 2) == 1){
                echo $n1."<br>";
                $n1++;
            }
            else{
                $n1++;
            }
        }
    }

}

?>