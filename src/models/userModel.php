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
            echo "tudo certo";
            //$this->system();
        }
        else
        {
            echo "sei la se vira ai";
            $erro[] = "Dados Invalidos";
        }
    }
}