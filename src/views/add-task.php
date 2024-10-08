<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Tarefa</title>
</head>
<body>
    <?php include 'template/header.php'; ?>
    <main class="CadProj">
        <h1 class="CadProj titulo">Adicionar Tarefa</h1>
         <!-- adicionar method posteriormente -->
         <form method="POST">
            <div class="titulo2"> 
                <label for="titulo2">Nome da Tarefa</label>
                <input type="text" name="titulo2" id="titulo2">
            </div>
            <div class="descricao">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao"></textarea>
            </div>
            <div class="professor">
                <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="pendente">Pendente</option>
                    <option value="concluido">Concluido</option>
                </select>
            </div>
            <div class="datas"> 
                <div id="datainicio">
                    <label for="dataInicio">Data Início</label>
                    <input type="date" name="dataInicio" id="dataInicio">
                </div>
                <div id="datafim">
                    <label for="dataFim">Data Fim</label>
                    <input type="date" name="dataFim" id="dataFim">
                </div>
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
            <?php
                
            ?>
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
