<?php   
namespace Src\Entity;

class Livreur extends User{
     public function __construct(string $firstname,string $lastname,string $email, $password, $role = "client",$active){
        parent::__construct($firstname,$lastname, $email, $password,$role,$active );
    }

   public function getRole(){
    return 'livreur';
   }
}