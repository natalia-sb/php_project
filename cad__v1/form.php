<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário PHP</title>
</head>
<body>
    <h2>Cadastro</h2>
    <!-- formulário de cadastro -->
    <form method="post" action="config.php">

        <label for="Nome">Nome:</label>
        <input type="text" name="Nome" id="Nome" required><br>
        
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>
        
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
