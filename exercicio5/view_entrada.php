<!-- Página inicial => Só HTML-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Desconto da COMPRA</title>
</head>
<body>
    <header>
        <h1>Desconto em uma compra: </h1>
    </header>
    <main>
        <form action = "logicaController.php" method = "post">
            <label for="nome">Nome do cliente: </label>
            <br>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome...">
            <br><br>
            <label for="">Nome do produto: </label>
            <br>
            <input type="text" id="produto" name="produto">
            <br><br>
            <label for="">Preço do produto: </label>
            <br>
            <input type="number" id="preco" name="preco">
            <br><br>
            <label for="">Quantidade: </label>
            <br>
            <input type="number" id="quantidade" name= "quantidade">
            <br><br>
            <button type="submit">Enviar</button>
    </main>
</body>
</html>