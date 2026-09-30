<?php
$nomeFunc = $_POST['nome'];
$salario = (float) $_POST['salario'];
$cargo = $_POST['cargo'];

if ($cargo == "estagiario"){
    $aumento = $salario * 0.10;
    $salarioAtual = $aumento + $salario;
}elseif ($cargo == "assistente") {
    $aumento = $salario * 0.08;
    $salarioAtual = $aumento + $salario;
}else{
    $aumento = $salario * 0.05;
    $salarioAtual = $aumento + $salario;
}
require_once 'view_saida.php';
?>