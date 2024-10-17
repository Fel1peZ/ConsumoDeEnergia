<?php

require_once("modelo/Comercial.php");
require_once("modelo/Industrial.php");
require_once("modelo/Residencial.php");
$opcao = 1;

do {
    

$opcao = readline("\nInforme o seu tipo de consumidor 1-Residencial 2-Comercial 3-Industrial 0-Sair: \n");

switch($opcao) {
    case 1:
        $consumidor = new Residencial;
        $consumidor->setConsumo(readline("\nInforme o consumo de energia em KWh\n"));
        
        break;
    case 2:
        $consumidor = new Comercial;
        $consumidor->setConsumo(readline("\nInforme o consumo de energia em KWh\n"));
        break;
    case 3:
        $consumidor = new Industrial;
        $consumidor->setConsumo(readline("\nInforme o consumo de energia em KWh\n"));
        break;    
    
    case 0:
        echo "Saindo do programa";
        $consumidor = null;
        break;
    default:
       echo "opcao errada\n";
       $consumidor = null;
        break;
}
if($consumidor){
$consumidor->getValorFatura();
}

}while ($opcao != 0);