<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Progresso</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="system.html">Home</a>
                </li>
                <li><a href="#projects">Projetos</a>
                    <ul>
                        <li><a href="create-project.html">Cadastrar Projeto</a></li>
                        <li><a href="edit-projects.html">Editar Projetos</a></li>
                        <li><a href="view-projects.html">Visualizar Lista de Projetos</a></li>
                    </ul>
                </li>
                <li><a href="#tasks">Tarefas</a>
                    <ul>
                        <li><a href="add-task.html">Adicionar Tarefa</a></li>
                        <li><a href="edit-task.html">Editar Tarefa</a></li>
                        <li><a href="view-tasks.html">Visualizar Lista de Tarefas</a></li>
                    </ul>
                </li>
                <li><a href="#collaboration">Colaboração</a>
                    <ul>
                        <li><a href="add-member.html">Adicionar Membros</a></li>
                        <li><a href="delete-member.html">Excluir Membros</a></li>
                        <li><a href="assign-task.html">Atribuir Tarefas</a></li>
                        <li><a href="comments.html">Comentários</a></li>
                    </ul>
                </li>
                <li><a href="#calendar">Calendário</a>
                    <ul>
                        <li><a href="view-calendar.html">Visualizar Calendário</a></li>
                    </ul>
                </li>
                <li><a href="#reports">Relatórios</a>
                    <ul>
                        <li><a href="progress-report.html">Relatório de Progresso</a></li>
                        <li><a href="performance-report.html">Relatório de Desempenho</a></li>
                    </ul>
                </li>
                <li><a href="#settings">Configurações</a>
                    <ul>
                        <li><a href="system-settings.html">Configurações do Sistema</a></li>
                        <li><a href="manage-user.html">Gerenciar Usuários</a></li>
                    </ul>
                </li>
                <li>
                    <a href="suport.html">Suporte</a>
                </li>
                <li>
                    <a href="index.html">Sair</a>
                </li>
            </ul>
        </nav>
    </header>
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