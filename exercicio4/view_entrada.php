<!-- Página inicial => Só HTML-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Cálculo Média do Aluno</title>
</head>
<body>
    <header>
        <h1>Média do Aluno</h1>
    </header>
    <main>
        <form action = "logicaController.php" method = "post">
            <label for="nome">Nome: </label>
            <br>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome...">
            <br><br>
            <label for="">Nota 1: </label>
            <br>
            <input type="number" id="n1" name="n1">
            <br><br>
            <label for="">Nota 2: </label>
            <br>
            <input type="number" id="n2" name="n2">
            <br><br>
            <button type="submit">Enviar</button>
    </main>
</body>
</html>