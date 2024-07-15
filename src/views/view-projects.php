<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Lista de Projetos</title>
    <link rel="stylesheet" href="/public/bootstrap.min.css">
</head>
<body>
    <?php include 'template/header.php'; ?>
    <main class="CadProj">
        <h1 class="CadProj titulo">Visualizar Lista de Projetos</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Data Inicio</th>
                    <th>Data Termino</th>
                    <th>Responsavel</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($projects as $projeto) {?>
                    <tr>
                        <td>
                            <?= $projeto->titulo ?>
                        </td>
                        <td>
                            <?= $projeto->descricao ?>
                        </td>
                        <td>
                            <?= $projeto->data_inicio ?>
                        </td>
                        <td>
                            <?= $projeto->data_termino ?>
                        </td>
                        <td>
                            <?= $projeto->nome ?>
                        </td>
                        <td class="btn btn-secondary">
                            <a href="/src/edit-project/<?= $projeto->projeto_id ?>"> 
                                Editar 
                            </a>
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
