<?php
$nome = $_POST['nome'];
$nota1 = (float) $_POST['n1'];
$nota2 = (float) $_POST['n2'];

$media = ($nota1 + $nota2) / 2;

if ($media>=7){
    $situacao = "Aprovado";
}elseif($media>=5 && $media<7){
    $situacao = "Recuperação";
}else{
    $situacao = "Reprovado";
}
require_once 'view_saida.php';
?>