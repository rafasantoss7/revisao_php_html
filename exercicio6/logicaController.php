<?php
$temperatura = (float) $_POST['temperatura'];
$fahrenheit = ($temperatura*9/5) + 32;

require_once 'view_saida.php';
?>