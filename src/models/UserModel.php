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

    public function getAllUsers()
    {
        $sql = "SELECT usuario_id, nome FROM Usuarios";
        $result = $this->connection($sql);
        return $result;
    }

    public function createProject($title, $description, $dateI, $dateF, $teacher)
    {
        if($title != null && $description != null && $dateI != null && $dateF != null && $teacher != null)
        {
            $sql = "INSERT INTO Projetos(titulo, descricao, data_inicio, data_termino, usuario_id) " 
            . "VALUES (:title, :desc, :dateI, :dateF, :teacher)";
    
            $params = [
                ':title'   => $title,
                ':desc'    => $description,
                ':dateI'   => $dateI,
                ':dateF'   => $dateF,
                ':teacher' => $teacher
            ];
    
            $result = $this->connection($sql, $params);
        }
        return $result;

    }

    public function viewProject()
    {
        $sql = "SELECT Projetos.projeto_id, Projetos.titulo, Projetos.descricao, Projetos.data_inicio, Projetos.data_termino, Usuarios.nome 
            FROM Projetos
            INNER JOIN Usuarios ON Projetos.usuario_id = Usuarios.usuario_id ";

        $result = $this->connection($sql);

        return $result;
    }

    public function editProjectView($id)
    {
        
        $sql = "SELECT Projetos.projeto_id, Projetos.titulo, Projetos.descricao, Projetos.data_inicio, Projetos.data_termino, Usuarios.nome 
            FROM Projetos
            INNER JOIN Usuarios ON Projetos.usuario_id = Usuarios.usuario_id WHERE Projetos.projeto_id = :id";

            $params = [
                ':id' => $id
            ];

        $result = $this->connection($sql, $params);

        return $result;
    }

    function editProject($id, $title, $description, $dateI, $dateF)
    {
        $sql = "UPDATE Projetos SET titulo = :title, descricao = :desc, data_inicio = :dateI, data_termino = :dateF WHERE projeto_id = :id";
    
            $params = [
                ':title'   => $title,
                ':desc'    => $description,
                ':dateI'   => $dateI,
                ':dateF'   => $dateF,
                ':id'      => $id
            ];
    
            $result = $this->connection($sql, $params);
        
        return $result;
    }
}