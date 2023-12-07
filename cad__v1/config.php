<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'cadastro';

$conexao = new mysqli($host, $user, $pass, $db);

//coleta os dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["Nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    //inserção SQL
    $sql = "INSERT INTO new_cadastro (Nome, Telefone, Email, Senha) VALUES ('$nome', '$telefone', '$email', '$senha')";

    //verifica se registro foi inserido
    if ($conexao->query($sql) === TRUE) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . $conexao->error;
    }
    
    $conexao->close();
}
?>
