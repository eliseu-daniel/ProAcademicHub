<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Lista de Tarefas</title>
    <link rel="stylesheet" href="/public/bootstrap.min.css">
</head>
<body>
    <?php include 'template/header.php'; ?>
    <main class="CadProj">
        <h1 class="CadProj titulo">Visualizar Lista de Tarefas</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Data Inicio</th>
                    <th>Data Fim</th>
                    <th>Projeto</th>
                    <th>Responsavel</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($tasks as $task) {?>
                <tr>
                    <td>
                        <?= $task->tituloT ?>
                    </td>
                    <td>
                        <?= $task->descricaoT ?>
                    </td>
                    <td>
                        <?= $task->status ?>
                    </td>
                    <td>
                        <?= $task->data_inicio ?>
                    </td>
                    <td>
                        <?= $task->data_termino ?>
                    </td>
                    <td>
                        <?= $task->tituloP ?>
                    </td>
                    <td>
                        <?= $task->nome?>
                    </td>
                    <td>
                        <a href="edit-task/<?= $task->tarefa_id?>">Editar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
    <footer>
        InnovaTech Solutions @2024
    </footer>
</body>
</html>
