<?php
namespace Src\Repository;

require_once __DIR__ . '/../../vendor/autoload.php';

use Src\Config\Database;
use PDO;
use Src\Abstract\User;
class UserRepository  extends Database{

    public function __construct(){
         parent::__construct();
    }

    public function adduser(User $user){

        $sql = "INSERT INTO users (firstname,lastname,email,password,role,active)
         VALUES (?,?,?,?,?,?)";
         $stmt = $this->conn->prepare($sql);
         $stmt->execute([$user->getFirstname(),$user->getLastname(),$user->getEmail(),$user->getPassword(),$user->getRole(),$user->getActive()]);
    }

    public function finduserbyemail($email){

        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':email',$email);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    public function affichusers($id){
        $sql = 'SELECT * FROM users WHERE id != ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([ $id ]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function updatactive($id,$act){
        $sql = 'UPDATE users SET active = ? WHERE id = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$act,$id]);
    }
}