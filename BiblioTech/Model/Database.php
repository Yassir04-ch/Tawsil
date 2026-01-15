<?php
namespace BiblioTech\Model;
use PDO;
use PDOException;
use Exception;
class Database{

private static PDO $db;

public function __construct() {
    try {
        $this->db = new PDO("mysql:host=localhost;dbname=test","root","");
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
      throw new Exception("errorr",$e->getMessage());
    }
  }
    public static function getconn() {
        return self::$db;
    }
}