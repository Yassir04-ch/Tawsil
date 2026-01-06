<?php
require_once __DIR__ . '/../config/Database.php';
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
    // public function updateuser(User $user){
    //     $sql = 'UPDATE users SET firstname = ?,lastname = ?,email = ?,password = ?,role = ?';
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->bindValue($user->setFirstame($user->firstname), $user->setlastame($user->lastname) ....);
    //     $stmt->execute();
    // }
    public function affichusers($id){
        $sql = 'SELECT * FROM users WHERE id != ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([ $id ]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}