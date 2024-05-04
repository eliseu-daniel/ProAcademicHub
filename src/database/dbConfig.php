<?php

namespace src\database;

use PDO;

class Config{

    
    
    public function query(string $sql){
        $connection = new PDO("mysql:host={$this->host};dbname={$this->dbName}", $this->userName, $this->password);
        $preparation = $connection->prepare($sql);
        $preparation->execute();   
        
        return $preparation->fetchAll(PDO::FETCH_OBJ);
    }




}