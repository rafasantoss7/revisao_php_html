<!-- Página inicial => Só HTML-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7 - Cálculo de Salário</title>
</head>
<body>
    <header>
        <h1>Cálculo de Salário</h1>
    </header>
    <main>
        <form action = "logicaController.php" method = "post">
            <label for="nome">Nome do funcionário: </label>
            <br>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome...">
            <br><br>
            <label for="">Salário atual: </label>
            <br>
            <input type="number" id="salario" name="salario">
            <br><br>
             <label for="">Cargo: </label>
            <br>
            <select name ="cargo" id ="cargo">
                <option value="" selected disabled>
                    Selecionar...
                </option>
                <option value="estagiario">Estagiário</option>
                <option value="assistente">Assistente</option>
                <option value="analista">Analista</option>
            </select>
            <br><br>
            <button type="submit">Enviar</button>
    </main>
</body>
</html>