<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte</title>
</head>
<body>
    <?php include 'template/header.php'; ?>
    <main class="CadProj">
        <h1 class="CadProj titulo">Suporte</h1>
        <form action="" > 
            <div class="alunos">
                <label for="aluno1">Aluno/Professor</label>
                <input type="text" name="aluno1" id="aluno1">
                <label for="aluno1">Email</label>
                <input type="text" name="aluno1" id="aluno1">
                <label for="aluno1">Projeto</label>
                <input type="text" name="aluno1" id="aluno1">
            </div>
            <div class="descricao">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao"></textarea>
            </div>
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
