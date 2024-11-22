<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <!-- Menu Principal -->
    <nav>
        <a href="index.php">Home</a>
        <a href="formulario.php">Formulário</a>
        <a href="sobre.php">Sobre</a>
    </nav>

    <!-- Formulário de Cadastro -->
    <h1>Cadastro de Cliente</h1>
    <form action="processa_formulario.php" method="POST">
        <label for="nome">Nome do Cliente:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="idade">Idade do Cliente:</label>
        <input type="number" id="idade" name="idade" required><br><br>

        <label for="altura">Altura do Cliente (em metros):</label>
        <input type="number" id="altura" name="altura" step="0.01" required><br><br>

        <label for="peso">Peso do Cliente (em kg):</label>
        <input type="number" id="peso" name="peso" step="0.01" required><br><br>

        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>
