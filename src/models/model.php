<?php

namespace src\models;

use PDO;
use PDOException;


class model
{
    public function connection(string $sql)
    {
        $host = 'localhost';
        $dbName = 'ProAcademicHub';
        $userName = 'root';
        $pwd = '';

        try
        {
            $connection = new PDO("mysql:host={$host};dbname={$dbName}", $userName, $pwd);
            $preparation = $connection->prepare($sql);
            $preparation->execute();   
            return $preparation->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e)
        {
            echo "Erro de conexão: " . $e->getMessage();
        }
        
    }
}