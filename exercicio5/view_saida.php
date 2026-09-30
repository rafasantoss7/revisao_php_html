<!-- Printa na tela as informações => PHP + HTML-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto compra</title>
</head>
<body>
    <header>
        <h1>Situação do aluno</h1>
    </header>
    <main>
        <p>Cliente: <?= $nomeCli ?></p>
        <p>Produto; <?= $nomeProduto ?></p>
        <br><br>
        <p>Quantidade: <?= $Quantidade ?></p>
        <p>Preço Unitário: <?= $Preco ?></p>
        <br><br>
        <p>Subtotal: <?=$total ?></p>
        <p>Desconto: <?=$desconto ?></p>
        <br><br>
        <p>Total: <?= $resultado ?></p>
    </main>
</body>
</html>