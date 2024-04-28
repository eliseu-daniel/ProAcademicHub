<?php

namespace src\database;

use PDO;

class Config{

    private $userName = 'root';
    private $passWord = '';
    private $dbName = 'ProAcademicHub';
    private $host = '127.0.0.1';
    
    public function query(string $sql){
        $connection = new PDO("mysql:host={$this->host};dbname={$this->dbName}", $this->userName, $this->password);
        $preparation = $connection->prepare($sql);
        $preparation->execute();   
        
        return $preparation->fetchAll(PDO::FETCH_OBJ);
    }




}