<?php
$nomeCli= $_POST['nome'];
$nomeProduto = $_POST['produto'];
$Preco = (float) $_POST['preco'];
$Quantidade = $_POST['quantidade'];

$total = $Preco * $Quantidade;
$desconto = $total * 0.10;
$valorDesconto = $total - $desconto;

if ($Preco>=200){
    $resultado = $valorDesconto;
}else {
    $desconto = 0;
    $resultado = $total;
}
require_once 'view_saida.php';
?>