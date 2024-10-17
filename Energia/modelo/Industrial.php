<?php

require_once("IConsumidorEnergia.php");

class Industrial implements IConsumidorEnergia{

    private $consumo;

    public function getValorFatura(){
        if($this->consumo<=500){
            echo "R$". 1.80*$this->consumo, " de consumo\n";  
           }     
           else{
            echo "R$". 2.30*$this->consumo, " de consumo\n";  
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