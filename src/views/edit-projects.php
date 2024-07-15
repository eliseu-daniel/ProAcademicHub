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
    <title>Editar Projeto</title>
    <link rel="stylesheet" href="../views/css/style.css">
</head>
<body>
    <?php include 'template/header.php'; ?>
    <main class="CadProj">
        <h1 class="CadProj titulo">Editar Projeto</h1>
        
        <?php
            if (!empty($erro)) 
            {
                echo '<ul>';
                foreach ($erro as $error)
                {
                    echo "<li>$error</li>";
                }
                    echo '</ul>';
            }elseif(!empty($sucess)) 
            {
                echo '<ul>';
                foreach ($sucess as $sucesso)
                {
                    echo "<li>$sucesso</li>";
                }
                    echo '</ul>';
            }
        ?>

        <form method="post"> 
            <?php foreach ($projects as $projeto) {?>
                <div class="titulo2"> 
                    <label for="titulo2">Título</label>
                    <input type="text" name="titulo2" id="titulo2" value="<?= $projeto->titulo ?>" >
                </div>
                <div class="descricao">
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao" id="descricao" ><?= $projeto->descricao ?></textarea>
                </div>
                <div class="datas"> 
                    <div id="datainicio">
                        <label for="dataInicio">Data Início</label>
                        <input type="date" name="dataInicio" id="dataInicio" value="<?= $projeto->data_inicio ?>">
                    </div>
                    <div id="datafim">
                        <label for="dataFim">Data Fim</label>
                        <input type="date" name="dataFim" id="dataFim" value="<?= $projeto->data_termino ?>">
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
                    <input type="text" name="professor" id="professor" value="<?= $projeto->nome ?>" readonly>
                </div>

            <?php 
                } 
            ?>
            
                <div class="btn">
                    <a href="/src/delete-project/<?= $projeto->projeto_id ?>" class="btn cancelar">Excluir</a> <!-- passar msg confirmando a exclusao --> 
                    <button class="btn salvar" type="submit" class="btn salvar">Editar</button>
                </div>
        </form>
    </main>
    <footer>
        InnovaTech Solutions @2024
    </footer>
</body>
</html>