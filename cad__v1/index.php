<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- formulário de login -->
    <div class="login-container">
        <h2>Login</h2>
        <form method="post" action="login.php">
            <label for="email">Usuário:</label>
            <input type="email" name="email" required>

            <label for="password">Senha:</label>
            <input type="password" name="password" required>

            <input type="submit" value="Entrar">

            <input type="submit" value="Cadastro">
        </form>
    </div>
</body>
</html>
