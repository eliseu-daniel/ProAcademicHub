<?php

namespace src\models;

use PDO;
use PDOException;

class model
{
    public function connection(string $sql)
    {
        try
        {
            $connection = new PDO("mysql:host={$_ENV['host']};dbname={$_ENV['dbName']}", $_ENV['userName'], $_ENV['pwd']);
            $preparation = $connection->prepare($sql);
            $preparation->execute();   
            return $preparation->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e)
        {
            echo "Erro de conexão: " . $e->getMessage();
        }
        
    }
}