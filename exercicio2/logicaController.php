<?php 
// var_dump ($_POST)

$numero1 = $_POST['n1'];
$numero2 = $_POST['n2'];
$operacao = $_POST['calculo'];

if ($operacao== "somar"){
    $resultado = $numero1 + $numero2;
}elseif ($operacao == "subtrair"){
    $resultado = $numero1 - $numero2;
}elseif ($operacao == "multiplicar"){
    $resultado = $numero1 * $numero2;
}else{
    $resultado= $numero1 / $numero2;
}

require_once 'view_saida.php';
?>