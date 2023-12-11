<?php
//autenticação simples de teste
$expected_email = 'email';
$expected_password = 'senha';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    //verificação
    if (isset($_POST['login'])) {
        if ($email == $expected_email && $password == $expected_password) {
            header("Location: pagina.php");
            exit();
        } else {
            echo "Credenciais inválidas. Tente novamente.";
        }
    }
}

if (isset($_POST['cadastrar'])) {
        header("Location: form.php");
        exit();
    }


?>
