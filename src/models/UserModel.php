<?php

namespace src\models;

use PDO;

class UserModel extends Model
{
    public function validateUser($username, $pass)
    {
        $sql = "SELECT * FROM Usuarios WHERE nome = :username AND senha = :pass";

        $params = [
            ':username' => $username,
            ':pass' => $pass
        ];

        $result = $this->connection($sql, $params);
        
        return !empty($result);
    }
    //testar
    public function createProject($title, $description, $dateI, $dateF, $teacher)
    {
        $sql = "INSERT INTO Projetos(titulo, descricao, data_inicio, data_termino, criador_id) " 
        . "VALUES titulo = :title, descricao = :desc, data_inicio = :dateI, data_termino = :dateF, criador_id = :teacher";

        $params = [
            ':title'   => $title,
            ':desc'    => $description,
            ':dateI'   => $dateI,
            ':dateF'   => $dateF,
            ':teacher' => $teacher
        ];

        $result = $this->connection($sql, $params);

        return $result;
    }
    //testar
    public function viewProject()
    {
        $sql = "SELECT * FROM Projetos";

        $result = $this->connection($sql);

        return $result;
    }
}