<?php
session_start();
$erro = isset($_SESSION['erro']) ? $_SESSION['erro'] : [];
unset($_SESSION['erro']);

$sucess = isset($_SESSION['sucess']) ? $_SESSION['sucess'] : [];
unset($_SESSION['sucess']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Projeto</title>
</head>
<body>
    <?php include 'template/header.php'; ?>

    <main class="CadProj">
        <h1 class="CadProj titulo">Cadastrar Projeto</h1>
        <!-- adicionar method posteriormente -->
        <form method="post" > 

            <?php
                        if (!empty($erro)) 
                        {
                            echo '<ul>';
                            foreach ($erro as $error)
                            {
                                echo "<li>$error</li>";
                            }
                            echo '</ul>';
                        }
            ?>

            <?php
                if (!empty($sucess)) 
                {
                    echo '<ul>';
                    foreach ($sucess as $sucesso)
                    {
                        echo "<li>$sucesso</li>";
                    }
                        echo '</ul>';
                }
            ?>

            <div class="titulo2"> 
                <label for="titulo2">Título</label>
                <input type="text" name="titulo2" id="titulo2">
            </div>
            <div class="descricao">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao"></textarea>
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
            <div class="alunos">
                <label for="aluno1">Aluno</label>
                <input type="text" name="aluno1" id="aluno1">
                <label for="aluno2">Aluno</label>
                <input type="text" name="aluno2" id="aluno2">
                <label for="aluno3">Aluno</label>
                <input type="text" name="aluno3" id="aluno3">
                <label for="aluno4">Aluno</label>
                <input type="text" name="aluno4" id="aluno4">
            </div>
            <div class="professor">
                <label for="professor">Professor</label>
                <select name="prof" id="prof">
                    <?php foreach ($users as $user): ?>
                        <option value="<?= $user->usuario_id ?>"><?= $user->nome ?></option>
                    <?php endforeach; ?>
                </select>
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
