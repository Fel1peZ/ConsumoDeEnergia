<?php

require_once("IConsumidorEnergia.php");

class Comercial implements IConsumidorEnergia{



    private $consumo;

    public function getValorFatura(){
       if($this->consumo<=100){
        echo "R$". 1.45*$this->consumo, " de consumo\n";  
       }     
       else{
        echo "R$". 1.60*$this->consumo, " de consumo\n";  
       }
    }

    public function getConsumo()
    {
        return $this->consumo;
    }

    public function setConsumo($consumo): self
    {
        $this->consumo = $consumo;

        return $this;
    }

}