<?php

require_once("IConsumidorEnergia.php");

class Residencial implements IConsumidorEnergia{

    private $consumo;

    public function getValorFatura(){
        echo "R$". 1.05*$this->consumo, " de consumo\n";
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

