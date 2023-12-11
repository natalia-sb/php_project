<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'cadastro';

$conexao = new mysqli($host, $user, $pass, $db);

//verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //coleta os dados do formulário
    $nome = $_POST["Nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    //prepara e executa a instrução SQL
    $sql = "INSERT INTO new_cadastro (Nome, Telefone, Email, Senha) VALUES ('$nome', '$telefone', '$email', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . $conexao->error;
    }
    
    $conexao->close();
}
?>
