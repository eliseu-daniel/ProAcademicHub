<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Membros</title>
</head>
<body>
    <?php include 'template/header.php'; ?>
    <main class="CadProj">
        <h1 class="CadProj titulo">Adicionar Membros</h1>
        <form action="">  
            <label for="projeto">Projeto</label>
            <input type="text" name="projeto" id="projeto">
            <label for="nome">Nome do Membro</label>
            <input type="text" name="nome" id="nome">
            <div class="btn">
                <button class="btn cancelar">Cancelar</button>
                <button class="btn salvar" type="submit">Salvar</button>
            </div>
        </form>
    </main>
    <footer>
        InnovaTech Solutions @2024
    </footer>
</body>
</html>
