<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cliente</title>
</head>
<body>
    <h1>Dados Enviados</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = htmlspecialchars($_POST['nome']);
        $idade = htmlspecialchars($_POST['idade']);
        $altura = htmlspecialchars($_POST['altura']);
        $peso = htmlspecialchars($_POST['peso']);

        echo "<p>Nome do Cliente: $nome</p>";
        echo "<p>Idade do Cliente: $idade anos</p>";
        echo "<p>Altura do Cliente: $altura metros</p>";
        echo "<p>Peso do Cliente: $peso kg</p>";
    } else {
        echo "<p>Por favor, envie os dados pelo formulário.</p>";
    }
    ?>
</body>
</html>
