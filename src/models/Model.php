<?php

namespace src\models;

use PDO;
use PDOException;


class Model
{
    private $host = '127.0.0.1';
    // private $dbName = 'proacademichub'; // usar no note
    private $dbName = 'ProAcademicHub'; // usar no pc
    private $userName = 'root';
    // private $pwd = '91776213'; // usar no note
    private $pwd = ''; // usar no pc

    public function connection(string $sql, array $params = [])
    {

        try {
            $connection = new PDO("mysql:host={$this->host};dbname={$this->dbName}", $this->userName, $this->pwd);
            $preparation = $connection->prepare($sql);
            $preparation->execute($params);
            return $preparation->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "Erro de conexão: " . $e->getMessage();
        }
    }
}
