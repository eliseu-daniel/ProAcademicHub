<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Progresso</title>
</head>
<body>
    <?php include 'template/header.php'; ?>
    <main class="CadProj">
        <h1 class="CadProj titulo">Relatório de Progresso</h1>
        <form action="" > 
            <div class="titulo2"> 
                <label for="titulo2">Nome do Projeto</label>
                <input type="text" name="titulo2" id="titulo2">
            </div>
            <div class="alunos">
                <label for="aluno1">Status do Projeto</label>
                <input type="text" name="aluno1" id="aluno1">
            </div>
            <div class="pdescricao">
                <label for="descricao">Descrição detalhada do andamento</label>
                <textarea name="descricao" id="descricao"></textarea>
            </div>
            <div class="alunos">
                <label for="aluno1">Responsável</label>
                <input type="text" name="aluno1" id="aluno1">
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
            <div class="progress">
                <button class="progress cancelar">Cancelar</button>
                <button class="progress salvar" type="submit">Salvar</button>
            </div>
        </form>
    </main>
    <footer>
        InnovaTech Solutions @2024
    </footer>
</body>
</html>