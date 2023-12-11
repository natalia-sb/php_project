<?php

include 'config.php';

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

$user_id = $_SESSION['user_id'];


$sql = "SELECT * FROM new_cadastro WHERE user_id = $user_id";
$result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Dados Cadastrados</h2>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Exibir os dados cadastrais do usuário logado
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['Nome'] . '</td>';
                echo '<td>' . $row['telefone'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>
