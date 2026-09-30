<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Salário</title>
</head>
<body>
    <header>
        <h1>Cálculo de salário</h1>
    </header>
    <main>
        <p>Funcionário: <?=$nomeFunc ?></p>
        <p>Cargo: <?=$cargo ?></p>
        <br><br>
        <p>Salário Atual: R$<?= $salario ?></p>
        <p>Aumento: R$<?= $aumento ?></p>
        <br><br>
        <p>Novo salário: R$<?=$salarioAtual?></p>
    </main>
</body>
</html>