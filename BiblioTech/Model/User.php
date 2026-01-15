<?php
namespace BiblioTech\Model;
use PDO;

abstract class User{
    protected int $id;
    protected string $firstname;
    protected string $lastname;
    protected string $email;
    protected string $password;
    protected string $role;
    public function __construct(string $firstname, string $lastname, string $email, string $password, string $role){
        $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;
    }

     
    public function getFirstname()
    {
        return $this->firstname;
    }

    
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

     
    public function getLastname()
    {
        return $this->lastname;
    }

  
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }
     public function getEmail()
    {
        return $this->email;
    }
 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
 
    public function getPassword()
    {
        return $this->password;
    }

   
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

     
    abstract public function getRole();

    
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
  
    public function login(string $email, string $password){
    $sql = 'SELECT * FROM users WHERE email = ?';
    $stmt = Database::getconn()->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ( $stmt->rowCount() <= 0){
            return "user non trouver" ;
            header('location:register.php');
        }
        if ( $user["password"] != $password ){
            return "password incorect";
        }
    
        $_SESSION["id"] = $user["id"];
        $_SESSION["email"] = $user["email"];
        $_SESSION["role"] = $user["role"];
        $_SESSION["firstname"] = $user["firstname"];
        $_SESSION["lastname"] = $user["lastname"];
        switch ($user->role) {
            case 'member':
                header('location:member.php');
                break;
                case 'aurganisateur.php':
                header('location:aurganisateur.php');
                break;
            
            default:
               header('location:index.php');
                break;
        }
   }

}