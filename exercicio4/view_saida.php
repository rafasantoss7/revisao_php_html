<!-- Printa na tela as informações => PHP + HTML-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação do aluno</title>
</head>
<body>
    <header>
        <h1>Situação do aluno</h1>
    </header>
    <main>
        <p>Nome: <?= $nome ?></p>
        <br><br>
        <p>Nota 1: <?= $nota1 ?></p>
        <p>Nota 2: <?= $nota2 ?></p>
        <br><br>
        <p>Média: <?=$media ?></p>
        <br><br>
        <p>Situação : <?= $situacao ?></p>
    </main>
</body>
</html>