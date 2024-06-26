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

        <?php
            if (!empty($errors)) 
            {
                echo '<ul>';
                foreach ($erro as $error)
                {
                    echo "<li style='color: red;'>$error</li>";
                }
                echo '</ul>';
            }
        ?>

            <form class="formLogin" action="/src/controllers/UserController.php" method="post">
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