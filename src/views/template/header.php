<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento de Projetos</title>
    <link rel="stylesheet" href="views/css/style.css">
</head>
<body>
<header>
        <nav>
            <ul>
            <li>
                    <a href="/src/home">Home</a>
                </li>
                <li><a href="#projects">Projetos</a>
                    <ul>
                        <li><a href="/src/create-projects">Cadastrar Projeto</a></li>
                    <!-- <li><a href="edit-projects.php">Editar Projetos</a></li> -->
                        <li><a href="/src/view-projects">Visualizar Lista de Projetos</a></li>
                    </ul>
                </li>
                <li><a href="#tasks">Tarefas</a>
                    <ul>
                        <li><a href="/src/add-task">Adicionar Tarefa</a></li>
                        <!--<li><a href="edit-task.php">Editar Tarefa</a></li> -->
                        <li><a href="/src/view-tasks">Visualizar Lista de Tarefas</a></li>
                    </ul>
                </li>
                <li><a href="#collaboration">Colaboração</a>
                    <ul>
                        <li><a href="/src/add-member">Adicionar Membros</a></li>
                        <li><a href="/src/delete-member">Excluir Membros</a></li>
                        <li><a href="/src/assign-task">Atribuir Tarefas</a></li>
                        <li><a href="/src/comments">Comentários</a></li>
                    </ul>
                </li>
                <li><a href="#calendar">Calendário</a>
                    <ul>
                        <li><a href="/src/view-calendar">Visualizar Calendário</a></li>
                    </ul>
                </li>
                <li><a href="#reports">Relatórios</a>
                    <ul>
                        <li><a href="/src/progress-report">Relatório de Progresso</a></li>
                        <li><a href="/src/performance-report">Relatório de Desempenho</a></li>
                    </ul>
                </li>
                <li><a href="#settings">Configurações</a>
                    <ul>
                        <li><a href="/src/system-settings">Configurações do Sistema</a></li>
                        <li><a href="/src/manage-user">Gerenciar Usuários</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/src/suport">Suporte</a>
                </li>
                <li>
                    <a href="/src/logout">Sair</a>
                </li>
                <?php foreach ($users as $user) { ?>
                <li style="color: white;">
                    <?= $user->nome ?>
                </li>
                <?php } ?>
            </ul>
        </nav>
    </header>