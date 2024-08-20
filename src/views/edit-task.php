<?php
$id = $_GET['id'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefas</title>
    <link rel="stylesheet" href="../views/css/style.css">
</head>

<body>
    <?php include 'template/header.php'; ?>
    <main class="CadProj">
        <h1 class="CadProj titulo">Editar Tarefas</h1>
        <form method="post">
            <?php foreach ($tasks as $task) { ?>
                <div class="alunos">
                    <label for="aluno1">Aluno</label>
                    <input type="text" name="aluno1" id="aluno1" value="<?= $task->responsavel_id ?>">
                </div>
                <div class="professor">
                    <label for="professor">Tarefa</label>
                    <input type="text" name="professor" id="professor" value="<?= $task->titulo ?>">
                </div>
                <div class="alunos">
                    <label for="aluno2">Nova Atribuição</label>
                    <input type="text" name="aluno2" id="aluno2">
                    <label for="tarefa">Novo Nome Tarefa</label>
                    <input type="text" name="tarefa" id="tarefa">
                </div>
            <?php } ?>
            <div class="btn">
                <a href="/src/delete-task/<?= $task->tarefa_id ?>" class="btn cancelar">Excluir</a>
                <button class="btn salvar" type="submit" class="btn salvar">Editar</button>
            </div>
        </form>
    </main>
    <footer>
        InnovaTech Solutions @2024
    </footer>
</body>

</html>