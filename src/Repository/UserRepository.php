<?php
class UserRepository {
    private PDO $conn;

    public function __constract(PDO $pdo){
        $this->pdo = $conn;
    }

    public function adduser(User $user){

        $sql = "INSERT INTO users (fisrtname,lastname,email,password,role,active)
         VALUES (?,?,?,?,?,?)";
         $stmt = $this->pdo->prepare($sql);
         $stmt->execute($user->firstname,$user->lastname,$user->email,$user->password,$user->role,$user->active);
    }

    public function finduserbyemail($email){

        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->binValue(':email',$email);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
}