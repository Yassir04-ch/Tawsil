<?php
namespace Src\Config;
use PDO;
use PDOException;
use Exception;

class Database
{
    protected PDO $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO( "mysql:host=localhost;dbname=lmsakhar","root",  "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new Exception('Connexion failed');
        }
    }

    public function getConn(): PDO
    {
        return $this->conn;
    }
}
