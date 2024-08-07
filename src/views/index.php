<?php
session_start();
$erro = isset($_SESSION['erro']) ? $_SESSION['erro'] : [];
unset($_SESSION['erro']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProAcademic Hub</title>
    <link rel="stylesheet" href="/src/views/css/style.css">
</head>
<body>
    <main >
        <div class="systemLogin">
            <form class="formLogin" method="post">
                
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

                <div class="userLogin">
                    <label for="user">Usuário:</label>
                    <input type="text" name="user" id="user" required>
                </div>
                <div class="userPass">
                    <label for="userPw">Senha:</label>
                    <input type="password" name="userPw" id="userPw" required>
                </div>
                <div class="btnLogin">
                    <button class="btnLog" type="submit">Entrar</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>