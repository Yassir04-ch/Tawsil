<?php   
namespace Src\Entity;
use Src\Abstract\User;
class Livreur extends User{
     public function __construct(string $firstname,string $lastname,string $email, $password, $role,$active){
        parent::__construct($firstname,$lastname, $email, $password,$role ,$active );
    }

   public function getRole(){
    return 'livreur';
   }
}