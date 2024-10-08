<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atribuir Tarefas</title>
</head>
<body>
<?php include 'template/header.php'; ?>
    <main class="CadProj">
        <h1 class="CadProj titulo">Atribuir Tarefas</h1>
        <form action="" method="post">
            <div>
                <label for="task">Tarefa</label>
                <select name="aluno1" id="aluno1">
                        <?php foreach ($tasks as $task): ?>
                            <option value="<?= $task->tituloT?>"><?= $task->tituloT ?></option>
                        <?php endforeach; ?>
                </select>
            </div>
            <div class="professor">
                <label for="projeto">Projeto</label>
                <select name="projeto" id="projeto">
                    <?php foreach ($tasks as $task): ?>
                        <option value="<?= $task->projeto_id?>"><?= $task->tituloP ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="alunos">
                    <label for="aluno1">Aluno</label>
                    <select name="aluno1" id="aluno1">
                        <?php foreach ($users as $user): ?>
                            <option value="<?= $user->usuario_id?>"><?= $user->nome ?></option>
                            <?php endforeach; ?>
                    </select>
                    </div>
                    <div class="btn">
                        <button class="btn cancelar">Cancelar</button>
                        <button class="btn salvar" type="submit" class="btn salvar">Salvar</button>
                    </div>
        </form>
    </main>
    <footer>
        InnovaTech Solutions @2024
    </footer>
</body>
</html>
