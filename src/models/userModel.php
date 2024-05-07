<?php

namespace src\models;

use mysqli;
use PDO;

require 'model.php';

class userModel extends model
{
    public function validateUser($username, $pass)
    {
        $sql = "SELECT * FROM Usuarios WHERE nome = :username AND senha = :pass";

        $params = [
            ':username' => $username,
            ':pass' => $pass
        ];

        $result = $this->connection($sql, $params);

        if(!empty($result))
        {
            header('Location: ../app.php');
        }
        else
        {
            //mensagem de erro pro usuario
        }
    }
}