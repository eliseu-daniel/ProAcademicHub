<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Membros</title>
</head>

<body>
    <?php include 'template/header.php'; ?>
    <main class="CadProj">
        <h1 class="CadProj titulo">Excluir Membro</h1>
        <form action="">
            <div>
                <label for="projeto">Projeto</label>
                <select name="projeto" id="projeto">
                    <?php foreach ($tasks as $task): ?>
                        <option value="<?= $task->projeto_id ?>"><?= $task->tituloP ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="nome">Nome do Membro</label>
                <select name="nome" id="nome">
                    <?php foreach ($users as $user): ?>
                        <option value="<?= $user->usuario_id ?>"><?= $user->nome ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="btn">
                <button class="btn cancelar">Cancelar</button>
                <button class="btn salvar" type="submit">Excluir</button>
            </div>
        </form>
    </main>
    <footer>
        InnovaTech Solutions @2024
    </footer>
</body>

</html>