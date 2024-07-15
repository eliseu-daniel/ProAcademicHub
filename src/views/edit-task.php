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
        <form action="" > 
            <div class="alunos">
                <label for="aluno1">Aluno</label>
                <input type="text" name="aluno1" id="aluno1">
            </div>
            <div class="professor">
                <label for="professor">Tarefa</label>
                <input type="text" name="professor" id="professor">
            </div>
            <div class="alunos">
                <label for="aluno1">Novo Nome</label>
                <input type="text" name="aluno1" id="aluno1">
                <label for="aluno1">Nova Atribuição</label>
                <input type="text" name="aluno1" id="aluno1">
            </div>
            <div class="btn">
                <button class="btn cancelar">Excluir</button>
                <button class="btn salvar" type="submit" class="btn salvar">Editar</button>
            </div>
        </form>
    </main>
    <footer>
        InnovaTech Solutions @2024
    </footer>
</body>
</html>