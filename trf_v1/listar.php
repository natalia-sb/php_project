<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
</head>
<body>
    <header>
        <h1> TAREFAS </h1>
    </header>

    <div class="">
        <a class="" href="form.php">Voltar para o Formulário</a>
    </div>

    <div class="container">
        <h2>Lista de Tarefas</h2>

        <?php
        require_once("config.php");


        $sql = "SELECT * FROM lista_tarefas";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li><strong>Nome:</strong> " . $row["nome"] . "<br>";
                echo "<strong>Título:</strong> " . $row["titulo"] . "<br>";
                echo "<strong>Tarefa:</strong> " . $row["tarefa"] . "<br>";

                echo '<button onclick="editarTarefa(' . $row["id"] . ')">Editar</button>';
                echo '<button onclick="excluirTarefa(' . $row["id"] . ')">Excluir</button>';
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo "Nenhuma tarefa encontrada.";
        }

        $conexao->close();
        ?>
    </div>

    <script>
        function editarTarefa(id) {
            // Adicione a lógica para editar a tarefa com o ID fornecido
            // Você pode redirecionar para uma página de edição ou usar um modal, por exemplo.
        }

        function excluirTarefa(id) {
            // Adicione a lógica para excluir a tarefa com o ID fornecido
            // Você pode mostrar um modal de confirmação antes de excluir.
        }
    </script>
