<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Desempenho</title>
</head>
<body>
    <?php include 'template/header.php'; ?>
    <main class="CadProj">
        <h1 class="CadProj titulo">Relatório de Desempenho</h1>
        <div class="titulo2"> 
            <label for="titulo2">Nome do Projeto</label>
            <input type="text" name="titulo2" id="titulo2">
        </div>
        <div class="alunos">
            <label for="aluno1">Status do Projeto</label>
            <input type="text" name="aluno1" id="aluno1">
        </div>
        <div class="pdescricao">
            <label for="descricao">Eficiencia da Equipe</label>
            <textarea name="descricao" id="descricao"></textarea>
        </div>
        <div class="alunos">
            <label for="aluno1">Aluno</label>
            <input type="text" name="aluno1" id="aluno1">
            <label for="aluno1">Desempenho Pessoal</label>
            <input type="text" name="aluno1" id="aluno1">
            <label for="aluno2">Aluno</label>
            <input type="text" name="aluno2" id="aluno2">
            <label for="aluno2">Desempenho Pessoal</label>
            <input type="text" name="aluno2" id="aluno2">
        </div>
        <div class="professor">
            <label for="professor">Responsável</label>
            <input type="text" name="professor" id="professor">
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
    </main>
    <footer>
        InnovaTech Solutions @2024
    </footer>
</body>
</html>