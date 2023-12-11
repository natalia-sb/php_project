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
            
                <label for="email">E-mail:</label>
                <input type="email" name="email" placeholder="E-mail" required>
                
                <label for="password">Senha:</label>
                <input type="password" name="password" placeholder="Senha" required>

            <input type="submit" value="Entrar">

            <input type="submit" name="cadastrar" value="Cadastrar">

        </form>
    </div>
</body>
</html>
