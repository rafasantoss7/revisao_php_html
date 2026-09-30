<!-- Página inicial => Só HTML-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6 - Conversor de Temperatura</title>
</head>
<body>
    <header>
        <h1>Conversor de Temperatura: </h1>
    </header>
    <main>
        <form action = "logicaController.php" method = "post">
            <label for="temperatura">Temperatura em Celsius: </label>
            <br><br>
            <input type="number" id="temperatura" name="temperatura" placeholder="Digite a temperatura...">
            <br><br>
            <button type="submit">Enviar</button>
    </main>
</body>
</html>