<?php

namespace src\models;

use mysqli;
use PDO;

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
            //entrar no sistema
        }
        else
        {
            //mensagem de erro pro usuario
        }
    }
}