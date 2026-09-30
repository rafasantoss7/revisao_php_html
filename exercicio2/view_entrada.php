<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 2 - Calculadora Simples</title>
</head>
<body>
    <header>
        <h1>Calculadora Simples</h1>
    </header>
    <main>
        <form action="logicaController.php" method="post">
            <label for="n1">Número 1: </label>
            <br>
            <input type="number" id="n1" name="n1">
            <br><br>
            <label for="n2">Número 2: </label>
            <br>
            <input type="number" id="n2" name="n2">
            <br><br>
            <label for="">Operação: </label>
            <br>
            <select name ="operacao" id ="operacao">
                <option value="" selected disabled>
                    Selecionar...
                </option>
                <option value="Somar">Somar</option>
                <option value="Subtrair">Subtrair</option>
                <option value="Multiplicar">Multiplicar</option>
                <option value="Dividir">Dividir</option>
            </select>
            <br><br>
            <button type="submit">Enviar</button>
    </main>
    
</body>
</html>