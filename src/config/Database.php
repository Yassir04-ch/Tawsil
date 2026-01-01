<?php

class Database{
    protected PDO $conn;
      
    public function __construct(){
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=lmsakhar","root","");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
        throw new Exception('connexion Filed');
        }
    }
    public function getconn(){
        return $this->conn;
    }
   
}