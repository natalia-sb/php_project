<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Tarefas</title>
</head>
<body>
    <section>
        <form action="switch.php" method="post">
            <div class="trfs">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="trfs">
                <label for "titulo">Título</label>
                <input type="text" name="titulo" id="titulo">
            </div>

            <div class="trfs">
                <label for="tarefa1">Tarefa 1</label>
                <input type="text" name="tarefas[]" id="tarefa1">
            </div>
            <div class="trfs">
                <label for="tarefa2">Tarefa 2</label>
                <input type="text" name="tarefas[]" id="tarefa2">
            </div>
            <div class="trfs">
                <label for="tarefa3">Tarefa 3</label>
                <input type="text" name="tarefas[]" id="tarefa3">
            </div>
            <div class="trfs">
                <label for="tarefa4">Tarefa 4</label>
                <input type="text" name="tarefas[]" id="tarefa4">
            </div>
            <div class="trfs">
                <label for="tarefa5">Tarefa 5</label>
                <input type="text" name="tarefas[]" id="tarefa5">
            </div>

            <button type="submit" class="btn" name="acao" value="criar">Criar Tarefas</button>
        </form>
    </section>
</body>
</html>
