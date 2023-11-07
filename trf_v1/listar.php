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

        
        if (isset($_POST["acao"])) {
            switch ($_POST["acao"]) {
                case 'criar':
                    $nome = $_POST["nome"];
                    $titulo = $_POST["titulo"];
                    $tarefas = $_POST["tarefa"];
        
                    $sql = "INSERT INTO lista_tarefas (nome, titulo) VALUES ('$nome', '$titulo')";
                    $conexao->query($sql);
            
                    $last_id = $conexao->insert_id;
            
                    foreach ($tarefas as $tarefa) {
                        $tarefas = trim($tarefa);
                        $sql = "INSERT INTO lista_tarefas (tarefa) VALUES ('$tarefa')";
                        $conexao->query($sql);
                    }
                    break;
            }
        }
        
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


    function editarTarefa($id) {
    require_once("config.php");
   
    $sql = "SELECT * FROM lista_tarefas WHERE id = $id";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $tarefa = $row["tarefa"];

        $sql = "UPDATE lista_tarefas SET tarefa = '$tarefa' WHERE id = $id";

            if ($conexao->query($sql) === TRUE) {
                echo "Tarefa editada com sucesso.";
            } else {
                echo "Erro ao editar a tarefa: " . $conexao->error;
            }
        
        
        echo "<form method='post' action='processar_edicao.php'>";
        echo "<input type='hidden' name='id' value='$id'>";
        echo "Tarefa: <input type='text' name='nova_tarefa' value='$tarefa'>";
        echo "<input type='submit' value='Salvar Edição'>";
        echo "</form>";
        $conexao->close();
    }
    }
    function excluirTarefa($id) {
        require_once("config.php");

        $sql = "DELETE FROM lista_tarefas WHERE id = $id";

            if ($conexao->query($sql) === TRUE) {
                echo "Tarefa excluída com sucesso.";
            } else {
                echo "Erro ao excluir a tarefa: " . $conexao->error;
            }
    
        echo "<form method='post' action='processar_exclusao.php'>";
        echo "<input type='hidden' name='id' value='$id'>";
        echo "Tem certeza de que deseja excluir esta tarefa?";
        echo "<input type='submit' value='Sim'>";
        echo "</form>";
        $conexao->close();
    } 

        ?>
</body>
</html>
