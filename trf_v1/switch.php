<?php
require_once("config.php");

if (isset($_POST["acao"])) {
    switch ($_POST["acao"]) {
        case 'criar':
            $nome = $_POST["nome"];
            $titulo = $_POST["titulo"];
            $tarefas = $_POST["tarefas"];
            
   //         $tarefasArray = $tarefas; 

            $sql = "INSERT INTO lista_tarefas (nome, titulo) VALUES ('$nome', '$titulo')";
            $conexao->query($sql);
    
            $last_id = $conexao->insert_id;
    
            foreach ($tarefasArray as $tarefa) {
                $tarefas = trim($tarefas);
                $sql = "INSERT INTO lista_tarefas (id, tarefa) VALUES ($last_id, '$tarefa')";
                $conexao->query($sql);
            }
            break;

        case 'editar':
            
            break;
            
        case 'excluir':
            
            break;
    }
}

$conexao->close();
?>
