<?php
namespace BiblioTech\Model;

use Src\Entity\Livreur;
class Auteur{
    private int $id;
    private string $firstname;
    private string $lastname;
    private Livre $livre ;

    public function __construct(string $firstname,string $lastname ,Livre $livre) {
        $this->firstname = $firstname; 
        $this->lastname = $lastname;
        $this->livre = $livre;
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
   
}