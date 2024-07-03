<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <li>
                    <a href="system.php">Home</a>
                </li>
                <li><a href="#projects">Projetos</a>
                    <ul>
                        <li><a href="create-project.php">Cadastrar Projeto</a></li>
                        <li><a href="edit-projects.php">Editar Projetos</a></li>
                        <li><a href="view-projects.php">Visualizar Lista de Projetos</a></li>
                    </ul>
                </li>
                <li><a href="#tasks">Tarefas</a>
                    <ul>
                        <li><a href="add-task.php">Adicionar Tarefa</a></li>
                        <li><a href="edit-task.php">Editar Tarefa</a></li>
                        <li><a href="view-tasks.php">Visualizar Lista de Tarefas</a></li>
                    </ul>
                </li>
                <li><a href="#collaboration">Colaboração</a>
                    <ul>
                        <li><a href="add-member.php">Adicionar Membros</a></li>
                        <li><a href="delete-member.php">Excluir Membros</a></li>
                        <li><a href="assign-task.php">Atribuir Tarefas</a></li>
                        <li><a href="comments.php">Comentários</a></li>
                    </ul>
                </li>
                <li><a href="#calendar">Calendário</a>
                    <ul>
                        <li><a href="view-calendar.php">Visualizar Calendário</a></li>
                    </ul>
                </li>
                <li><a href="#reports">Relatórios</a>
                    <ul>
                        <li><a href="progress-report.php">Relatório de Progresso</a></li>
                        <li><a href="performance-report.php">Relatório de Desempenho</a></li>
                    </ul>
                </li>
                <li><a href="#settings">Configurações</a>
                    <ul>
                        <li><a href="system-settings.php">Configurações do Sistema</a></li>
                        <li><a href="manage-user.php">Gerenciar Usuários</a></li>
                    </ul>
                </li>
                <li>
                    <a href="suport.php">Suporte</a>
                </li>
                <li>
                    <a href="src/">Sair</a>
                </li>
            </ul>
        </nav>
    </header>
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
                <label for="aluno1">Nova Nome</label>
                <input type="text" name="aluno1" id="aluno1">
                <label for="aluno1">Nova Atribuição</label>
                <input type="text" name="aluno1" id="aluno1">
            </div>
            <div class="btn">
                <button class="btn cancelar">Cancelar</button>
                <button class="btn salvar" type="submit" class="btn salvar">Editar</button>
            </div>
        </form>
    </main>
    <footer>
        InnovaTech Solutions @2024
    </footer>
</body>
</html>